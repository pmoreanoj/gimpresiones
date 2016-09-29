<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Editar item</h2>
        </div>
        <div class="span2">
            &nbsp;
        </div>
        <div class="span9">	
            <div class="span5">	
                <?php echo Form::open('admin', array('id' => 'item-validation', 'name' => 'form')) ?>
                <?php echo Form::hidden('unique', $item->id, array('id'=>'unique'))?>
                <?php echo Form::hidden('image_src',$item->photo, array('id'=>'image_src'))?>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-star"></i></span>
                    <?php echo Form::input('name', $item->name, array('id' => 'name', 'class' => 'span3', 'placeholder' => 'Nombre del item. Ej: Camiseta cuello en V roja', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
               <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Género</span>
                     <select id="clothing_genre">
                         <?php $cloth = ORM::factory('Cloths', $item->clothing_id);
                         if($cloth->person_type == 'MEN'){
                             ?>
                            <option value="MEN">Hombres</option>
                            <option value="WOMEN">Mujeres</option>
                            <option value="KIDS"> Niños</option>
                            <?php }
                         else if($cloth->person_type == 'WOMEN'){
                             ?>
                            <option value="WOMEN">Mujeres</option>
                            <option value="MEN">Hombres</option>
                            <option value="KIDS"> Niños</option>
                            <?php }
                            else if($cloth->person_type == 'KIDS'){
                             ?>
                            <option value="KIDS"> Niños</option>
                            <option value="WOMEN">Mujeres</option>
                            <option value="MEN">Hombres</option>
                            <?php } ?>
                    </select>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Tipo de prenda</span>
                     <span id="type_load">
                         <select id="clothing_type">
                        <?php 
                         if($cloth->type_enum == 'T-SHIRT'){
                         ?>
                            <option value="1">Camiseta cuello redondo</option>
                            <option value="2">Camiseta en V</option>
                            <option value="3">BBD</option>
                            <option value="4">BBD Tank</option>
                            <option value="5">Buso manga larga</option>
                            <option value="6">Buso con capucha</option>
                        </select>
                         <?php }  
                         else if($cloth->type_enum == 'V-SHIRT'){
                         ?>
                            <option value="2">Camiseta en V</option>
                            <option value="1">Camiseta cuello redondo</option>
                            <option value="3">BBD</option>
                            <option value="4">BBD Tank</option>
                            <option value="5">Buso manga larga</option>
                            <option value="6">Buso con capucha</option>
                        </select>
                         <?php } 
                         else if($cloth->type_enum == 'BBDS_A'){
                         ?>
                            <option value="3">BBD</option>
                            <option value="1">Camiseta cuello redondo</option>
                            <option value="2">Camiseta en V</option>
                            <option value="4">BBD Tank</option>
                            <option value="5">Buso manga larga</option>
                            <option value="6">Buso con capucha</option>
                         <?php }
                         else if($cloth->type_enum == 'BBDS_B'){
                         ?>
                            <option value="4">BBD Tank</option>
                            <option value="1">Camiseta cuello redondo</option>
                            <option value="2">Camiseta en V</option>
                            <option value="3">BBD</option>
                            <option value="5">Buso manga larga</option>
                            <option value="6">Buso con capucha</option>
                         <?php }
                         else if($cloth->type_enum == 'BUSO_A'){
                         ?>
                            <option value="5">Buso manga larga</option>
                            <option value="1">Camiseta cuello redondo</option>
                            <option value="2">Camiseta en V</option>
                            <option value="3">BBD</option>
                            <option value="4">BBD Tank</option>
                            <option value="6">Buso con capucha</option>
                         <?php }
                         else if($cloth->type_enum == 'BUSO_B'){
                         ?> 
                            <option value="6">Buso con capucha</option>
                            <option value="1">Camiseta cuello redondo</option>
                            <option value="2">Camiseta en V</option>
                            <option value="3">BBD</option>
                            <option value="4">BBD Tank</option>
                            <option value="5">Buso manga larga</option>
                         <?php } ?>
                         </select>
                     </span>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Talla</span>
                     <span id="size_load">
                         <select id="clothing_id">
                             <option value="<?php echo $cloth->id; ?>" ><?php echo $cloth->size; ?> </option>
                         </select>
                     </span>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-flag"></i>Color primario</span>
                     <select id="first_color">
                         <option value="<?php echo $item->first->id?>"><?php echo $item->first->name; ?></option>
                        <?php   $all_colors = ORM::factory('ClothColors');
                                $colors = $all_colors->find_all();
                                foreach($colors as $color){
                                    if($color->id == $item->first_color){
                                        continue;
                                    } ?>
                                    <option value="<?php echo $color->id; ?>" ><?php echo $color->name; ?></option>
                                <?php } ?>
                    </select>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-flag"></i>Color secundario</span>
                     <select id="second_color">
                         <option value="<?php echo $item->second->id?>"><?php echo $item->second->name; ?></option>
                        <?php   $all_colors = ORM::factory('ClothColors');
                                $colors = $all_colors->find_all();
                                foreach($colors as $color){
                                    if($color->id == $item->second_color){
                                        continue;
                                    } ?>
                                    <option value="<?php echo $color->id; ?>" ><?php echo $color->name; ?></option>
                                <?php } ?>
                    </select>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-check"></i>Estado</span>
                     <select id="active">
                         <?php
                         if($item->active == 'ENABLED'){
                             ?>
                         <option value="ENABLED" >Activado</option>
                         <option value="DISABLED" >Desactivado</option>
                         <?php } 
                         else if($item->active == 'DISABLED'){
                            ?>
                         <option value="DISABLED" >Desactivado</option>
                         <option value="ENABLED" >Activado</option>
                         <?php } ?>
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
            <div id="picture_div" class="span4">
            <?php echo HTML::image($item->photo, array('id' => 'picture', 'class' => 'picture_img')) ?>
            </div>

            <div id="picture" class="span4" style="text-align: center"></div>

        </div>

    </div>
</div>