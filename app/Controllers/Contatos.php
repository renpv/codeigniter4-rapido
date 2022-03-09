<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContatoModel;

class Contatos extends BaseController
{

    public function __construct()
    {
        // instanciar o model logo no construtor para
        // não precisar instanciar em cada método   
        $this->model = new ContatoModel();
    }

    public function index()
    {
        
        $contatos = $this->model->findAll();
        return view('contatos/index', ['data' => $contatos]);
    }

    public function new()
    {
        return view('contatos/new');
    }

    public function create()
    {
        //pega os dados que vem do formulário
        $fields = $this->request->getPost();

        //grava no banco de dados
        $this->model->insert($fields);
        return redirect()->to('contatos');
    }

    public function edit($id)
    {
        $model = new ContatoModel();
        $contato = $model->find($id);

        return view('contatos/edit',  $contato);
    }

    public function update($id)
    {
        $model = new ContatoModel();
        $contato = $this->request->getPost();

        $model->update($id, $contato);
        return redirect()->to('contatos');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('contatos');
    }
}
