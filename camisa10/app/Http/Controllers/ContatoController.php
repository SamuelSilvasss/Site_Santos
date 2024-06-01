<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    // Método para lidar com o envio do formulário de contato
    public function enviarContato(Request $request)
    {
        return view('dump', ['titulo' => 'Contato(teste)']);
    }
}
