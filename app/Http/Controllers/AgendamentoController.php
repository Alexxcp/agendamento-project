<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use App\Paciente;
use App\Medico;
use App\Http\Requests\AgendamentoRequest;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::orderBy('id', 'DESC')->get();
        return view('agendamento.index', compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        $agendamento = new Agendamento();
        return view('agendamento.create')->with('pacientes', $pacientes)
            ->with('medicos', $medicos)
            ->with('agendamento', $agendamento);
        /*
        $method = 'post';
        $agendamento = new Agendamento();
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('agendamento.create')->with('pacientes', $pacientes)
            ->with('medicos', $medicos)
            ->with('method', $method)
            ->with('agendamento', $agendamento);

            */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendamentoRequest $request)
    {
        $contato = Agendamento::create($request->all());
        return redirect('agendamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agendamento = Agendamento::find($id);
        return view('agendamento.show', ['data' => $agendamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agendamento = Agendamento::find($id);
        return view('agendamento.edit', ['data' => $agendamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgendamentoRequest $request, $id)
    {
        $contato = Agendamento::find($id);
        $contato->fill($request->all());
        $contato->update();
        return redirect('agendamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agendamento::destroy($id);
        return redirect('agendamentos');
    }
}