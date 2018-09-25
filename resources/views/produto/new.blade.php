@extends('layout/layout')
@section('title','Teste Alexandre')
@section('content')


   <form method="post" action="{{url('/produtos/create')}}">

        @csrf
       <div class="form-group">
           <label>Nome do produto</label>
           <input type="text" name="nome" placeholder="produto" class="form-control"/>

       </div>

       <div class="form-group">
           <label>Preço</label>
                <input type="text" name="preco" placeholder="preco" class="form-control"/>

       </div>

       <div class="form-group">
           <label>Data de inclusao</label>
           <input type="date" name="data"  class="form-control"/>

       </div>

       <div class="form-group">
           <label>Categoria</label>
                <select name="categoria" class="form-control">
                    @foreach($categoria as $categoria =>$value)
                    <option value="{{$categoria}}">{{$value}}</option>
                        @endforeach


                </select>


       </div>

       <div class="form-group">
           <label>Sub Categoria</label>

           <select name="subcategoria" class="form-control">

               @foreach($subcategoria as $sub)
               <option value="{{$sub->id}}">{{$sub->nome}}</option>
                    @endforeach

           </select>



       </div>

        <button type="submit" class="btn btn-success">Salvar</button>

       <a href="javascript:history.back(-1)"><button class="btn btn-dark" type="button">Voltar</button></a>




   </form>

    @endsection