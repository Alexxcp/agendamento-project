<?php

namespace App\Http\Controllers;

use App\Medico;
use App\Http\Requests\MedicoRequest;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::orderBy('id', 'DESC')->get();
        return view('medico.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicoRequest $request)
    {
        $medico = Medico::create($request->all());
        return redirect('medicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = Medico::find($id);
        return view('medico.show', ['data' => $medico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = Medico::find($id);
        return view('medico.edit', ['data' => $medico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicoRequest $request, $id)
    {

        $medico = Medico::findOrFail($id);

        if (empty($request->get('password'))) {
            $data = $request->except('password');
        } else {
            $data = $request->all();
        }
        $medico->update($data);
        return redirect('medicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medico::destroy($id);
        return redirect('medicos');
    }
}