<!DOCTYPE html>
<html>
    <head>
        <title>CRECIRS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="../bootstrap/Bootstrap-Admin-Theme-3-master/css/styles.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-bg">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="#">Área Administrativa CRECI RS</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-wrapper">
                        <div class="box">
                            <div class="content-wrap">
                                <h6>Informe</h6>
                                <form role="form" action="../Controller/login.php" method="POST">
                                    <input class="form-control" type="text" name="user" id="user" placeholder="Usuário">
                                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Senha">
                                    <div class="action">                                    
                                        <button type="submit" class="btn btn-primary signup">LOGIN</button>
                                    </div>                
                                </form>
                            </div>
                        </div>			        
                    </div>
                </div>
            </div>
        </div>    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/Bootstrap-Admin-Theme-3-master/bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/Bootstrap-Admin-Theme-3-master/js/custom.js"></script>
    </body>
</html>