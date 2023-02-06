<style>
    .containerAlert{
        text-align: center;
        margin-left: 2%;
        margin-right: 2%;
    }
</style>

<div class="containerAlert">

    <?php 
        // Campos do formulário de categoria
    ?>

    @if(Session::has('categoria-campos-vazios'))
        <div class="alert alert-warning" role="alert">
            {{ Session::pull('categoria-campos-vazios', 'default') }}
        </div>
    @endif

    @if(Session::has('categoria-success'))
        <div class="alert alert-success" role="alert">
            {{ Session::pull('categoria-success', 'default') }}
        </div>
    @endif

    @if(Session::has('categoria-error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::pull('categoria-error', 'default') }}
        </div>
    @endif

</div>