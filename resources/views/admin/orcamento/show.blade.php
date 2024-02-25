@extends('admin.layouts.app')

@section('title', 'Detalhes do Orçamento')

@section('content')

<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

<h1 class="text-center text-3xl uppercase font-black my-4">Detalhes do orçamento {{$orcamento->title}}</h1>

<ul>
    <li><strong>Cliente: </strong>{{$orcamento->cliente}}</li>
    <li><strong>Vendedor: </strong>{{$orcamento->vendedor}}</li>
    <li><strong>Data: </strong>{{$orcamento->data}}</li>
    <li><strong>Valor: </strong>{{$orcamento->valor}}</li>
</ul>

<form action="{{ route('orcamento.destroy',$orcamento->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit"  class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none" >Deletar o orçamento{{$orcamento->title}} </button>  
</form>

@endsection