<style>
    .containerAlert{
        text-align: center;
        margin-left: 2%;
        margin-right: 2%;
    }
</style>

<div class="containerAlert">

    <?php 
        // Campos do formulário de fornecedores
    ?>

    @if(Session::has('fornecedor-campos-vazios'))
        <div class="alert alert-warning" role="alert">
            {{ Session::pull('fornecedor-campos-vazios', 'default') }}
        </div>
    @endif

    @if(Session::has('fornecedor-email-existe'))
        <div class="alert alert-warning" role="alert">
            {{ Session::pull('fornecedor-email-existe', 'default') }}
        </div>
    @endif

    @if(Session::has('fornecedor-success'))
        <div class="alert alert-success" role="alert">
            {{ Session::pull('fornecedor-success', 'default') }}
        </div>
    @endif

    @if(Session::has('fornecedor-error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::pull('fornecedor-error', 'default') }}
        </div>
    @endif

</div>