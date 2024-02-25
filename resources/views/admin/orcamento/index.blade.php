@extends('admin.layouts.app')

@section('vendedor', 'listagem dos Orçamentos')

@section('content')
<head>   
<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<a href="{{ route('orcamento.create')}}" class="my-4 uppercase px-8 py-2 rounded bg-gray-200 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Criar novo orçamento</a>


<hr>
@if(session('message'))
    <div>
        
        {{session('message')}}
    </div>
@endif

<form action="{{route ('orcamento.search') }}" method="get">
    @csrf
    
    <input type="date" name="start_date" placeholder="Início do intervalo" value="{{ $filters['start_date'] ?? '' }}"class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    
    <input type="date" name="end_date" placeholder="Fim do intervalo" value="{{ $filters['end_date'] ?? '' }}"class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    
    <input type="text" name="cliente" placeholder="Nome do Cliente" value="{{ $filters['cliente'] ?? '' }}"class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    
    <input type="text" name="vendedor" placeholder="Nome do Vendedor" value="{{ $filters['vendedor'] ?? '' }}"class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    
    <button type="submit" class="uppercase p-3 rounded bg-gray-200 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Pesquisar</button>
</form>

@foreach ($orcamentos as $orcamento)

@endforeach

{{ $orcamentos->links() }}
</form>
<h1 class="text-center text-3xl uppercase font-black my-4">Listagem dos Orçamentos</h1>

<div class="overflow-x-auto">
    <table class="w-full min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cliente</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vendedor</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data do Orçamento</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($orcamentos as $orcamento)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $orcamento->cliente }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $orcamento->vendedor }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ \Carbon\Carbon::parse($orcamento->created_at)->format('d/m/Y H:i:s') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <a href="{{ route('orcamento.show', $orcamento->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Ver</a>
                        <a href="{{ route('orcamento.edit', $orcamento->id) }}" class="text-green-600 hover:text-green-900">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@if (@isset($filters))
    {{$orcamentos->appends($filters)->links() }}  
@else
    {{$orcamentos->links() }} 
@endif

@endsection
