<?php

namespace App\Http\Controllers\api;

use App\Medico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medico::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Medico::findOrFail($id);
    }
}