<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Editar un color de ropa</h2>
        </div>

        <div class="span2">
            &nbsp;
        </div>

        <div class="span5">	
            <?php echo Form::open('admin', array('id' => 'color-validation', 'name' => 'form')) ?>
            <?php echo Form::hidden('unique',$color->id, array('id'=>'unique'))?>
            <?php echo Form::hidden('image_src',$color->image, array('id'=>'image_src'))?>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-star"></i></span>
                <?php echo Form::input('name', $color->name, array('id' => 'name', 'class' => 'span3', 'placeholder' => 'Nombre del color. Ej: rojo', 'size' => '16', 'style' => 'height: 31')) ?>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-bookmark"></i></span>
                <?php echo Form::input('description', $color->description, array('id' => 'description', 'class' => 'span3', 'placeholder' => 'Descripción del color', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-upload"></i>Cargar imagen</span>
                <input type="file" name="images" id="images" multiple class="alert-success" >
                <div id="response"></div>
                <ul id="image-list">
                </ul>
            </div>

            <div class="input-prepend">
            </div>
            <button type="submit" class="btn btn-success">Guardar color</button>
            <?php echo Form::close() ?>
        </div>

        <div id="picture_div" class="span4">
            <?php echo HTML::image($color->image, array('id' => 'picture', 'class' => 'picture_img')) ?>
        </div>	
    </div>
</div>