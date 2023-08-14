<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UserManagementController extends Controller
{
    public function user_register()
    {
        $data = DB::table('users')->get();
        return view('usermanagement/user_register');
    }

    public function index()
    {
        if (Auth::user()->role_name=='Admin' || Auth::user()->role_name=='Super Admin')
        {
            $data = DB::table('users')->get();
            return view('usermanagement/user_control',compact('data'));
        }
        else
        {
            return redirect()->route('home');
        }

    }
    // view detail
    public function viewDetail($id)
    {
        if (Auth::user()->role_name=='Admin')
        {
            $data = DB::table('users')->where('id',$id)->get();
            $roleName = DB::table('role_type_users')->get();
            $userStatus = DB::table('user_types')->get();
            return view('user_management.view_users',compact('data','roleName','userStatus'));
        }
        else
        {
            return redirect()->route('home');
        }
    }
    // use Registro de atividade
    public function activityLog()
    {
        $activityLog = DB::table('user_activity_logs')->get();
        return view('user_management.user_activity_log',compact('activityLog'));
    }
    // Registro de atividade
    public function activityLogInLogOut()
    {
        $activityLog = DB::table('activity_logs')->get();
        return view('user_management.activity_log',compact('activityLog'));
    }

    // profile user
    public function profile()
    {
        return view('user_management.profile_user');
    }

    // add new user
    public function addNewUser()
    {
        return view('user_management.add_new_user');
    }

     // save new user
     public function addNewUserSave(Request $request)
     {

        $request->validate([
            'name'      => 'required|string|max:255',
            'image'     => 'required|image',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'required|min:11|numeric',
            'cep' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'status'    => 'required|string|max:255',
            'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        $user = new User;
        $user->name         = $request->name;
        $user->avatar       = $image;
        $user->email        = $request->email;
        $user->phone_number = $request->phone;
        $user->cep                = $request->cep;
        $user->street             = $request->street;
        $user->number_address     = $request->number_address;
        $user->city               = $request->city;
        $user->state              = $request->state;
        $user->role_name    = $request->role_name;
        $user->password     = Hash::make($request->password);
        $user->role_name    = $request->role_name;

        $user->save();

        Toastr::success('Create new account successfully :)','Success');
        return redirect()->route('user_management');
    }

    // update
    public function update(Request $request)
    {
        $id             = $request->id;
        $fullName       = $request->fullName;
        $email          = $request->email;
        $phone_number   = $request->phone_number;
        $cep            = $request->cep;
        $street         = $request->street;
        $number_address = $request->number_address;
        $city           = $request->city;
        $state          = $request->state;
        $status         = $request->status;
        $role_name      = $request->role_name;
        $new_password   = $request->new_password;
        $new_confirm_password = $request->new_confirm_password;

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

            'id'                => $id,
            'name'              => $fullName,
            'avatar'            => $image_name,
            'email'             => $email,
            'phone_number'      => $phone_number,
            'cep'               => $cep,
            'street'            => $street,
            'number_address'    => $number_address,
            'city'              => $city,
            'state'             => $state,
            'status'            => $status,
            'status'            => $status,
            'role_name'         => $role_name,
            'password'          => $new_password,
            'password'          => $new_confirm_password,
        ];

        $activityLog = [

            'user_name'    => $fullName,
            'email'        => $email,
            'phone_number' => $phone_number,
            'cep'               => $cep,
            'street'            => $street,
            'number_address'    => $number_address,
            'city'              => $city,
            'state'             => $state,
            'status'            => $status,
            'status'       => $status,
            'role_name'    => $role_name,
            'modify_user'  => 'Update',
            'date_time'    => $todayDate,
        ];

        DB::table('user_activity_logs')->insert($activityLog);
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

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

        $fullName       = $user->name;
        $email          = $user->email;
        $phone_number   = $user->phone_number;
        $cep            = $user->cep;
        $street         = $user->street;
        $number_address = $user->number_address;
        $city           = $user->city;
        $state          = $user->state;
        $status         = $user->status;
        $role_name      = $user->role_name;

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        $activityLog = [

            'user_name'         => $fullName,
            'email'             => $email,
            'phone_number'      => $phone_number,
            'cep'               => $cep,
            'street'            => $street,
            'number_address'    => $number_address,
            'city'              => $city,
            'state'             => $state,
            'status'            => $status,
            'role_name'         => $role_name,
            'modify_user'       => 'Delete',
            'date_time'         => $todayDate,
        ];

        DB::table('user_activity_logs')->insert($activityLog);

        $delete = User::find($id);
        //unlink('images/'.$delete->avatar);
        $delete->delete();
        Toastr::success('User deleted successfully :)','Success');
        return redirect()->route('user_management');
    }

    // view change password
    public function changePasswordView()
    {
        return view('user_management.change_password');
    }

    // change password in db
    public function changePasswordDB(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Toastr::success('User change successfully :)','Success');
        return redirect()->route('home');
    }

    public function consultarCepAutomatico($cep)
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");
        $data = $response->json();

        return $data;
    }
}









