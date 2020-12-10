@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Médico</div>
                <form action="{{ url('agendamentos/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}"
                                value="{{ old('nome', $data->nome) }}" id="nome" name="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" required
                                class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}"
                                value="{{ old('telefone', $data->telefone) }}" id="telefone" name="telefone"
                                placeholder="(xx) xxxxxxxxx">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="crm">CRM</label>
                            <input type="text" required class="form-control{{$errors->has('crm') ? ' is-invalid':''}}"
                                value="{{ old('crm', $data->crm) }}" id="crm" name="crm" placeholder="xxxxxx/UF">
                            <div class="invalid-feedback">{{ $errors->first('crm') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="especializacoes">Especializações</label>
                            <textarea required class="form-control" id="especializacoes" name="especializacoes"
                                rows="5">{{ old('especializacoes', $data->especializacoes) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" required
                                class="form-control{{$errors->has('email') ? ' is-invalid':''}}"
                                value="{{ old('email', $data->email) }}" id="email" name="email"
                                placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control{{$errors->has('password') ? ' is-invalid':''}}"
                                value="{{ old('password') }}" id="password" name="password"
                                placeholder="Não preencha caso não deseje alterar">
                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="nota">Nota</label>
                            <textarea class="form-control" id="nota" name="nota"
                                rows="5">{{ old('nota', $data->nota )}}</textarea>
                        </div>
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