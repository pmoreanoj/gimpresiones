<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Subir un nuevo logo</h2>
        </div>

        <div class="span2">
            &nbsp;
        </div>

        <div class="span9">	
            <div class="span5">	
                <?php echo Form::open('admin', array('id' => 'logos-validation', 'name' => 'form')) ?>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-star"></i></span>
                    <?php echo Form::input('name', NULL, array('id' => 'name', 'class' => 'span3', 'placeholder' => 'Nombre del logo. Ej: Simpsons 1', 'size' => '20', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-camera"></i>Tipo de logo</span>
                    <br/><br/>
                    <input type="radio" name="type" value="TERMIC" />Película térmica
                    <input type="radio" name="type" value="TRANSFER" />Papel tránsfer
                </div>
                <div class="input-prepend">
                     <span class="add-on"><i class="icon-search"></i>Categoría del logo</span>
                     <select id="category">
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="5">Simpsons</option>
                        <option value="6">Dragonball Z</option>
                        <option value="7">Sonic</option>
                        <option value="8">Superhéroes</option>
                        <option value="9">Películas</option>
                        <option value="10">Transformers</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                    </select>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-bookmark"></i></span>
                    <?php echo Form::input('description', NULL, array('id' => 'description', 'class' => 'span3', 'placeholder' => 'Descripción del logo', 'size' => '16', 'style' => 'height: 31')) ?>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-refresh"></i>Cargar imagen</span>
                    <input type="file" name="images" id="images" multiple class="alert-success" >
                    <div id="response"></div>
                </div>
                <div class="input-prepend">
                    <?php echo Form::hidden('image_src', NULL, array('id' => 'image_src')) ?>
                        <button type="submit" class="btn btn-success">Guardar logo</button>
                    <?php echo Form::close() ?>
                </div>
            </div>

            <div id="picture" class="span4" style="text-align: center"></div>

        </div>

    </div>
</div>