<style>
    .containerAlert{
        text-align: center;
        margin-left: 2%;
        margin-right: 2%;
    }
</style>

<div class="containerAlert">

    <?php 
        // Campos do formulário de produtos
    ?>

    @if(Session::has('produto-campos-vazios'))
        <div class="alert alert-warning" role="alert">
            {{ Session::pull('produto-campos-vazios', 'default') }}
        </div>
    @endif

    @if(Session::has('produto-success'))
        <div class="alert alert-success" role="alert">
            {{ Session::pull('produto-success', 'default') }}
        </div>
    @endif

    @if(Session::has('produto-error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::pull('produto-error', 'default') }}
        </div>
    @endif

</div>