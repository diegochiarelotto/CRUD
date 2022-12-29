@extends('layouts.app')
@section('title','Listagem dos Usuários')
 @section('content')

<h1 class="text-blue-600 text-xl">View de Usuarios</h1>
<form action="{{ route('users.index')}}" method="GET">
    <input type="text" name="search" id="" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>
<ul>
    @foreach ($users as $user)
      <li>
        {{$user->name}} -
        {{$user->email}} -
        {{$user->login}} -
        |<a class="text-orange-700" href="{{ route('users.show', $user->id) }}">+ Detalhes</a>
      </li>
        <a class="text-green-600" href="{{route('users.edit',$user->id)}}">Editar</a> |

    @endforeach
</ul>
<div>
    <a class="text-blue-500" href="{{route('users.create')}}">Novo Usuário +</a>
</div>
@endsection

