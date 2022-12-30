@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2 ">Detalhes do usuário</h1>
<h1 class="text-xl text-cyan-700">{{ $user->name }}</h1>
<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <tr>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">Nome</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">E-mail</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">login</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">Data Cadastro</th>
    </tr>
    <tbody>
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->login }}</td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->created_at }}</td>
    </tr>
</tbody>
</table>



<form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
    @method('DELETE')
    @csrf
    <button type="submit" class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Deletar</button>
    <button>
        <a href="{{route('users.index')}}" class="shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Voltar</a>

@endsection
