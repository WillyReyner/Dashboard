<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use DatePeriod;
use DateIntercal;
use Illuminate\Support\Facades\DB as FacadesDB;
use Carbon\Carbon;
use App\DataTables\UsersDataTable;

class EmployeeController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('employee');
    }
}
