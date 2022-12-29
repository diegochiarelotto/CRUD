@extends('layouts.app')
@section('title','Adcionar Usuário')
@section('content')

<h1>Criar Usuários</h1>
@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

@endif
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="">Nome:</label>
    <input type="text" name="name" id="" value="{{ old('name') }}" placeholder="Digite o nome...">
    <label for="">E-mail:</label>
    <input type="email" name="email" id=""value="{{ old('email') }}"  placeholder="Digite seu e-mail...">
    <label for="">Login:</label>
    <input type="text" name="login" id="" value="{{ old('login') }}" placeholder="Digite seu login...">
    <label for="">Senha:</label>
    <input type="password" name="password" id=""value="{{ old('password') }}"  placeholder="Digite sua senha...">
    <div>
      <button type="submit">Enviar</button>
    </div>
</form>
<div>
    <a href="{{route('users.index')}}">Voltar</a>
</div>
@endsection
