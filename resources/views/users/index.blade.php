@extends('layouts.app')
@section('title','Listagem dos Usuários')

@section('content')
<h1 class="text-2x1 text-blue-600 text-xl">Listagem dos Usuários</h1>
<form action="{{ route('users.index')}}" method="GET" class="py-5">
    <input type="text" name="search" id="" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
    <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    <div class="px-1 py-8">
        <a class="bg-yellow-400 rounded-full py-2 px-2" href="{{route('users.create')}}"> Novo Usuario + </a>
    </div>
</form>
<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">Nome</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">E-mail</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">login</th>
          {{-- <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">Perfil</th> --}}
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">ID</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">Editar</th>
          <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase
            tracking-wider">Detalhes</th>

        </tr>
      </thead>
<tbody>
 @foreach ($users as $user)
 <tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->login }}</td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->id }}</td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
    <a href="{{ route('users.edit', $user->id) }}" class="bg-green-200 rounded-full py-2 px-6">Editar</a>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
    </td>
 </tr>
 @endforeach
 </tbody>
</table>


@endsection

