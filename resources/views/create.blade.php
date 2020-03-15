@extends('layout.default')

@section('title', 'Novo Cadastro')
    
@section('conteudo')
    <div id="main" class="container-fluid mt-5">
        <div class="container col-md-10">            
            <h3 class="page-header">Adiconar Usuário</h3>
            <!-- Mensagens validação -->
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- Área do Form-->
            <form method="post" action="{{route('users.store')}}">
                @csrf
                @include('_form')
                <div id="actions" class="row">
                    <!-- Div col-md-12 ocupa toda largura no grid -->
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{URL::asset('/')}}" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </form>                           
        </div>
    </div>    
@endsection

@section('javascript')
    <script>
        $('#cep').on('keyup', function (){
            let cep = $(this).val();          
            if(cep.length == 8){
                $.get('https://viacep.com.br/ws/' + cep + '/json')
                .then(function (response){
                    $('#bairro').val(response.bairro);
                    $('#cidade').val(response.localidade);
                    $('#logradouro').val(response.logradouro);
                    $('#uf').val(response.uf);
                    console.log(response);
                });
            }
        });
      </script>
@endsection