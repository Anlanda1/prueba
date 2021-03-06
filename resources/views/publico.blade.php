<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alitas FEI</title>

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
                <a href="#top" onclick=$("#menu-close").click();>Opciones</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Inicio</a>
            </li>
            <li>
                <a href="#menu" onclick=$("#menu-close").click();>Menú</a>
            </li>
            <li>
                <a href="#promos" onclick=$("#menu-close").click();>Promociones</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contacto</a>
            </li>
            <li>
                <a href="{{ url('/login') }}" onclick="event.preventDefault();
                        document.getElementById('login-form').submit();">Iniciar sesión</a>
                    <form id="login-form" action="{{ route('login') }}" method="GET" style="display: none;">{{ csrf_field() }}
                    </form>
            </li>
            <li>
                <a href="{{ route('register') }}" onclick=$("#menu-close").click();>Registrar</a>
            </li>
        </ul>
    </nav>
    
    <!-- Header -->
    <header id="top" class="headerpub">
        <div class="text-vertical-center">
            <h1>Bienvenido</h1>
            <h3>Alitas FEI - Donde tus antojos son cumplidos</h3>
            <br>
            <a href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Gerente</a>
            <a href="{{ route('mesero.index') }}" class="btn btn-dark btn-lg">Mesero</a>
            <a href="{{ route('chef.index') }}" class="btn btn-dark btn-lg">Chef</a>
            <a href="{{ route('recepcionista.index') }}" class="btn btn-dark btn-lg">Recepcionista</a>
            <a href="{{ route('cajero.index') }}" class="btn btn-dark btn-lg">Cajero</a>
        </div>
    </header>

    <!-- Tabla menu -->
    <div id="menu" class="container-fluid">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>Menú</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr class="danger">
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($platillos as $platillo)
                    <tr>
                        <td>{{ $platillo->nombre }}</td>
                        <td>{{ $platillo->descripcion }}</td>
                        <td>{{ $platillo->tipo }}</td>
                        <td>{{ $platillo->precio }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $platillos->render() !!}
        </div>
    </div>
    </div>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>No dejes para mañana </h1>
            <h1> lo que puedes comer hoy</h1>
        </div>
    </aside>

    <!-- Promos -->
    <section id="promos" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nuestras promociones</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>Promo 1</strong>
                                </h4>
                                <p>Paquete armalo tú mismo.</p>
                                <a href="#" class="btn btn-light">No disponible</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Promo 2</strong>
                                </h4>
                                <p>Paquete te lo armamos.</p>
                                <a href="#" class="btn btn-light">No disponible</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Promo cuates</strong>
                                </h4>
                                <p>Promoción para compartir con tu mejor amigo.</p>
                                <a href="#" class="btn btn-light">No disponible</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Promo pareja</strong>
                                </h4>
                                <p>Trae a tu pareja, dense un beso y ella paga a mitad de precio.</p>
                                <a href="#" class="btn btn-light">No disponible</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Login -->

    <!--
    <!- Call to Action ->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Haremos lo posible por atenderte bien.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>
    -->

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Av. Xalapa, Obrero Campesino, 91020 Xalapa Enríquez, Ver.&amp;aq=0&amp;oq=twitter&amp;sll=19.5525209,-96.92927629999997&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=19.5525209,-96.92927629999997&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Av. Xalapa, Obrero Campesino, 91020 Xalapa Enríquez, Ver.&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2><strong>Cantáctanos</strong></h2>
                    <p>Av. Xalapa, Obrero Campesino,
                        <br>Xalapa Enríquez, Ver. CP 91020</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (01 228) 842 1700</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">restarurante@fei.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Restarurante FEI 2017</p>
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
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
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
