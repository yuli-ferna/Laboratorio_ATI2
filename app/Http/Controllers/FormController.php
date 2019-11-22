<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{
    //
    protected $table = 'my_users';
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|max:255',
            'Apellido' => 'required|max:255',
            'Email' => 'required|email|max:255',
            'Cedula' => 'required|numeric|max:8',
            'Genero' => 'required',
        ]);
        \App\Form::create($validatedData);

        return response()->json('Form is successfully validated and data has been saved');
    }
}
