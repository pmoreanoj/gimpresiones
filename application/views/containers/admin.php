<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?> - Administración de Global Impressions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        foreach ($styles as $file => $type)
            echo HTML::style($file, array('media' => $type)), PHP_EOL
            ?>
        <?php
        foreach ($scripts as $file)
            echo HTML::script($file), PHP_EOL
            ?>
    </head>

    <script type="text/javascript">
        var document_root = '<?php echo Url::site(); ?>';
    </script>

    <body>
        <header>
            <div class="container">
                <div class="row">
                    <h1 id="logo" class="span4"><a href="<?php echo URL::site("admin") ?>" title="Global Impressions"><?php echo HTML::image('media/images/h_logo_white.png', array('height' => '50')) ?></a></h1>
                    <nav class="span8" id="navigation">
                        <div class="accountbox">
                            <div class="span4">
                                <div class="navbar navbar-static">
                                    <ul class="nav">
                                        <li><a href="<?php echo URL::site('#') ?>"><i class="icon-shopping-cart"></i> Carrito</a></li>
                                        <li class="divider-vertical"></li>
                                        <li><a href="<?php echo URL::site('home/account') ?>"><i class="icon-user"></i> Log out (Patricio)</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="subnav">	
                <div class="container">
                    <div class="navlist">
                        <nav class="span8">	
                            <div id="navbar" class="navbar navbar-static">
                                <div class="span8">
                                    <ul class="nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('admin/users') ?>">Lista</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo URL::site('admin/users/create') ?>">Crear</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ventas<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('home/womenlist') ?>">Ver reportes</a></li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('admin/#') ?>">Lista</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo URL::site('admin/#') ?>">Crear</a></li>
                                            </ul>
                                        </li>                                        
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Items<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('admin/items') ?>">Lista</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo URL::site('admin/items/create') ?>">Crear</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logos <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('admin/logos') ?>">Lista</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo URL::site('admin/logos/create') ?>">Crear</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ropa<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('admin/cloths/index') ?>">Lista</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo URL::site('admin/cloths/create') ?>">Crear</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colores<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo URL::site('admin/colors/index') ?>">Lista</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo URL::site('admin/colors/cloths_colors') ?>">Crear</a></li>                                                
                                                <li class="divider"></li>
                                            </ul>
                                        </li>                                   
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="searchbox">       
                        <div class="input-prepend">
                            <a href="#"<span class="add-on"><i class="icon-search"></i></span></a>
                            <input class="span3" data-provide="typeahead" placeholder="Búsqueda" id="prependedInput" size="16" type="text" data-source='["Busos mujeres", "Busos hombres", "Busos niños", "Camisetas mujeres", "Camisetas hombres", "Camisetas niños", "Busos capucha mujeres", "Busos capucha hombres", "Busos capucha niños", "Mens Suits", "Mens Shoes", "Mens Swim", "Mens Active", "Mens polos", "Kids Shirts", "Kids Jeans", "Kids Dresses", "Kids Shoes", "Kids Swim", "Kids Active", "Kids Polos"]'>
                        </div>	
                    </div>	
                </div>
            </div>
        </div>
        <div class="container" id="main-content">
            <div class="row">
                <?php echo $content ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <b>Sigue a Global en sus redes sociales</b>
                        <ul class="footer">
                            <li>
                                <a href="http://www.facebook.com" title="Facebook">
                                    <?php echo HTML::image('media/images/template/icons/facebook.png', array('witdh' => '30', 'height' => '30', 'alt' => '')) ?>
                                </a>
                                <a href="http://www.twitter.com" title="Twitter">
                                    <?php echo HTML::image('media/images/template/icons/twitter.png', array('witdh' => '30', 'height' => '30', 'alt' => '')) ?>
                                </a>
                                <a href="http://www.pinterest.com" title="Pinterest">
                                    <?php echo HTML::image('media/images/template/icons/pinterest.png', array('witdh' => '30', 'height' => '30', 'alt' => '')) ?>
                                </a>
                                <a href="http://www.flickr.com" title="Flickr">
                                    <?php echo HTML::image('media/images/template/icons/flickr.png', array('witdh' => '30', 'height' => '30', 'alt' => '')) ?>
                                </a>
                                <a href="http://www.google.com" title="Google +">
                                    <?php echo HTML::image('media/images/template/icons/googleplus.png', array('witdh' => '30', 'height' => '30', 'alt' => '')) ?>
                                </a></li>
                        </ul>
                    </div>
                    <div class="span4">
                        <b>Más sobre nosotros</b>
                        <ul class="footer">
                            <li><a href="<?php echo URL::site('home/aboutus') ?>">Sobre Nosotros</a></li>
                            <li><a href="<?php echo URL::site('home/contact') ?>">Contact&eacute;nos</a></li>
                            <li><a href="<?php echo URL::site('home/landing') ?>">Landing Page</a></li>
                            <li><a href="<?php echo URL::site('home/account') ?>">Mi Cuenta</a></li>
                            <li><a href="<?php echo URL::site('home/product') ?>">Nuestros Productos</a></li>
                        </ul>
                    </div>

                    <div class="span4">
                        <b>Promociones</b>
                        <p>Ingrese su correo para recibir promociones y ofertas</p>

                        <form class="wellclear form-inline">
                            <input type="text" class="input-large" placeholder="Correo electr&oacute;nico">

                            <button type="submit" class="btn btn-danger">Registro</button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>

    </body>

</html>

