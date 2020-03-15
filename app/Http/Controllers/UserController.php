<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use GuzzleHttp\Client;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 5. Criar UMA tela que permita a visualização dos dados retornados pela API 
     * desenvolvida no item anterior em blade no formato de tabela. 
     */
    public function index()
    {        
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost',  
            'timeout'  => 2.0,                                 
        ]);

        $response = $client->request('GET', '/php_api_guzzle_laravel_7/public/api/v1/users');
        $users = json_decode($response->getBody()->getContents());          
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validate($request);  
        $dados = $request->all();                
        User::create($dados);

        return redirect()->route('users.index')->with('message', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 6. Criar uma tela que permita a visualização e edição do detalhe dos dados cadastrados, 
     * a forma que você deve recuperar os dados será através de um endpoint.  
     */
    public function edit($id)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost',  
            'timeout'  => 2.0,                                 
        ]);

        $response = $client->request("GET", "/php_api_guzzle_laravel_7/public/api/v1/user/$id");
        $user = json_decode($response->getBody()->getContents());          
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->_validate($request); //chama a função de validação criada lá embaixo
        $dados = $request->all();
        $user->fill($dados);
        $user->save(); //Mass Assignent

        return redirect()->route('users.index')->with('message', 'Dados atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function _validate($request)
    {
        $this->validate($request, [
            'name'          => 'required|max:190',
            'email'         => 'required|email|max:190',
            'tel1'          => 'required|max:20',
            'dt_nascimento' => 'required|date_format:Y-m-d',
        ]);
    }
}
