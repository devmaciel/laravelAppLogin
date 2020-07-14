@extends('layouts.app')

@section('conteudo')
    <p>Estou logado</p>
    <p>Usuário: {{ session('usuario') }}</p>
    <a href="{{ route('logout') }}">Encerrar sessão</a>
@endsection
