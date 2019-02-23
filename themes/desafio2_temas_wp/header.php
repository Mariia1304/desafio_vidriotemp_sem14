

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <title><?php bloginfo('name')?></title>
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet"/>
        <?php wp_head();?>
    </head>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <body>
        <div class="gtco-loader">
        </div>
        <div id="page">
            <nav class="gtco-nav" role="navigation">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <div id="gtco-logo">
                                <a href="http://localhost:8080">
                                    <img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/vidrotemp-logo.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li >
                                    <a href="http://localhost:8080/">
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8080/about/">
                                        Nosotros
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8080/services/">
                                        Servicios
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8080/portfolio/">
                                        Portafolio
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8080/contact/">
                                        Contacto
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
   