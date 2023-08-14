<?php

namespace App\Http\Controllers;

use DB;
use DateTime;
use DatePeriod;
use DateIntercal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\DataTables\EmployeeDataTable;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller {
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function indexDatatables(UsersDataTable $dataTable)
    {
        return $dataTable->render('user');
    }

    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index() {
        $staff = DB::table( 'staff' )->count();

        //Seleção para banco de dados.
        $users = DB::table( 'user' )->select( DB::raw( 'COUNT(*) as count' ), DB::raw( 'MONTHNAME(created_at) as month_name' ) )
        ->whereYear( 'created_at', '<=', date( 'Y' ) )
        ->groupBy( DB::raw( 'month_name' ) )
        ->orderBy( 'id', 'ASC' )
        ->pluck( 'count', 'month_name' );

        $labels = $users->keys();
        $data = $users->values();

        //dd( $data );
        $dateTime = new \DateTime();

        $userData = DB::table( 'user' )->select( \DB::raw( 'COUNT(*) as count' ) ,
        DB::raw( 'YEAR(created_at) as day_name'))
        ->whereYear('created_at', '<=',  date( 'Y' ) )
        ->groupBy( DB::raw( 'day_name' ) )
        ->orderBy( 'day_name', 'ASC' )
        ->pluck( 'count', 'day_name' );

        //dd($userData);

        $userData2020 = DB::table( 'user' )->select( \DB::raw( 'COUNT(*) as count' ) )
        ->whereYear( 'created_at', '=', date( '2020' ) )
        ->groupBy( DB::raw( 'Month(created_at)' ) )
        ->pluck( 'count' );

        $userData2021 = DB::table( 'user' )->select( \DB::raw( 'COUNT(*) as count' ) )
        ->whereYear( 'created_at', '=', date( '2021' ) )
        ->groupBy( DB::raw( 'Month(created_at)' ) )
        ->pluck( 'count' );

        $userData2022 = DB::table( 'user' )->select( \DB::raw( 'COUNT(*) as count' ) )
        ->whereYear( 'created_at', '=', date( '2022' ) )
        ->groupBy( DB::raw( 'Month(created_at)' ) )
        ->pluck( 'count' );

        $userData2023 = DB::table( 'user' )->select( \DB::raw( 'COUNT(*) as count' ) )
        ->whereYear( 'created_at', '=', date( '2023' ) )
        ->groupBy( DB::raw( 'Month(created_at)' ) )
        ->pluck( 'count' );


        $total = DB::table('user')->count();
        $user_activity_logs = DB::table( 'user_activity_logs' )->count();
        $activity_logs = DB::table( 'activity_logs' )->count();

        return view( 'home', compact( 'staff', 'users', 'user_activity_logs', 'activity_logs', 'labels', 'data', 'userData','total','userData2020','userData2021','userData2022','userData2023' ) );

    }
}
