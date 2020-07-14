{{-- Mensagem de Sucesso de Criação de Conta --}}
@if (isset($mensagem_sucesso))
    <div class="alert alert-success">
        @foreach ($mensagem_sucesso as $sucesso)
            <p>{{ $sucesso }}</p>
        @endforeach
    </div>
@endif
