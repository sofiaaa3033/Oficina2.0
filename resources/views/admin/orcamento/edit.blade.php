@extends('admin.layouts.app')

@section('title', "Editar o Orçamento {$orcamento->cliente}")

@section('content')

<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

<h1  class="text-center text-3xl uppercase font-black my-4">Editar orçamento <strong> {{$orcamento->title}}</strong></h1>

<form action="{{route('orcamento.update', $orcamento->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @include('admin.orcamento._partials.form')
</form>

@endsection