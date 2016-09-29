<div class="span12">
    <div class="categorybox">
        <div class="headtitle">
            <h2>Editar un logo</h2>
        </div>
        <div class="span2">
            &nbsp;
        </div>
        <div class="span5">	      
            <?php echo Form::open('admin', array('id' => 'logos-validation', 'name' => 'form')) ?>
            <?php echo Form::hidden('unique',$logo->id, array('id'=>'unique'))?>
            <?php echo Form::hidden('image_src',$logo->image, array('id'=>'image_src'))?>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-star"></i></span>
                <?php echo Form::input('name', $logo->name, array('id' => 'name', 'class' => 'span3', 'placeholder' => 'Descripción del color', 'size' => '16', 'style'=>'height: 31')) ?>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-camera"></i>Tipo de logo</span>
                <br/><br/>
                <?php if($logo->type == 'TERMIC'){ ?>
                    <input type="radio" name="type" value="TERMIC" checked />Película térmica
                    <input type="radio" name="type" value="TRANSFER" />Papel tránsfer
                <?php }
                    else if($logo->type == 'TRANSFER'){ ?>
                    <input type="radio" name="type" value="TERMIC" />Película térmica
                    <input type="radio" name="type" value="TRANSFER" checked />Papel tránsfer
                    <?php }
                    else{ ?>
                        <input type="radio" name="type" value="TERMIC" />Película térmica
                        <input type="radio" name="type" value="TRANSFER" />Papel tránsfer
                    <?php } ?>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i>Categoría de logo</span>
                <select id="category">
                    <?php 
                         if($logo->category == 'TEXTO'){ //CAMBIAR A CATEGORY CUANDO ESTE ACTUALIZADA LA BASE
                         ?>
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
                         <?php }  
                         else if($logo->category == 'BROMAS'){
                             ?>
                        <option value="2">Bromas</option>
                        <option value="1">Texto general</option>
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
                         <?php  }
                         else if($logo->category == 'FRASES'){
                         ?>
                        <option value="3">Frases</option>                        
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
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
                        <?php  }
                         else if($logo->category == 'DIBUJOS'){
                         ?>
                        <option value="4">Cartoons</option>                      
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
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
                        <?php  }
                         else if($logo->category == 'SIMPSONS'){
                         ?>
                        <option value="5">Simpsons</option>                   
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="6">Dragonball Z</option>
                        <option value="7">Sonic</option>
                        <option value="8">Superhéroes</option>
                        <option value="9">Películas</option>
                        <option value="10">Transformers</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                         <?php  }
                         else if($logo->category == 'DRAGONBALL'){
                         ?>
                        <option value="6">Dragonball Z</option>                                           
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="5">Simpsons</option>
                        <option value="7">Sonic</option>
                        <option value="8">Superhéroes</option>
                        <option value="9">Películas</option>
                        <option value="10">Transformers</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'SONIC'){
                         ?>
                        <option value="7">Sonic</option>                                                                   
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="5">Simpsons</option>
                        <option value="6">Dragonball Z</option>
                        <option value="8">Superhéroes</option>
                        <option value="9">Películas</option>
                        <option value="10">Transformers</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'HEROES'){
                         ?>
                        <option value="8">Superhéroes</option>                                                                                           
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="5">Simpsons</option>
                        <option value="6">Dragonball Z</option>
                        <option value="7">Sonic</option>
                        <option value="9">Películas</option>
                        <option value="10">Transformers</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'PELICULAS'){
                         ?>
                        <option value="9">Películas</option>                                                                                                                   
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="5">Simpsons</option>
                        <option value="6">Dragonball Z</option>
                        <option value="7">Sonic</option>
                        <option value="8">Superhéroes</option>
                        <option value="10">Transformers</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'TRANSFORMERS'){
                         ?>
                        <option value="10">Transformers</option>                                                                                                                                           
                        <option value="1">Texto general</option>
                        <option value="2">Bromas</option>
                        <option value="3">Frases</option>
                        <option value="4">Cartoons</option>
                        <option value="5">Simpsons</option>
                        <option value="6">Dragonball Z</option>
                        <option value="7">Sonic</option>
                        <option value="8">Superhéroes</option>
                        <option value="9">Películas</option>
                        <option value="11">Twillight</option>
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'TWILLIGHT'){
                         ?>
                        <option value="11">Twillight</option>                                                                                                                                                                   
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
                        <option value="12">Personajes</option>
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'PERSONAJES'){
                         ?>
                        <option value="12">Personajes</option>                                                                                                                                                                                           
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
                        <option value="13">Don Ramón</option>
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'DONRAMON'){
                         ?>
                        <option value="13">Don Ramón</option>                                                                                                                                                                                                                   
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
                        <option value="14">Otros</option>
                        <?php  }
                         else if($logo->category == 'OTROS'){
                         ?>
                        <option value="14">Otros</option>                                                                                                                                                                                                                                           
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
                         <?php } ?>
                    </select>
                </div>    
                <div class="input-prepend">
                <span class="add-on"><i class="icon-bookmark"></i></span>
                <?php echo Form::input('description', $logo->description, array('id' => 'description', 'class' => 'span3', 'placeholder' => 'Descripción del color', 'size' => '16', 'style'=>'height: 31')) ?>
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
            <button type="submit" class="btn btn-success">Guardar logo</button>
            <?php echo Form::close() ?>
        </div>

        <div id="picture_div" class="span4">
            <?php echo HTML::image($logo->image, array('id' => 'picture', 'class' => 'picture_img')) ?>
        </div>	
    </div>
</div>