<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Subir un nuevo color de ropa</h2>
        </div>
        <div class="span2">
            &nbsp;
        </div>
        <div class="span9">	
            <div class="span5">	
                <?php echo Form::open('admin', array('id' => 'color-validation', 'name' => 'form')) ?>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-star"></i></span>
                    <?php echo Form::input('name', NULL, array('id' => 'name', 'class' => 'span3', 'placeholder' => 'Nombre del color. Ej: rojo', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-bookmark"></i></span>
                    <?php echo Form::input('description', NULL, array('id' => 'description', 'class' => 'span3', 'placeholder' => 'Descripción del color', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-upload"></i>Cargar imagen</span>
                    <input type="file" name="images" id="images" multiple class="alert-success" >
                </div>
                <div class="input-prepend">
                    <?php echo Form::hidden('image_src', NULL, array('id' => 'image_src')) ?>
                    <a href="<?php URL::site('admin/colors')?>" >
                        <button type="submit" class="btn btn-success">Guardar color</button>
                    </a>
                    <?php echo Form::close() ?>
                </div>
            </div>
            <div id="picture" class="span4" style="text-align: center"></div>
        </div>
    </div>
</div>