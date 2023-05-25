<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FormController_tugas2 extends Controller
{
    //
    public function index()
    {
        return view('form-tugas2');
    }
    
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        return view('hasil-tugas2', ['data' => $request]);
    }
}