<div class="container" id="main-content">
    <div class="row">
        <div class="span12">

            <div class="span6 columns">
                <div id="myCarousel" class="carousel slide">

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="active item">
                             <?php echo HTML::image('media/images/product/product1.jpg', array('alt' => '','class'=>'pull-left')) ?>
                        </div>

                        <div class="item">
                             <?php echo HTML::image('media/images/product/product2.jpg', array('alt' => '','class'=>'pull-left')) ?>
                           </div>

                        <div class="item">
                             <?php echo HTML::image('media/images/product/product3.jpg', array('alt' => '','class'=>'pull-left')) ?>
                        </div>

                    </div>

                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>

            <div class="span6">
                <div class="productinfo">
                    <h2>Buso con capucha unisex</h2>
                    <h4>Estampado: Papel transfer</h4>

                    <div class="prices">
                        <div class="price">$18.50</div>
                    </div>

                    <form class="well form-inline">
                        <label class="control-label">Talla:</label>
                        <select class="span1">
                            <option>0</option>
                            <option>2</option>
                            <option>4</option>
                            <option>6</option>
                            <option>8</option>
                            <option>10</option>
                            <option>12</option>
                            <option>14</option>
                            <option>16</option>
                            <option>18</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>

                        <label class="control-label">Cantidad:</label>
                        <select class="span1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <label class="control-label">Color:</label>
                        <select class="span2">
                            <option>Rojo</option>
                            <option>Azul</option>
                            <option>Amarillo</option>
                        </select>

                        <button class="btn btn-danger btn-large"><i class="icon-shopping-cart icon-white"></i>Agrega a tu carrito</button>
                        <script>
                            $('#SmartCart').smartCart({productItemTemplate: productTemplateWithSKU });
                        </script>
                    </form>

                    <p>
                        Descripción del estampado y calidad de la tela.
                        Vestibulum dapibus enim nunc. Nunc suscipit, turpis at condimentum rutrum, nisl nibh varius ligula, vitae aliquam orci lacus ut ligula. Nunc varius, mi vel lacinia elementum, odio magna euismod sapien, quis facilisis mauris mi a urna. Aenean purus lectus, semper eget laoreet eget, suscipit et nisi.

                    </p>	

                    <div class="social">
                        <?php echo HTML::image('media/images/template/sample/emailbutton.png', array('alt' => '')) ?>
                        <?php echo HTML::image('media/images/template/sample/likebutton.png', array('alt' => '')) ?>
                        <?php echo HTML::image('media/images/template/sample/pinbutton.png', array('alt' => '')) ?>
                        <?php echo HTML::image('media/images/template/sample/tweetbutton.png', array('alt' => '')) ?>

                    </div>

                    <div class="producttabs"> 
                        <div class="tabbable"> 
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Descripción</a></li>
                                <li><a href="#tab2" data-toggle="tab">Opciones de envío</a></li>
                                <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <p>
                                        Este buso de capucha unisex es hecho con 100% algodón. Además incluye un periodo de duración de 2 a 3 años.
                                    </p>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <p>
                                        Si usted compra nuestros productos vía el sitio web, puede elegir la forma de retirar su producto. Ouede ir personalmente, o pagar un extra para que Global Impressions a través de Correos del Ecuador le envía su compra, garantizando un envío ágil y seguro.
                                    </p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <p>
                                        Aquí irían los comentarios de los clientes que ya tuvieron la experiencia de usar nuestro e-commerce y quieren compartirlo con los demás usuarios.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="headtitle">
            <h4>PRODUCTOS RELACIONADOS</h4>	
        </div>

        <ul class="product">
            <li>
                <a href="product">
                    <?php echo HTML::image('media/images/product/productRelated1.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Buso sin capucha</div>
                    <div class="brandtitle">Talla: Medium</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$18.00</div>
                </a>
            </li>

            <li>
                <a href="product">
                    <?php echo HTML::image('media/images/product/productRelated2.jpg', array('alt' => '')) ?>
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Buso sin capucha</div>
                    <div class="brandtitle">Talla: Small</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$18.00</div>
                </a>
            </li>

            <li>
                <a href="product">
                    <?php echo HTML::image('media/images/product/productRelated3.jpg', array('alt' => '')) ?>	
                    <div class="producttitlebox"></div>
                    <div class="producttitle">Buso con capucha</div>
                    <div class="brandtitle">Talla: Large</div>
                    <div class="pricetag"></div>
                    <div class="saleprice">$18.00</div>
                </a>
            </li>
        </ul>

    </div>
</div>