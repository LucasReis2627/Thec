<?php

        namespace App\Http\Controllers;
        
        use App\Models\Computador;
        use Illuminate\Http\Request;
        
        class ComputadorController extends Controller
        {
            public function index()
            {
                $computadores = Computador::paginate(10); // Paginação com 10 itens por página
                return view('computadores.index', compact('computadores'));
            }
        }
        $computadores = Computador::all(); // Busca todos os registros
        return view('computadores.index', compact('computadores')); 