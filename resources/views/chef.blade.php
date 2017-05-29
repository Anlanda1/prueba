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

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Chef {{ Auth::user()->name }}</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Inicio</a>
            </li>
            <li>
                <a href="#pedidos" onclick=$("#menu-close").click();>Pedidos</a>
            </li>
            <li>
                <a href="#almacen" onclick=$("#menu-close").click();>Almacén</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                    </form>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="headerchef">
        <div class="text-vertical-center">
            <h1>Bienvenido chef</h1>
        </div>
    </header>

    <div id="pedidos" class="container-fluid">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>Pedidos</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr class="danger">
                        <th>Número de pedido</th>
                        <th>Estado</th>
                        <th>Mesa</th>
                        <th>Mesero</th>
                        <th>ID producto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->estado }}</td>
                        <td>{{ $pedido->mesa_id }}</td>
                        <td>{{ $pedido->empleado_id }}</td>
                        <td>{{ $pedido->producto_id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Botón productos -->
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <a href="{{ url('tablamenu') }}" class="btn btn-success">Menús</span></a>
        </div>
    </div>

    <!-- Tabla de almacen -->
    <section id="almacen" class="portfolio">
        <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="text-center">
                    <h2>Almacén</h2>
                </div>
                <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr class="danger">
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->precio }}</td>
                        <!--<td>
                            <form action="{{ route('almacen.edit', $producto->id) }}" method="GET">
                                {{ csrf_field() }}
                                <button class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('almacen.destroy', $producto->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>-->
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--{!! $productos->render() !!}
                <a href="{{ route('almacen.create') }}" class="btn btn-success">Nuevo producto   <span class="glyphicon glyphicon-pencil"></span></a>-->
        </div>
        </div>
    </section>

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
    </script>

</body>

</html>
