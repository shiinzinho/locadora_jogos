<?php

namespace App\Http\Controllers;

use App\Models\Jogos;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function jogos(Request $request)
    {
        $jogos = Jogos::create([
            'nome' => $request-> nome,
            'preco'=> $request-> preco,
            'descricao'=> $request-> descricao,
            'classificacao'=> $request-> classificacao,
            'plataformas'=> $request-> plataformas,
            'desenvolvedor'=> $request-> desenvolvedor,
            'distribuidora'=> $request-> distribuidora,
            'categoria'=> $request-> categoria,

        ]);
        return response()->json([
            "sucess" => true,
            "message" => "Registro de jogo bem-sucedido",
            "data" => $jogos
        ]);
    }
}
