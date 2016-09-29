<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Crear nuevo usuario</h2>
        </div>

        <div class="span2">
            &nbsp;
        </div>

        <div class="span9">	
            <?php echo Form::open('Users/register', array('name' => 'form')) ?>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <?php echo Form::input('first_name', NULL, array('id' => 'first_name', 'class' => 'span3', 'placeholder' => 'Nombre', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <?php echo Form::input('last_name', NULL, array('id' => 'lasst_name', 'class' => 'span3', 'placeholder' => 'Apellido', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <?php echo Form::input('username', NULL, array('id' => 'username', 'class' => 'span3', 'placeholder' => 'Nombre de usuario', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>	
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <?php echo Form::password('password', NULL, array('id' => 'password', 'class' => 'span3', 'placeholder' => 'Tu contraseña', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>	
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <?php echo Form::password('password_confirmation', NULL, array('id' => 'password_confirmation', 'class' => 'span3', 'placeholder' => 'Confirma tu contraseña', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>	
            <?php echo Form::hidden('type', 'USER') ?>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <?php echo Form::input('email', NULL, array('id' => 'email', 'class' => 'span3', 'placeholder' => 'Tu email', 'size' => '16', 'style'=>'height: 31')) ?>

            </div>
            <button type="submit" class="btn">Crear Cuenta</button>
            <?php echo Form::close() ?>
        </div>




    </div>
</div>
