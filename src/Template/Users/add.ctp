<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    label{
        font-size: 12px;
    }
    .form-control{
        font-size: 13px !important;
    }
</style>
<div class="users col-md-12">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuario') ?></legend>
        <div class="alert alert-danger no-display" id="alert" style="display: none;">
            <span class="icon icon-cross-circled"></span>
            <span class="message"></span>
            <button type="button" class="close" data-dismiss="alert"></button>
        </div>
        <?php
            echo $this->Form->control('username',["label"=>"Nombre de usuario","class"=>"form-control",'required']);
            echo $this->Form->control('password',["id"=>"pass1","label"=>"Contraseña","class"=>"form-control",'required']);
            echo $this->Form->control('password2',["required","id"=>"pass2","onchange"=>"validPass(this.value);","label"=>"Repetir contraseña","type"=>"password","class"=>"form-control"]);
            echo $this->Form->control('correo',["type"=>"email","class"=>"form-control",'required']);
        ?>
    </fieldset><br>
    <button class="btn btn-primary">Almacenar</button>
    <?= $this->Form->end() ?>
</div>
<script>
    function validPass(pass2){
        var pass = $("#pass1").val();
        if(pass !== pass2){
            $("#pass2").val("");
            $("#alert .message").text("La contraseña no coincide. Intente nuevamente.");
            $("#alert").slideDown();
            setTimeout(function(){
                $("#alert").slideUp();
            },4000);
        }
    }
</script>