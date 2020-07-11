@extends('template.app')

@section('conteudo')

<div class="formulario">
    <div class="row justify-content-md-center">
        <img class="imagem-lock" src="{{asset('images/lock.png')}}" alt="">
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-6 col-md-offset-6">
        <br>

        {{-- erros (validação) --}}
        @include('inc.erros')

        <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- usuário --}}
                <div class="form-group">
                  <label for="id_usuario">Usuário:</label>
                  <input  name="text_usuario" type="text" class="form-control" id="id_usuario" aria-describedby="Usuario" placeholder="Usuario">
                </div>

                {{-- senha --}}
                <div class="form-group">
                  <label for="id_senha">Senha:</label>
                  <input  name="text_senha" type="password" class="form-control" id="id_senha" placeholder="Senha">
                </div>

                {{-- submit --}}
                <button type="submit" class="btn btn-primary">Login</button>

                {{-- criar nova conta --}}
                <a style="margin-left: 50px;" href="{{ route('criar_conta') }}">Criar nova conta</a>
            </form>
        </div>


    </div>
</div>

@endsection
