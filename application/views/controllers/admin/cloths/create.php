<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Subir nueva prenda de vestir</h2>
        </div>

        <div class="span2">
            &nbsp;
        </div>

        <div class="span9">	
            <div class="span5">	      
                <?php echo Form::open('admin', array('id' => 'clothes-validation', 'name' => 'form')) ?>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i>Tipo de persona</span>
                    <br/><br/>
                    <input type="radio" name="person" value="MEN" />Hombre
                    <input type="radio" name="person" value="WOMEN" />Mujer
                    <input type="radio" name="person" value="KIDS" />Niños
                </div>
                 <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Tipo de prenda</span>
                     <select id="type">
                        <option value="1">Camiseta cuello redondo</option>
                        <option value="2">Camiseta en V</option>
                        <option value="3">BBD</option>
                        <option value="4">BBD Tank</option>
                        <option value="5">Buso manga larga</option>
                        <option value="6">Buso con capucha</option>
                    </select>
                </div>    
                <div class="input-prepend">
                    <span class="add-on">Precio $</span>
                    <?php echo Form::input('price', NULL, array('id' => 'price', 'class' => 'span3', 'placeholder' => 'Precio de la prenda. Ej: 20.00', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-comment"></i>Talla</span>
                    <?php echo Form::input('size', NULL, array('id' => 'size', 'class' => 'span3', 'placeholder' => 'Talla. Ej: XS, 10 o XL', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
                 <div class="input-prepend">
                    <span class="add-on">Precio película térmica $</span>
                    <?php echo Form::input('paper_termic', NULL, array('id' => 'paper_termic', 'class' => 'span4', 'placeholder' => 'Precio adicional por logo en película térmica', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on">Precio papel trásfer $</span>
                    <?php echo Form::input('paper_transfer', NULL, array('id' => 'paper_transfer', 'class' => 'span4', 'placeholder' => 'Precio adicional por logo en papel transfer', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on">Precio logo personalizado $</span>
                    <?php echo Form::input('custom_logo', NULL, array('id' => 'custom_logo', 'class' => 'span4', 'placeholder' => 'Precio adicional por logo personalizado', 'size' => '10', 'style' => 'height: 31')) ?>
                </div>
                    <button type="submit" class="btn btn-success">Guardar prenda</button>
                    <?php echo Form::close() ?>
                </div>
            </div>
        </div>
    </div>
