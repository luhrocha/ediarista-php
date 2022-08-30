@extends('adminlte::page')

@section('title', 'Cadastro de Serviços')

@section('content_header')
    <h1>Cadastro de Serviços</h1>
@stop

@section('content')
    <form action="{{ route('servicos.store') }}" method="post">
        @include('servicos._form')
    </form>
@stop