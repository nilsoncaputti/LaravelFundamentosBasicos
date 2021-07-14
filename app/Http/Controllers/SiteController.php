<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //mostra página Home
    public function index()
    {
        return view('home');
    }

    //mostra página Sobre
    public function sobre()
    {
        $soma = 10 + 9;
        echo "Conteudo dinamico Sobre $soma";
    }

    //mostra página Contato
    public function contato()
    {
        echo "Conteudo dinamico Contato";
    }

    //mostra página Serviços
    public function servicos()
    {
        echo "Conteudo dinamico Servicos";
    }

    //mostra página Serviço
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'descricao muito longa...'
            ],

            2 => [
                'nome' => 'Lavagem de Corberta',
                'descricao' => 'descricao muito longa...'
            ],

            3 => [
                'nome' => 'Lavagem de Urso',
                'descricao' => 'descricao muito longa...'
            ],
        ];
        return view('site.servico', [
            'servico' => $servicos[$id],
            'outro' => 'treinaweb'
        ]);
    }
}