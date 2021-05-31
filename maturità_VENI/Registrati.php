<?php
/*
include('login.php');
if (isset($_SESSION['logged'])) {
    header("location: index.php"); // reindirizzamento alla pagina
}
*/
?>
<!DOCTYPE html>
<html lang="IT">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Giacobello & Photos">
    <meta name="author" content="Alessio Veni">

    <title>Registrati</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css?version=51">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Registrati.php">Registrati</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formLogin.php">Login</a>
                        <span class="sr-only">(current)</span>
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
            <p class="lead" style="text-align:center">Le tue foto sempre a portata di mano!<br> Unisciti gruppo</p>
        </header>

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-12 col-md-6 mb-4">
                <div class="card h-100 text-center">

                    <div class="card-body">
                        <h4 class="card-title">Registrati</h4>
                    </div>
                    <div class="card-footer text-center">

                        <html>

                        <head>
                            <title>Registrazione</title>
                        </head>

                        <body>
                            <div id="login">
                                <h2>Registrazione</h2>
                                <form action="Registrati.php" method="POST">
                                    <label>Username :</label>
                                    <input class="form-control" id="name" name="username" placeholder="Username" type="text">
                                    <label>Password :</label>
                                    <input class="form-control" id="password" name="password" placeholder="******" type="password"><br><br>
                                    <input name="submit" class="btn btn-primary" type="submit" value=" Registrati ">
                                </form>
                            </div>
                        </body>

                        </html>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-primary">Torna alla Home</a>
                    </div>
                </div>
            </div>

            <?php

            /////////////////////////////////////////////////inserimento dati nuovo utente
            ini_set('display_errors', 'Off');
            ini_set('error_reporting', E_ALL);
            define('WP_DEBUG', false);
            define('WP_DEBUG_DISPLAY', false);

            $username = $_POST["username"];
            $password = md5($_POST["password"]);
            
            //$password_hash = password_hash($password, PASSWORD_BCRYPT);
            //connessione
            echo "<br><br>";
            $conn = new mysqli('localhost', 'root', '', 'giacobello_shop_veni');
            if ($conn->connect_error) {
                die('Errore di connessione' . $conn->connect_errno);
            } else {
                echo '';
            }
            echo "<br><br>";

            //elaborazione sql

            $sql = "INSERT INTO  utente VALUES ('$username', '$password')";


            if (isset($_POST['submit'])) {
                if ($conn->query($sql) === TRUE) {
                    //echo "<h4>Registrazione effettuata correttamente!</h4>";
                    header("location: formLogin.php");
                } else {
                    //echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            $conn->close();
            echo "<br><br>";


            ?>



            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Veni Alessio - C.Zuccante - Maturità 2021</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>