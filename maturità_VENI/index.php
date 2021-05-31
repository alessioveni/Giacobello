<!DOCTYPE html>
<!-- rendilo responsive
https://www.youtube.com/watch?v=9csJMDGgZ6Q
studia ajax
 -->
<html lang="IT">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Giacobello & Photos">
    <meta name="author" content="Alessio Veni">

    <title>Foto Site</title>
    <link rel="stylesheet" type="text/css" href="styles.css?version=51">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Giacobello</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formLogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chiSiamo.php">Chi Siamo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4 text-center">
            <h1 class="display-3" style="text-align:center">Giacobello & Photos</h1>
            <p class="lead" style="text-align:center">Le tue foto sempre a portata di mano!<br> Unisciti al gruppo</p>
            <a href="Registrati.php" class="btn btn-primary btn-lg btn-warning">Iscriviti e condividi i tuoi scatti!</a>

            <a href="formLogin.php" class="btn btn-primary btn-lg btn-warning">Login</a>

        </header>

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/sing.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <p class="card-text">Clicca il pulsante per poter accedere così da poter usufruire del nostro servizio.</p>
                    </div>
                    <div class="card-footer">
                        <a href="formLogin.php" class="btn btn-primary">⚫</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/auto-con.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Galleria</h4>
                        <p class="card-text">Clicca il pulsante per visualizzare gli scatti dei nostri iscritti.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Gallery.php" class="btn btn-primary">⚫</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/agenzia-viaggi.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Recensioni</h4>
                        <p class="card-text">Clicca il pulsante per sapere cosa dicono di noi.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Recensioni.php" class="btn btn-primary">⚫</a>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->

    </div>
    <br><br><br><br><br>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <?php /*
            include('login.php');
            if (isset($_SESSION['logged'])) {
                echo "<b class='center' id='logout'><a href='logout.php' class='btn btn-primary'>Log Out</a></b>";
            }*/
            ?>
            <b class='center' id='logout'><a href='logout.php' class='btn btn-primary'>Log Out</a></b>
            <p class="m-0 text-center text-white">Copyright &copy; Veni Alessio - C. Zuccante - Maturità 2021</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>