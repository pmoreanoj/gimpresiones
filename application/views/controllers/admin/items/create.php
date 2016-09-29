<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Crear un nuevo item</h2>
        </div>

        <div class="span2">
            &nbsp;
        </div>

        <div class="span9">	
            <div class="span5">	
                <?php echo Form::open('admin', array('id' => 'item-validation', 'name' => 'form')) ?>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-star"></i></span>
                    <?php echo Form::input('name', NULL, array('id' => 'name', 'class' => 'span3', 'placeholder' => 'Nombre del item. Ej: Camiseta cuello en V roja', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
               <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>G&eacute;nero</span>
                     <select id="clothing_genre">
                        <option> Escoja tipo de persona </option>
                        <option value="MEN">Hombres</option>
                        <option value="WOMEN">Mujeres</option>
                        <option value="KIDS"> Ni&ntilde;os</option>
                    </select>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Tipo de prenda</span>
                     <span id="type_load"></span>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Talla</span>
                     <span id="size_load"></span>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-flag"></i>Color primario</span>
                     <select id="first_color">
                        <option value="">Escoja uno</option>
                        <?php 
                            foreach($colors as $color){
                                ?>
                                <option value="<?php echo $color->id; ?>" ><?php echo $color->name; ?></option>
                            <?php }
                                    ?>
                    </select>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-flag"></i>Color secundario</span>
                     <select id="second_color">
                        <option value=''>Escoja uno (opcional) </option>
                        <?php 
                            foreach($colors as $color){
                                ?>
                                <option value="<?php echo $color->id; ?>" ><?php echo $color->name; ?></option>
                            <?php }
                                    ?>
                    </select>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-upload"></i>Cargar imagen</span>
                    <input type="file" name="images" id="images" multiple class="alert-success" >
                    <div id="response"></div>
                </div>
                <div class="input-prepend">
                    <?php echo Form::hidden('image_src', NULL, array('id' => 'image_src')) ?>
                        <button type="submit" class="btn btn-success">Guardar item</button>
                    <?php echo Form::close() ?>
                </div>
            </div>

            <div id="picture" class="span4" style="text-align: center"></div>

        </div>

    </div>
</div>