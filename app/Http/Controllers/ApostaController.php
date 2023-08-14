<?php

namespace App\Http\Controllers;

use App\Models\Aposta;
use Illuminate\Http\Request;

class ApostaController extends Controller
{
    public function index()
    {
        $data = Aposta::get();
        return  $data;

    }

    public function show(Aposta $area)
    {
        return $area;
    }

    public function store(Request $request) {
        $data = $request->validated();

        $area = Aposta::create($data);

        return $area;
    }

    public function update(Request $request, Aposta $area) {
        $area->name = $request->name;
        $area->save();

        return $area;
    }

    public function delete(Request $request, Aposta $area){
        $area->id = $request->id;
        $area->delete();

        return $area;
    }

    public function toggleStatus(Aposta $area)
    {
        $area->status = !$area->status;

        $area->save();

        return $area;
    }
}
