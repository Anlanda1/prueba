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
                <a href="#top" onclick=$("#menu-close").click();>Opciones</a>
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
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
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
                    <tr>
                        <th>
                            # pedido
                        </th>
                        <th>
                            Producto
                        </th>
                        <th>
                            Mesa
                        </th>
                        <th>
                            Mesero
                        </th>
                        <th>
                            Estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="danger">
                        <td>
                            1
                        </td>
                        <td>
                            Alitas mango/habanero
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            Fiora
                        </td>
                        <td>
                            En proceso
                        </td>
                    </tr>
                    <tr class="default">
                        <td>
                            2
                        </td>
                        <td>
                            Aros de cebolla
                        </td>
                        <td>
                            6
                        </td>
                        <td>
                            Ezreal
                        </td>
                        <td>
                            En espera
                        </td>
                    </tr>
                    <tr class="default">
                        <td>
                            3
                        </td>
                        <td>
                            Papas a la francesa
                        </td>
                        <td>
                            6
                        </td>
                        <td>
                            Ezreal
                        </td>
                        <td>
                            En espera
                        </td>
                    </tr>
                    <tr class="default">
                        <td>
                            4
                        </td>
                        <td>
                            Dedos de queso
                        </td>
                        <td>
                            6
                        </td>
                        <td>
                            Ezreal
                        </td>
                        <td>
                            En espera
                        </td>
                    </tr>
                    <tr class="default">
                        <td>
                            5
                        </td>
                        <td>
                            Alitas BBQ
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            gnar
                        </td>
                        <td>
                            En espera
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-lg btn-success">Sacar Pedidos    <span class="glyphicon glyphicon-ok"></span></a>
        </div>
    </div>
    </div>

    <div id="almacen" class="container-fluid">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                        <h1>Almacén</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>
                            Producto
                        </th>
                        <th>
                            Cantidad
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>
                            Alitas
                        </td>
                        <td>
                            100 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Cebolla
                        </td>
                        <td>
                            10 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Habaneros
                        </td>
                        <td>
                            100 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Apio
                        </td>
                        <td>
                            6 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Queso manchego
                        </td>
                        <td>
                            16 Kg
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-lg btn-warning">Actualizar almacén       <span class="glyphicon glyphicon-refresh"></span></a>
        </div>
    </div>
    </div>

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
