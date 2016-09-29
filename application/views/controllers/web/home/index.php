<link href="../../../../../media/css/index.css" rel="stylesheet">
<div id="main-carousel">

    <div class="slides_container container">

        <div class="span8columns">
            <div id="myCarousel" class="carousel slide">

                <!-- Carousel items -->

                <div class="carousel-inner">

                    <div class="active item">
                        <?php echo HTML::image('media/images/template/main-carousel/carrusel1.jpg', array('alt' => '', 'class' => 'pull-left')) ?>
                        <div class="shading-left">
                            <h2>La mejor calidad</h2>
                            <p>Contamos con un catálogo de diseños ya vectorizados a disposición de nuestros clientes de más de 1000 diseños de diferente índole.</p>
                            <a class="btn btn-large btn-danger" href="<?php echo URL::site('home/womenlist') ?>">¡Compra Ya!</a>
                        </div>
                        <div class="numberslide">1/3</div>
                    </div>


                    <div class="item">
                        <?php echo HTML::image('media/images/template/main-carousel/carrusel2.jpg', array('alt' => '', 'class' => 'pull-left')) ?>
                        <div class="shading-left">
                            <h2>Dos estilos de estampados</h2>
                            <p>Sobre papel transfer: es tinta sobre papel mate y es utilizado para estampados fotográficos.</p>
                            <p>La película térmica es un tipo de estampado de altísima calidad, importada directamente de Estados Unidos, y es exclusivo en el Ecuador para Global Impressions.</p>
                            <a class="btn btn-large btn-danger" href="<?php echo URL::site('home/filmstamp') ?>">Descubre ahora</a>
                        </div>
                        <div class="numberslide">2/3</div>
                    </div>

                    <div class="item">
                        <?php echo HTML::image('media/images/template/main-carousel/carrusel3.jpg', array('alt' => '', 'class' => 'pull-left')) ?>
                        <div class="shading-left">
                            <h2>Los diseños más demandados</h2>
                            <p>Entre los cuales puede escoger el tipo deestampado y el color, y sobre qué modelo, color y talla de prenda desea. Es decir, hacemos la prenda a gusto del cliente, pero también podemos crear logotipos que el cliente desee.</p>
                            <a class="btn btn-large btn-danger" href="<?php echo URL::site('home/kidlist') ?>">Busca tu diseño preferido</a>
                        </div>
                        <div class="numberslide">3/3</div>
                    </div>
                    
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>

    </div>
</div>

<div class="container" id="main-content">
    <div class="row" id="featured">		

        <div class="sale">
            <div class="span6">
                <div class="sale1">
                    <div class="salebanner">
                        
                         <a href="<?php echo URL::site('home/filmstamp') ?>">
                            <?php echo HTML::image('media/images/index/peliculaTermica.jpg', array('alt' => '')) ?>
                            <p class="sale1">Película térmica </p></a>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="sale2">

                    <a href="<?php echo URL::site('home/paperstamp') ?>">
                        <?php echo HTML::image('media/images/index/papelTransfer.jpg', array('alt' => '')) ?>
                        <p class="sale2">Papel transfer</p></a>
                </div>
            </div>
        </div>

        <br/>
        <div class="span-10 listimage">
        <div class="headtitle">
            <h4>CATEGORIA MUJERES</h4>	
        </div>

        <ul class="product">
            <li>
                <a href="<?php echo URL::site('home/women_vshirt') ?>">
                    <?php echo HTML::image('media/images/index/camisetaVmujer.jpg', array('alt' => '')) ?>

                    <div class="producttitlebox"></div>
                    <div class="producttitle">Camiseta en V</div>
                    <div class="brandtitle">Talla: Small</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$11.00</div>
                </a>
            </li>

            <li>
                <a href="<?php echo URL::site('home/women_hoodie2') ?>">
                    <?php echo HTML::image('media/images/index/busoMujer.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Buso con capucha</div>
                    <div class="brandtitle">Talla: Medium</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$15.00</div>
                </a>
            </li>

            <li>
                <a href="<?php echo URL::site('home/women_bbd') ?>">
                    <?php echo HTML::image('media/images/index/bbdMujer.jpg', array('alt' => '')) ?>	
                    <div class="producttitlebox"></div>
                    <div class="producttitle">BBD (Mujer)</div>
                    <div class="brandtitle">Talla:18</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$11.00</div>
                </a>
            </li>
        </ul>
        </div>
        <div class="span-10 listimage">
        <div class="headtitle">
            <h4>CATEGORIA HOMBRES</h4>	
        </div>

        <ul class="product">

            <li>
                <a href="<?php echo URL::site('home/men_bbd') ?>">
                    <?php echo HTML::image('media/images/index/bbdHombre.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">BBD (Hombre)</div>
                    <div class="brandtitle">Talla: Large</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$13.00</div>
                </a>
            </li>

            <li>
                <a href="<?php echo URL::site('home/men_hoodie') ?>">
                    <?php echo HTML::image('media/images/index/busoHombre.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Buso manga larga</div>
                    <div class="brandtitle">Talla: xS</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$14.00</div>
                </a>
            </li>

            <li>
                <a href="<?php echo URL::site('home/men_tshirt') ?>">
                    <?php echo HTML::image('media/images/index/cuelloRedondoHombre.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Cuello redondo</div>
                    <div class="brandtitle">Talla: M</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$13.00</div>
                </a>
            </li>

        </ul>
        </div>
        <div class="span-10 listimage">
        <div class="headtitle" id="categoriaNinos">
            <h4>CATEGORIA NIÑOS</h4>	
        </div>
        <br/>
        <ul class="product">

            <li>
                <a href="<?php echo URL::site('home/kidlist') ?>">
                    <?php echo HTML::image('media/images/index/camisetaNino1.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Cuello redondo</div>
                    <div class="brandtitle">Talla: 12</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$11.00</div>
                </a>
            </li>

            <li>
                <a href="<?php echo URL::site('home/kidlist') ?>">
                    <?php echo HTML::image('media/images/index/camisetaNino2.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Cuello redondo</div>
                    <div class="brandtitle">Talla: 8</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$11.00</div>
                </a>
            </li>

            <li>
                <a href="<?php echo URL::site('home/kidlist') ?>">
                    <?php echo HTML::image('media/images/index/camisetaNino3.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Cuello redondo</div>
                    <div class="brandtitle">Talla: 10</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$11.00</div>
                </a>
            </li>
        </ul>					
        </div>
    </div>
</div>