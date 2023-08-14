<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Form;
use App\Models\Client;
use Inertia\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Helpers\CellHelper;

class ClientController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_name=='Admin')
        {
            $data = DB::table('client')->get();
            return view('client.client_control',compact('data'));
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function clientRegister()
    {
        return view('client.client_register');
    }

     // save new user
     public function addNewClientSave(Request $request)
     {
        $request->validate([
            'name'      => 'required|string|max:255',
            'register'      => 'required|min:7|numeric',
            'cpf'      => 'required|min:14|numeric',
            'status'     => 'required|image',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone_number'     => 'required|min:11|numeric',
            'celphone_number'    => 'required|string|numeric',
            'cep' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ]);

        //$image = time().'.'.$request->image->extension();
        //$request->image->move(public_path('images'), $image);

        $user = new Client;
        $user->name         = $request->name;
        $user->register        =$request->register;
        $user->cpf           =  preg_replace('/[^0-9]/is','',$request->cpf );
        $user->avatar       = $image;
        $user->email        = $request->email;
        $user->phone_number = $request->phone;
        $user->cep                = $request->cep;
        $user->street             = $request->street;
        $user->number_address     = $request->number_address;
        $user->city               = $request->city;
        $user->state              = $request->state;


        $user->save();

        Toastr::success('Create new account successfully :)','Success');
        return redirect()->route('user_management');
    }

    // update
    public function update(Request $request)
    {
        $id           = $request->id;
        $fullName     = $request->fullName;
        $register     = $request->register;
        $cpf          =  preg_replace('/[^0-9]/is','',$request->cpf );
        $email        = $request->email;
        $phone_number = $request->phone_number;
        $status       = $request->status;


        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        $old_image = User::find($id);

        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($old_image->avatar=='photo_defaults.jpg')
        {
            if($image != '')
            {
                $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $image_name);
            }
        }
        else{

            if($image != '')
            {
                $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $image_name);
                unlink('images/'.$old_image->avatar);
            }
        }

        $update = [
            'id'           => $id,
            'name'         => $fullName,
            'cpf'          => $cpf,
            'register'     => $register,
            'avatar'       => $image_name,
            'email'        => $email,
            'phone_number' => $phone_number,
            'status'       => $status,

        ];

        $activityLog = [

            'user_name'    => $fullName,
            'email'        => $email,
            'phone_number' => $phone_number,
            'status'       => $status,
            'modify_user'  => 'Update',
            'date_time'    => $todayDate,
        ];

        DB::table('user_activity_logs')->insert($activityLog);

        User::where('id',$request->id)->update($update);
        User::where('id',$request->id)->update(['password'=> Hash::make($request->new_password)]);
        Toastr::success('User updated successfully :)','Success');
        return redirect()->route('user_management');
    }
    // delete
    public function delete($id)
    {
        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');

        $fullName     = $user->name;
        $email        = $user->email;
        $phone_number = $user->phone_number;
        $status       = $user->status;
        $role_name    = $user->role_name;

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        $activityLog = [

            'user_name'    => $fullName,
            'email'        => $email,
            'phone_number' => $phone_number,
            'status'       => $status,
            'role_name'    => $role_name,
            'modify_user'  => 'Delete',
            'date_time'    => $todayDate,
        ];

        DB::table('user_activity_logs')->insert($activityLog);

        $delete = User::find($id);
        //unlink('images/'.$delete->avatar);
        $delete->delete();
        Toastr::success('User deleted successfully :)','Success');
        return redirect()->route('user_management');
    }
}
