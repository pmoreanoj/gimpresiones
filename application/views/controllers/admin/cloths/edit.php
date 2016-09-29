<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Editar una prenda</h2>
        </div>
        <div class="span2">
            &nbsp;
        </div>

        <div class="span5">	      
                <?php echo Form::open('admin', array('id' => 'clothes-validation', 'name' => 'form')) ?>
                <?php echo Form::hidden('unique',$cloth->id, array('id'=>'unique'))?>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i>Tipo de persona</span>
                    <br/><br/>
                    <?php if($cloth->person_type == 'MEN'){
                        ?>
                            <input type="radio" name="person" value="MEN" checked />Hombre
                            <input type="radio" name="person" value="WOMEN" />Mujer
                            <input type="radio" name="person" value="KIDS" />Niños
                   <?php }
                         else if($cloth->person_type == 'WOMEN'){
                         ?>
                            <input type="radio" name="person" value="MEN" />Hombre
                            <input type="radio" name="person" value="WOMEN" checked />Mujer
                            <input type="radio" name="person" value="KIDS" />Niños
                         <?php
                         }
                         else if($cloth->person_type == 'KIDS'){
                             ?>
                            <input type="radio" name="person" value="MEN" />Hombre
                            <input type="radio" name="person" value="WOMEN"  />Mujer
                            <input type="radio" name="person" value="KIDS" checked />Niños
                            <?php
                         }
                            ?>
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Tipo de prenda</span>
                     <select id="type">
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
                </div>    
                <div class="input-prepend">
                    <span class="add-on">Precio $</span>
                    <?php echo Form::input('price', number_format($cloth->price, 2), array('id' => 'price', 'class' => 'span3', 'placeholder' => 'Precio de la prenda. Ej: 20.00', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-comment"></i>Talla</span>
                    <?php echo Form::input('size', $cloth->size, array('id' => 'size', 'class' => 'span3', 'placeholder' => 'Talla. Ej: XS, 10 o XL', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
                 <div class="input-prepend">
                    <span class="add-on">Precio película térmica $</span>
                    <?php echo Form::input('paper_termic', number_format($cloth->paper_termic, 2), array('id' => 'paper_termic', 'class' => 'span4', 'placeholder' => 'Precio adicional por logo en película térmica', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on">Precio papel trásfer $</span>
                    <?php echo Form::input('paper_transfer', number_format($cloth->paper_transfer, 2), array('id' => 'paper_transfer', 'class' => 'span4', 'placeholder' => 'Precio adicional por logo en papel transfer', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on">Precio logo personalizado $</span>
                    <?php echo Form::input('custom_logo', number_format($cloth->custom_logo, 2), array('id' => 'custom_logo', 'class' => 'span4', 'placeholder' => 'Precio adicional por logo personalizado', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                    <button type="submit" class="btn btn-success">Guardar prenda</button>
                    <?php echo Form::close() ?>
                </div>
    </div>
</div>