<style>
    .containerAlert{
        text-align: center;
        margin-left: 2%;
        margin-right: 2%;
    }
</style>

<div class="containerAlert">

    <?php 
        // Campos do formulário de marcas
    ?>

    @if(Session::has('marca-campos-vazios'))
        <div class="alert alert-warning" role="alert">
            {{ Session::pull('marca-campos-vazios', 'default') }}
        </div>
    @endif

    @if(Session::has('marca-success'))
        <div class="alert alert-success" role="alert">
            {{ Session::pull('marca-success', 'default') }}
        </div>
    @endif

    @if(Session::has('marca-error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::pull('marca-error', 'default') }}
        </div>
    @endif

</div>