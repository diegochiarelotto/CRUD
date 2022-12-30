@extends('layouts.app')
@section('title','Editar Usuário')
@section('content')
<h1>Editar Usuário {{ $user->name }}</h1>
@include('includs.validation-form')
<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @include('users._partials.form')

@endsection
