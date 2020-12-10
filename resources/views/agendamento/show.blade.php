@extends('layouts.app')

@section('stylecss')
<style>
.form-control-static {
    font-weight: bold;
}

.img-avatar {
    max-width: 100%;
    border: 1px solid #c0c0c0;
    border-radius: 5px;
    margin-bottom: 15px;
}
</style>
@endsection

@section('javascript')
<script type="text/javascript">
function validate_delete() {
    return confirm('Excluir o paciente atual? Essa ação não pode ser desfeita.');
}
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Médico</div>
                <form action="{{ url('agendamentos/'.$data->id) }}" method="post" onsubmit="return validate_delete()">
                    <div class="card-body">
                        @method('DELETE')

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="nome">Nome completo</label>
                                    <p class="form-control-static">{{ $data->nome }}</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <p class="form-control-static">{{ $data->telefone }}</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="crm">CRM</label>
                                    <p class="form-control-static">{{ $data->crm }}</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <p class="form-control-static">{{ $data->email }}</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="especializacoes">Especializações</label>
                                    <p class="form-control-static">{{ $data->especializacoes }}</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="nota">Nota</label>
                                    <p class="form-control-static">{{ $data->nota }}</p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 3%;" class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="created_at"><b>Data de cadastro</b></label>
                                    <p>{{ $data->created_at }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                        <a href="{{ url('agendamentos/edit/'.$data->id) }}" class="btn btn-primary">Editar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection