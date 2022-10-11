@extends('adminlte::page')

@section('title', 'Cadastro de Usuários')

@section('content_header')
    <h1>Cadastro de Usuários</h1>
@stop

@section('content')
@include('_message') 
    <form action="{{ route('usuarios.store') }}" method="post">
        @include('usuarios._form')
    </form>
@stop
