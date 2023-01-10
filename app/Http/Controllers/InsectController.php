<?php

namespace App\Http\Controllers;

use App\Models\Insect;
use Illuminate\Http\Request;

class InsectController extends Controller
{
    public function index()
    {
        return Insect::all();
    }
    public function store(Request $request)
    {
        $insect = new Insect();
        $insect->name = $request->name;
        $insect->nomenclature = $request->nomenclature;
        $insect->inserted_by = $request->inserted_by;
        $insect->extinct = $request->extinct;
        $insect->save();
    }
    public function show($id)
    {
        return Insect::find($id);
    }

    public function destroy($id)
    {
        Insect::find($id)->delete();
        return InsectController::index();
    }
    public function update()
    {
    }
}
