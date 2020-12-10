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

@section('javascript')
<script type="text/javascript">
function validate_delete() {
    return confirm('Excluir o agendamento atual? Essa ação não pode ser desfeita.');
}
</script>
@endsection
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Médicos
            <a href="{{ url('agendamentos/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <thead>
                        <tr>
                            <th>Data/Hora</th>
                            <th>Descrição</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendamentos as $agendamento)
                        <tr>
                            <td>{{ date("d/m/Y H:i:s", strtotime($agendamento->datahora)) }}
                            </td>
                            <td>{{ $agendamento->descricao }}</a>
                            </td>
                            <td>{{ $agendamento->paciente->nome }}</a>
                            </td>
                            <td>{{ $agendamento->medico->nome }} -> {{ $agendamento->medico->especializacoes }}</a>
                            </td>

                            <td>
                                <form action="{{ url('agendamentos/'.$agendamento->id) }}" method="POST"
                                    onsubmit="return validate_delete()">
                                    @method('DELETE')

                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr> @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> @endsection