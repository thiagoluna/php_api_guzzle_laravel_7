@extends('layout.default')

@section('title', 'Home')

@section('conteudo')
    <div id="main" class="container-fluid mt-5">
        <div class="container col-md-10">
            <div class="row">
                <div class="com-md-4">
                    <h2>Pessoas Cadastradas</h2>
                </div>
                <div class="col-md-4">                        
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-xs pull-right h2">Cadastrar</a>                        
                </div>
            </div>
            <!-- Listagem Pessoas -->
            <div class="row mt-5">
                 <!-- Mensagens validação -->
                 @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                @endif
                <!-- Mensagem confirmação evento -->
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('message')}}
                    </div>                        
                @endif
                <div id="list" class="row col-md-12">                   
                    <div class="table-responsive">
                        <table class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Bairro</th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <!-- Listar dados vindos da API -->
                                @foreach ($users as $user)                                   
                                    <tr>
                                        <td>{{ $user->name }} {{ $user->sobrenome }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->logradouro }}</td>
                                        <td>{{ $user->bairro }} - {{ $user->cidade }}</td>
                                        <td class="actions">
                                            <a class="btn btn-success btn-xs" href="{{ route('users.edit', $user->id) }}">Visualizar</a>                                            
                                        </td>
                                    </tr> 
                                @endforeach                                         
                            </tbody>
                        </table>          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection