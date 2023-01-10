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
    public function store($id)
    {
    }
    public function show($id)
    {
        return Insect::find($id);
    }
    public function delete()
    {
    }
    public function update()
    {
    }
}
