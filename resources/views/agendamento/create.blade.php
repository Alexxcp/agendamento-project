@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Faça o agendamento da consulta médica</div>
                <form action="{{ url('agendamentos') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control{{$errors->has('descricao') ? ' is-invalid':''}}"
                                required value="{{ old('descricao') }}" id="descricao" name="descricao">
                            <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="datahora">Data/Hora</label>
                            <input id="datahora" type="datetime-local" name="datahora" class="form-control" required
                                value="{{ strftime('%Y-%m-%dT%H:%M', strtotime(old('datahora'))) }}" />
                        </div>
                        <div class="form-group">
                            <label for="id_paciente">Paciente</label>
                            <select name="id_paciente" class="form-control" id="id_paciente" required
                                value="{{ $agendamento->id_paciente }}">
                                @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->id }}"
                                    {{ $paciente->id == $agendamento->id_paciente ? 'selected="selected"' : ''}}>
                                    {{ $paciente->nome }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_medico">Médico</label>
                            <select name="id_medico" class="form-control" required id="id_medico"
                                value="{{ $agendamento->id_medico }}">
                                @foreach($medicos as $medico)
                                <option value="{{ $medico->id }}"
                                    {{ $medico->id == $agendamento->id_medico ? 'selected="selected"' : ''}}>
                                    {{ $medico->nome }} -> {{ $medico->especializacoes }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer text-right">
                            <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection