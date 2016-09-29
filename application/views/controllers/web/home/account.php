<div class="container" id="main-content">

    <div class="row">


        <div class="span12">
            <div class="categorybox">
                <div class="headtitle">
                    <h2>Mi cuenta Global</h2>
                </div>

                <div class="span6">			
                    <div class="logininfo">		
                    </div>
                    <b>Ingresa a tu cuenta</b>
                    <?php echo Form::open('Users/login', array('name' => 'form')) ?>
                    <form action= "<?php URL::site('home'); ?>" method="post" name="form">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-home"></i></span>
                            <?php echo Form::input('username', NULL, array('id' => 'username', 'class' => 'span3', 'placeholder' => 'Tu nombre de usuario', 'size' => '16')) ?>

                        </div>	
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <?php echo Form::password('password', NULL, array('id' => 'password', 'class' => 'span3', 'placeholder' => 'Tu contraseña', 'size' => '16')) ?>
                        </div>
                        <button type="submit" class="btn">Ingresar</button>
                        <?php echo Form::close() ?>
                    </form>
                </div>

                <div class="span5">	
                    <b>¿Eres nuevo? Crea tu cuenta ahora</b>
                    <?php echo Form::open('Users/register', array('name' => 'form')) ?>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <?php echo Form::input('first_name', NULL, array('id' => 'first_name', 'class' => 'span3', 'placeholder' => 'Nombre', 'size' => '16')) ?>
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <?php echo Form::input('last_name', NULL, array('id' => 'lasst_name', 'class' => 'span3', 'placeholder' => 'Apellido', 'size' => '16')) ?>
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <?php echo Form::input('username', NULL, array('id' => 'username', 'class' => 'span3', 'placeholder' => 'Nombre de usuario', 'size' => '16')) ?>
                    </div>	
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                       <?php echo Form::password('password', NULL, array('id' => 'password', 'class' => 'span3', 'placeholder' => 'Tu contraseña', 'size' => '16')) ?>
                    </div>	
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        <?php echo Form::password('password_confirmation', NULL, array('id' => 'password_confirmation', 'class' => 'span3', 'placeholder' => 'Confirma tu contraseña', 'size' => '16')) ?>
                    </div>	
                   <?php echo Form::hidden('type', 'USER')?>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <?php echo Form::input('email', NULL, array('id' => 'email', 'class' => 'span3', 'placeholder' => 'Tu email', 'size' => '16')) ?>
                        
                    </div>
                    <button type="submit" class="btn">Crear Cuenta</button>
                    <?php echo Form::close()?>
                </div>




            </div>
        </div>
    </div>
</div>