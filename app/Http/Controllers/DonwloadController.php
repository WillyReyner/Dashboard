<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonwloadController extends Controller
{
    public function indexrelatorio(){
        return view("relatorio.indexDownload");
    }

    public function examesrelatorio(){
        return view("relatorio.examesDownload");
    }
}

