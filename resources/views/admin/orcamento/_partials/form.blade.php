@if ($errors->any())

<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="string" name="cliente" id="cliente" placeholder="Nome Do Cliente..." value="{{$orcamento->cliente ?? old('cliente')}}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="string" name="vendedor" id="vendedor" cols="30" rows="4" placeholder="Nome Do vendedor..." value="{{$orcamento->vendedor ?? old('vendedor')}}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<textarea name="descricao" id="descricao" cols="30" rows="4" placeholder="Descrição" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{$orcamento->descricao ?? old('descricao')}}</textarea>
<input type="number" name="valor" id="valor" placeholder="Valor Total" value="{{$orcamento->valor ?? old('valor')}}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">

<button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Enviar</button>
