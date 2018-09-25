<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Sub_categoria;
use App\Categoria;

class ProdutoController extends Controller
{
    public function index(){

        return view('produto/index');



    }

        public function new(){

            $categoria = Categoria::all();

            return view('produto/new')->with('categoria',$categoria);


        }

            public function create(Request $request){



            $produto = new Produto();
            $produto->nome = $request->input('nome');
            $produto->data_inclusao = $request->input('data');
            $produto->preco = $request->input('preco');
            $produto->codigo_sub_categoria = $request->input('subcategoria');

            $produto->save();




            }


}
