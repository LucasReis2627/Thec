<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;

class CarrinhoController extends Controller
{
    public function adicionar(Request $request, $id)
    {
        // Validação do produto
        $computador = Computador::findOrFail($id);

        // Recupera o carrinho da sessão
        $carrinho = session()->get('carrinho', []);

        // Lógica de adição/atualização
        if(isset($carrinho[$id])) {
            $carrinho[$id]['quantidade']++;
        } else {
            $carrinho[$id] = [
                'id' => $computador->id,
                'nome' => $computador->nome,
                'preco' => $computador->preco,
                'quantidade' => 1,
                'imagem' => $computador->imagem // Opcional
            ];
        }

        // Atualiza a sessão
        session()->put('carrinho', $carrinho);

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');
    }

    public function visualizar()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.visualizar', compact('carrinho'));
    }

    public function remover($id)
    {
        $carrinho = session()->get('carrinho', []);

        if(isset($carrinho[$id])) {
            unset($carrinho[$id]);
            session()->put('carrinho', $carrinho);
        }

        return redirect()->back()->with('success', 'Produto removido!');
    }
}