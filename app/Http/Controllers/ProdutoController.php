<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_categoria;
use App\Categoria;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index()
    {

        $produto = Product::all();


        return view('produto/index')->with('produto',$produto);

    }

    public function new()
    {

      $subcategoria = Sub_categoria::all();

        $categoria = DB::table('categorias')->pluck("nome", "id");

        return view('produto/new')->with('categoria', $categoria)->with('subcategoria',$subcategoria);


    }

    public function create(Request $request)
    {


        $produto = new Product();
        $produto->nome = $request->input('nome');
        $produto->data_inclusao = $request->input('data');
        $produto->preco = $request->input('preco');
        $produto->codigo_sub_categoria = $request->input('subcategoria');

        $produto->save();

        return redirect('/produtos')->with('success', 'Produto salvo com sucesso');


    }



    public function edit($id){

        $produto = Product::find($id);

        $categoria = DB::table('categorias')->pluck("nome", "id");
        $subcategoria = Sub_categoria::all();

        return view('produto/edit')->with('categoria',$categoria)->with('subcategoria',$subcategoria)
            ->with('produto',$produto);







    }


public function update(Request $request, $id){

        $produto = Product::find($id);
        $produto->nome = $request->get('nome');
       $produto->data_inclusao = $request->get('data');
       $produto->preco = $request->get('preco');
       $produto->codigo_sub_categoria = $request->get('subcategoria');

       $produto->save();

       Return redirect('/produtos')->with('success','Produto editado com sucesso');





}


public function delete($id){

        $produto = Product::find($id);

        $produto->delete();

        return redirect('/produtos')->with('success','Produto removido com sucesso');



}






    public function categorias($id){
        $categorias = DB::table('sub_categorias')->where("codigo_categoria",$id)->pluck("nome","id");
        return json_encode($categorias);


    }


}

