<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    //Lista de Clientes
    public function index(): View
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    // Mostra um cliente específico
    public function show(int $id): View
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    //Exibe o formulário de Criação
    public function create(): View
    {
        return view('clients.create');
    }

    //Cria um cliente no banco de dados
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    //Mostra o formulário para edição
    public function edit(int $id): View
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    //Atualiza o cliente no banco de dados
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect('/clients');
    }

    //Apaga um cliente no banco de dados
    public function destroy(int $id): RedirectResponse
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}