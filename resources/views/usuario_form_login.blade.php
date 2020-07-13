@extends('layouts.app')

{{-- FORMULÁRIO DE LOGIN --}}

@section('conteudo')

    <div class="row">
        <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2    col-xs-12">

            {{-- ERROS/VALIDAÇÃO --}}


            <form method="POST" action="">
                @csrf

                {{-- user --}}
                <div class="form-group">
                    <label for="id_text_usuario">Usuário:</label>
                    <input type="text" class="form-control" id="id_text_usuario" name="text_usuario" placeholder="Usuário">
                </div>

                {{-- senha --}}
                <div class="form-group">
                    <label for="id_text_senha">Senha:</label>
                    <input type="password" class="form-control" id="id_text_senha" name="text_senha" placeholder="Senha">
                </div>

                {{-- submit --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>

                {{-- recuperar senha --}}
                <div class="text-center margin-top-20">
                    <a href="#">Recuperar senha</a>
                </div>

                {{-- criar nova conta usuário --}}
                <div class="text-center">
                    <a href="#">Criar nova conta</a>
                </div>

            </form>

        </div>
    </div>

@endsection
