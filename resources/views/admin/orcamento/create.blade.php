@extends('admin.layouts.app')

@section('title', 'Criar novo Orçamento')
<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

@if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
           <li> {{$error}} </li>
       <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
       @endforeach
    </ul>
@endif


@section('content')

    <h1 class="text-center text-3x1 uppercase font-black my-4">Novo Orçamento</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <form action="{{route('orcamento.store')}}" method="POST" enctype="multipart/form-data">
            @include('admin.orcamento._partials.form')
        </form>
    </div>


@endsection