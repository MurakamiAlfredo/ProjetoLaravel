@extends('layouts.main')
@section('title','HDC Events - Produto')

@section('content')
    @if ($id != null)
        <p> Exibindo o Id do Produto: {{$id}}</p>
    @endif
@endsection
