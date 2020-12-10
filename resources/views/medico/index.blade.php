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
            Médicos
            <a href="{{ url('medicos/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($medicos as $medico)
                        <tr>
                            <td><a class='a-line' href="{{ url('medicos/'.$medico->id) }}">{{ $medico->nome }}</a>
                            </td>
                            <td class="d-none d-md-table-cell"><a class='a-line'
                                    href="{{ url('medicos/'.$medico->id) }}">{{ $medico->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line'
                                    href="{{ url('medicos/'.$medico->id) }}">{{ $medico->email }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line'
                                    href="{{ url('medicos/'.$medico->id) }}">{{ $medico->especializacoes }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection