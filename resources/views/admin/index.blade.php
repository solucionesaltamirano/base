@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Administración</h1>
@stop

@section('content')
    <p>Bienvenido a su area de administración</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop