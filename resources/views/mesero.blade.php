<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurante</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Mesero</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Seleccionar Mesa</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>Realizar pedido</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Menú</a>
            </li>
            <li>
                <a href="#" onclick=$("#menu-close").click();>Ver mas</a>
            </li>
            <li>
               <!-- <a href="#contact" onclick=$("#menu-close").click();>Contact</a> -->
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center" >
            <h1>Restaurante fei </h1>
            <h3>Bienvenido!!!</h3>
            <br>
            <a href="#about" class="btn btn-light btn-lg">Comenzar pedido</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2> <strong> Seleccionar mesa </strong> </h2>
                    <!--p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Mesas</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-coffee fa-5x" aria-hidden="true"></i>
                                <h4>
                                    <strong>Mesa 1</strong>
                                </h4>
                                <p>mesa para 2 personas</p>
                                <a href="#" class="btn btn-light">Seleccionar</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-coffee fa-5x" aria-hidden="true"></i>
                                <h4>
                                    <strong>Mesa 2</strong>
                                </h4>
                                <p>Mesa para 3 personas</p>
                                <a href="#" class="btn btn-light">Seleccionar</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-coffee fa-5x" aria-hidden="true"></i>
                            </span>
                                <h4>
                                    <strong>Mesa 3</strong>
                                </h4>
                                <p>Mesa para 6 personas</p>
                                <a href="#" class="btn btn-light">Seleccionar</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-coffee fa-5x" aria-hidden="true"></i>
                                <h4>
                                    <strong>Mesa 4</strong>
                                </h4>
                                <p>mesa para 4 personas</p>
                                <a href="#" class="btn btn-light">Seleccionar</a>
                            </div>
                            
                        </div>
                       
                    </div>
                    <!-- /.row (nested) -->
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
             <a href="#top" class="btn btn-dark btn-lg">regresar</a>
             <a href="#portfolio" class="btn btn-dark btn-lg">siguiente</a>
        </div>
        <!-- /.container -->
        
    </section>
    
    <!-- Callout 
   <aside class="callout">
        <div class="text-vertical-center">
            <h1>Vertically Centered Text</h1>
        </div>
    </aside>-->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2><strong>Nuestro menu</strong></h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="portfolio-item"><!-- -->
                                <a href="#">
                                    
                                    <img class="img-portfolio img-responsive" src="img/menu1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">Ver mas</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Desea terminar el pedido</h3>
                    <a href="#" class="btn btn-lg btn-light">Cancelar</a>
                    <a href="#" class="btn btn-lg btn-dark">Terminar</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
   

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                           
                        </li>
                    </ul>
                    <hr class="small">
                    <!--<p class="text-muted">Copyright &copy; Your Website 2014</p>-->
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    /*var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }*/
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
