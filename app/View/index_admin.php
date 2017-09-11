<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Área Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../bootstrap/Bootstrap-Admin-Theme-3-master/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="../bootstrap/Bootstrap-Admin-Theme-3-master/css/styles.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index_admin.php">CRECI Área ADMIN</a></h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">	                
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user'] ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">	                          
                                            <li><a href="../Controller/sair.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="current"><a href="index_admin.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>                    
                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-list"></i> Adesões
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a tabindex="-1" href="#" id="titulares">Titulares</a></li>
                                    <li><a tabindex="-1" href="#" id="analitico">Analitíco</a></li>
                                    <li><a tabindex="-1" href="#" id="geral">Geral</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="content-box-large" id="conteudo_maximo"></div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="copy text-center">
                    Copyright <?php echo date("Y") ?> <a href='#'>CRECI-RS</a>
                </div>
            </div>
        </footer>        
        <script src="https://code.jquery.com/jquery.js"></script>        
        <script src="../bootstrap/Bootstrap-Admin-Theme-3-master/bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/Bootstrap-Admin-Theme-3-master/js/custom.js"></script>
        <script src="../js/menu.js"></script>
    </body>
</html>