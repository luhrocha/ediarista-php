@extends('adminlte::page')

@section('title', 'Editar Serviços')

@section('content_header')
    <h1>Editar Serviços</h1>
@stop

@section('content')
    <form action="{{ route('servicos.update', $servico) }}" method="post">
        @method('PUT')        

        @include('servicos._form')
    </form>
@stop