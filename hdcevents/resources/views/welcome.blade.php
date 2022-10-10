@extends('layouts.main')
@section('title','HDC Events')

@section('content')
    <h1>Teste Laravel</h1>

    <ul>
        <li><a href='/contatos'>Contatos</a></li>
        <li><a href='/produtos'>Produtos</a></li>
    </ul>

    @if(10 > 5)
        <p>A condição é true</p>
    @endif

    @if(10 > 15)
        <p>Não exibe, porque a condição é false</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == 'Pedro')
        <p> O Nome é Pedro</p>
    @else
        <p> O nome não é Pedro, é {{ $nome }} e ele tem {{ $idade }} e ele é {{ $profissao}}</p>
    @endif

    @for($i = 0 ; $i < count($arr); $i++)
        <p> {{ $arr[$i] }} - {{ $i }}</p>
    @endfor

    @php
        $name = 'João';
        echo $name;
    @endphp
    <h1>foreach</h1>
    @foreach($names as $name)
        <p> {{ $loop->index }}</p>
        <p> {{ $name }}</p>
    @endforeach

    <img src="/img/banner.jpg" alt="banner">
    <!-- Comentario HTML -->
    {{-- Comentario Blade --}}
@endsection
