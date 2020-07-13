@extends('layouts.app')

{{-- RECUPERAR SENHA --}}

@section('conteudo')

    <div class="row">
        <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2    col-xs-12">

            <form method="POST" action="">
                @csrf

                {{-- email --}}
                <div class="form-group">
                    <label for="id_text_email">Email:</label>
                    <input type="text" class="form-control" id="id_text_email" name="text_email" placeholder="Email">
                </div>


                {{-- submit --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Recuperar Senha</button>
                </div>

                {{-- voltar ao inicio --}}
                <div class="text-center margin-top-20">
                    <a href="{{ asset('/') }}">Voltar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
