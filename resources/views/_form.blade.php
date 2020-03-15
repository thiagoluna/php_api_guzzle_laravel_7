<!-- area de campos do form -->
<!-- 2 campos por linha -->
<div class="row">
    <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite o valor" value="{{ old('name', $user->name) }}" required>
    </div>

    <div class="form-group col-md-6">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite o valor" value="{{ old('sobrenome', $user->sobrenome) }}" required>
    </div>                                                                            
</div>
<!-- 2 campos por linha -->
<div class="row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o valor" value="{{ old('email', $user->email) }}" required>
    </div> 

    <div class="form-group col-md-4">
        <label for="sobrenome">Data Nascimento</label>
        <input type="date" class="form-control" name="dt_nascimento" value="{{ old('dt_nascimento', $user->dt_nascimento) }}" required>
    </div>                                                                              
</div>
<!-- 3 campos por linha -->
<div class="row">
    <div class="form-group col-md-2">
        <label for="cep">CEP</label>
        <input type="number" class="form-control" name="cep" id="cep" placeholder="Digite o valor" value="{{ old('cep', $user->cep) }}" required>
    </div>

    <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Digite o valor" value="{{ old('logradouro', $user->logradouro) }}" required>
    </div>
    
    <div class="form-group col-md-4">
        <label for="numero">Número</label>
        <input type="text" class="form-control" name="numero" placeholder="Digite o valor" value="{{ old('numero', $user->numero) }}" required>
    </div>                                                
</div>
<!-- 3 campos por linha -->
<div class="row">
    <div class="form-group col-md-4">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o valor" value="{{ old('bairro', $user->bairro) }}" required>
    </div>

    <div class="form-group col-md-4">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite o valor" value="{{ old('cidade', $user->cidade) }}" required>
    </div>
    
    <div class="form-group col-md-4">
        <label for="uf">Estado</label>
        <input type="text" class="form-control" name="uf" id="uf" placeholder="Digite o valor" value="{{ old('uf', $user->uf) }}" required>
    </div>                                                
</div>
<h3 class="page-header">Contatos</h3>
<!-- 3 campos por linha -->
<div class="row">
    <div class="form-group col-md-4">
        <label for="tel1">Telefone 1</label>
        <input type="text" class="form-control" name="tel1" placeholder="Digite o valor" value="{{ old('tel1', $user->tel1) }}" required>
    </div>

    <div class="form-group col-md-4">
        <label for="tel2">Telefone 2</label>
        <input type="text" class="form-control" name="tel2" placeholder="Digite o valor" value="{{ old('tel2', $user->tel2) }}">
    </div>
    
    <div class="form-group col-md-4">
        <label for="tel3">Telefone 3</label>
        <input type="text" class="form-control" name="tel3" placeholder="Digite o valor" value="{{ old('tel3', $user->tel3) }}">
    </div>                                                
</div>
<!-- 3 campos por linha -->
<div class="row">
    <div class="form-group col-md-4">
        <label for="tel4">Telefone 4</label>
        <input type="text" class="form-control" name="tel4" placeholder="Digite o valor" value="{{ old('tel4', $user->tel4) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="tel5">Telefone 5</label>
        <input type="text" class="form-control" name="tel5" placeholder="Digite o valor" value="{{ old('tel5', $user->tel5) }}">
    </div>
    
    <div class="form-group col-md-4">
        <label for="tel6">Telefone 6</label>
        <input type="text" class="form-control" name="tel6" placeholder="Digite o valor" value="{{ old('tel6', $user->tel6) }}">
    </div>                                                
</div>
<hr />