<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>CORANDES</title>
    <link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css?<?php echo rand(); ?>" rel="stylesheet">
	<link href="css/bootstrap.css?<?php echo rand(); ?>" rel="stylesheet">
	<link href="css/slide.css?<?php echo rand(); ?>" rel="stylesheet">
    <link href="css/style.css?<?php echo rand(); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo18px.png" type="image/x-icon">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css?<?php echo rand(); ?>" rel="stylesheet">
	
</head>

<body>

    <div class="container-fluid mt-2">
        <div class="row">
    <!-- Navigation -->
            <div class="col-6 col-sm-2 ml-9">
                <a class="navbar-brand text-black" href="index.php">
                    <img src="images/logo2.png" class="imagen-logo2">
                </a>
            </div>

            <div class="col-11 col-sm-11  mt-3">
                
                    <nav class="navbar ml-10">
                    <!-- NAVIGATION MENU -->
                    <ul class="nav-links cel-navbar">
                    <!-- USING CHECKBOX HACK -->
                    <input type="checkbox" id="checkbox_toggle" />
                    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                    <!-- NAVIGATION MENUS -->
                        <div class="menu">
                            <li class="non-list"><a class="no-deco" href="quienes_somos.php">Quiénes Somos</a></li>
                            <li class="non-list"><a class="no-deco" href="que_hacemos.php">Qué hacemos</a></li>
                            <li class="services non-list">
                            <a class="no-deco" href="documentos_interes.php">Reportes ESAL <span class="caret"></span></a>
                            <!-- DROPDOWN MENU -->
                            <ul class="dropdown">
                                <li class="non-list"><a class="no-deco" href="documentos_interes.php#2019"> 2019 </a></li>
                                <li class="non-list"><a class="no-deco" href="documentos_interes.php#2020"> 2020 </a></li>
                                <li class="non-list"><a class="no-deco" href="documentos_interes.php#2022"> 2022</a></li>
                            </ul>
                            </li>
                            <li class="non-list"><a class="no-deco" href="proyectos_alianzas.php">Proyectos y alianzas</a></li>
                            <li class="non-list"><a class="no-deco" href="index.php#trabaja_con_nosotros">Trabaja con Corandes</a></li>
                        </div>
                        </ul>
                    </nav>
                



            </div>
        </div>
    </div>
</body>