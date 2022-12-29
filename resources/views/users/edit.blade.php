@extends('layouts.app')
@section('title','Editar Usuário')
@section('content')

<h1>Editar Usuário {{ $user->name }}</h1>
@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

@endif
<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @csrf
    <label for="">Nome:</label>
    <input type="text" name="name" id="" value="{{$user->name}}" placeholder="Digite o nome...">
    <label for="">E-mail:</label>
    <input type="email" name="email" id=""value="{{$user->email}}"  placeholder="Digite seu e-mail...">
    <label for="">Login:</label>
    <input type="text" name="login" id="" value="{{$user->login}}" placeholder="Digite seu login...">
    <label for="">Senha:</label>
    <input type="password" name="password" id="placeholder="Digite sua senha...">
    <div>
      <button type="submit">Salvar</button>
    </div>
</form>
<div>
    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Excluir</button>
        </form>
    <a href="{{route('users.index')}}">Voltar</a>
</div>
@endsection
