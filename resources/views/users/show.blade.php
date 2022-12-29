@extends('layouts.app')
@section('title','Detalhes do Usuário')
@section('content')

<h1>Usuario: {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->login }}</li>
    <li>{{ $user->email }}</li>
</ul>
<div>
   
    <a href="{{route('users.index')}}">Voltar</a>
</div>
@endsection
