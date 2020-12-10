@extends('layouts.app')

@section('stylecss')
<style media="screen">
.img-avatar-xs {
    width: 30px;
    height: 30px;
    border: 1px solid #c0c0c0;
    border-radius: 5px;
}

.a-line {
    line-height: 30px;
}
</style>

@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Pacientes
            <a href="{{ url('pacientes/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($pacientes as $paciente)
                        <tr>
                            <td>
                                <a href="{{ url('pacientes/'.$paciente->id) }}">
                                    <img src="{{ $paciente->avatar_image }}" class="img-avatar-xs">
                                </a>
                            </td>
                            <td><a class='a-line' href="{{ url('pacientes/'.$paciente->id) }}">{{ $paciente->nome }}</a>
                            </td>
                            <td class="d-none d-md-table-cell"><a class='a-line'
                                    href="{{ url('pacientes/'.$paciente->id) }}">{{ $paciente->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line'
                                    href="{{ url('pacientes/'.$paciente->id) }}">{{ $paciente->email }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection