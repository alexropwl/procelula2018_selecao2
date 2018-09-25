@extends('layout/layout')
@section('title','Teste Alexandre')
@section('content')

<h2 class="text-center">Produtos -  Teste Alexandre</h2>

<a href="{{url('/produtos/novo')}}"><button class="btn btn-info">Novo</button></a>


    @if($message = Session::get('success'))
        <div class="alert alert-success">

            {{$message}}
            @endif
        </div>

        <table class="table table-striped">

            <tr>
                <td>Produto</td>
                <td>Data de entrada</td>
                <td>Preço</td>
                <td>Editar</td>
                <td>Excluir</td>
            </tr>

            @foreach($produto as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->data_inclusao}}</td>
                <td>{{$produto->preco}}</td>
                <td><a href="{{url('/produtos/edit/'.$produto->id)}}"><button class="btn btn-dark">Editar</button></a></td>
                <td><a href="{{url('/produtos/delete/'.$produto->id)}}"><button class="btn btn-danger">Excluir</button></a></td>

            </tr>
                @endforeach



        </table>





    @endsection

