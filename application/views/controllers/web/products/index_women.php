<div class="container" id="main-content">
    <div class="row">
        <?php echo Form::hidden('genre', 'W', array('id' => 'genre')) ?>
        <?php echo Form::hidden('custom', 'NO', array('id'=>'custom'))?>
        <div class="span8"><div class="price" style="color: pink">¡Personaliza a tu gusto!</div></div>
        <div class="span4">
            <div class="prices" style="text-align: right;margin-left: 30px">
                <div class="price" style="color: black;position: relative;margin-right: 10px"><span id="price_total">$17.00</span></div>
                <div class="retailprice" >
                    <button class="btn btn-success btn-large" style="position: relative;margin-top:-20">Comprar</button>
                </div>
            </div>
        </div>

    </div>



    <div class="row">

        <div class="coldes span2" style="background-color: white">
            <div>
                <div class="img-icon-designer" option="V-SHIRT">
                    <?php echo HTML::image('media/images/designer/tshirt.png', array('width' => '50')) ?> 
                </div>
                <div class="text-icon-designer">
                    Cuello en V
                </div>
            </div>
            <div>
                <div class="img-icon-designer" option="T-SHIRT">
                    <?php echo HTML::image('media/images/designer/greenlemonTshirt.png', array('width' => '50')) ?> 
                </div>
                <div class="text-icon-designer">
                    Cuello Redondo
                </div>
            </div>
            <div>
                <div class="img-icon-designer"  option="BBDS_A">
                    <?php echo HTML::image('media/images/designer/blackBbd_f.png', array('width' => '50')) ?> 
                </div>
                <div class="text-icon-designer" option="BBDS_A">
                    BBDS normal
                </div>
            </div>

            <div>
                <div class="img-icon-designer"  option="BBDS_B">
                    <?php echo HTML::image('media/images/designer/blackBbdtank.png', array('width' => '50')) ?> 
                </div>
                <div class="text-icon-designer" option="BBDS_B">
                    BBDS tank
                </div>
            </div>
            <div>
                <div class="img-icon-designer" option="BUSO_A">
                    <?php echo HTML::image('media/images/designer/blackBuso.png', array('width' => '50')) ?> 
                </div>
                <div class="text-icon-designer">
                    Buso
                </div>
            </div>
            <div>
                <div class="img-icon-designer" option="BUSO_B">
                    <?php echo HTML::image('media/images/designer/blackHoodie.png', array('width' => '50')) ?> 
                </div>
                <div class="text-icon-designer">
                    Buzo con capucha
                </div>
            </div>

        </div>
        <div class="coldes span8 center-col" >
            <div class="logo-center-col">
                <?php echo HTML::image('media/images/designer/default.png', array('class' => 'designer-canvas', 'width' => '350', 'unique' => '0')) ?>
                <div class="overlay-center">
                    <?php echo HTML::image('media/images/logo.jpg', array('class' => 'main-logo', 'width' => '120', 'unique' => '0')) ?>
                </div>

            </div>
        </div>
        <div class="span2 right-col" >

        </div>
    </div>

    <div id='colors_div' class="row">
        <div  class="span2">
            <h3>Colores:</h3>
        </div> 
        <div id='colors_content' class="span8"> 
            &nbsp;
        </div>
        <div  class="span2">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-upload"></i>Sube tu imagen</span>
                    <input type="file" name="images" id="images" multiple class="alert-success" >                    
                    <div id="response"></div>
                </div>
            
        </div>  
    </div>

    <div class="row">
        <div class="span3">&nbsp; </div>
        <div id="size" class="span3">    

        </div>
        <div class="span4">
            <div class="span2"><center>Cantidad:</center></div> 
            <div class="span1">
                <center>    
                    <?php echo Form::input('quantity', NULL, array('id' => 'quantity', 'class' => 'span1')) ?>
                </center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="designer_lowbar">
            <div class="span2 logos-menu">
                <!--
               <div class="dropdown logos-dropdown">
                  
                   <button class="btn dropdown-toggle sr-only" type="button" id="logos" data-toggle="dropdown" style="width: 150">
                       Logos
                       <span class="caret"></span>
                   </button>
                   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                       <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Texto</a>
                           <ul>

                           </ul>
                       </li>
                       <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                       <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                       <li role="presentation" class="divider"></li>
                       <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                   </ul>
               </div>

                -->
                <ul id="menu">
                    <?php echo Form::hidden('logos_page', NULL, array('id' => 'logos_page')) ?>
                    <?php echo Form::hidden('logos_category', NULL, array('id' => 'logos_category')) ?>
                    <li>
                        <a href="#">Texto</a>
                        <ul>
                            <li><a href="#menu" class="logos-category" value="BROMAS">Bromas</a></li>
                            <li><a href="#menu" class="logos-category" value="FRASES">Frases</a></li>
                            <li><a href="#menu" class="logos-category" value="TEXTO">Otros</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Dibujos</a>
                        <ul>
                            <li><a href="#menu" class="logos-category" value="SIMPSONS">The Simpsons</a></li>
                            <li><a href="#menu" class="logos-category" value="DRAGONBALL">Dragonball Z</a></li>
                            <li><a href="#menu" class="logos-category" value="SONIC">Sonic</a></li>
                            <li><a href="#menu" class="logos-category" value="DIBUJOS">Otros</a></li>
                        </ul>
                    </li>

                    <li><a href="#menu" class="logos-category" value="HEROES">Super H&eacute;roes</a></li>

                    <li>
                        <a href="#">Pel&iacute;culas</a>
                        <ul>
                            <li><a href="#menu" class="logos-category" value="TRANSFORMERS">Transformers</a></li>
                            <li><a href="#menu" class="logos-category" value="TWILLIGHT">Twillight</a></li>
                            <li><a href="#menu" class="logos-category" value="PELICULAS">Peliculas</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Personajes</a>
                        <ul>
                            <li><a href="#menu" class="logos-category" value="DONRAMON">Don Ramon</a></li>
                            <li><a href="#menu" class="logos-category" value="PERSONAJES">Otros</a></li>
                        </ul>
                    </li>


                    <li><a href="#menu" class="logos-category" value="OTROS">Otros</a></li>
                </ul>
            </div>
            <div class="span10 lowbar-img-div" >

            </div>
        </div>
    </div>
</div>

