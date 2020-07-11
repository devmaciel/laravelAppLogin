{{-- controle de erros de formulários --}}
@if (count($errors) != 0)
    @foreach ($errors->all() as $erro)
        <p class="alert alert-danger">{{ $erro }}</p>
    @endforeach
@endif
