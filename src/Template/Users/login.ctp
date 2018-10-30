<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Ingrese usuario y contraseña</h1>
                    <div class="col-md-5">
                        <?= $this->Flash->render('auth') ?>
                    </div>
                    <?=  $this->Form->create("User",["id"=>"login-form",'autocomplete'=>"off","role"=>"form"]); ?>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <?= $this->Form->input("username",["required","label"=>false,"class"=>"form-control",'placeholder'=>"manzora"]);?>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <?= $this->Form->input("password",["label"=>false,"class"=>"form-control","id"=>"key",'placeholder'=>"*******"]);?>
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Mostrar contraseña</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    <?=  $this->Form->end(); ?>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<script>
    function showPassword() {

        var key_attr = $('#key').attr('type');

        if(key_attr != 'text') {

            $('.checkbox').addClass('show');
            $('#key').attr('type', 'text');

        } else {

            $('.checkbox').removeClass('show');
            $('#key').attr('type', 'password');

        }

    }
</script>