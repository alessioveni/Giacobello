<?php
include('login.php');
if (!isset($_SESSION['logged'])) {
    header("location: index.php"); // reindirizzamento alla pagina
}
?>
<!DOCTYPE html>
<html lang="IT">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Giacobello & Photos">
    <meta name="author" content="Alessio Veni">

    <title>Recensioni</title>

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
            <a class="navbar-brand" href="#">Recensioni</a>
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
                        <h4 class="card-title">Recensioni</h4>
                    </div>
                    <div class="card-footer text-center">
                        <h2>Lista dei nostri feedback</h2>
                        <?php
                        //connessione
                        $conn = new mysqli('localhost', 'root', '', 'giacobello_shop_veni');
                        if ($conn->connect_error) {
                            die('Errore di connessione' . $conn->connect_errno);
                        } else {
                            echo '';
                        }
                        echo "<br><br>";

                        //elaborazione sql

                        $sql = "SELECT codR ,descrizione FROM recensione";



                        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

                        //elaborazione table
                        echo "<table>";
                        $once = 0;
                        $entrata = '';
                        while ($record = $result->fetch_assoc()) {
                            $entrata = $record;
                            if ($once == 0 && $entrata != '') {
                                echo "<tr>
                <td>n° recensione</td>
                <td>Descrizione</td>
      </tr>";
                                $once = 1;
                            }
                            echo "<tr>
                <td>" . $record['codR'] . "</td>
                <td>" . $record['descrizione'] . "</td>
    </tr>";
                        }
                        $once = 0;
                        echo "</table>";
                        $conn->close();
                        echo "<br><br>";


                        ?>
                    </div>
                    <div class="card-footer text-center">

                        <html>

                        <head>
                            <title>Recensioni & Giudizi</title>
                        </head>

                        <body>
                            <div id="login">
                                <h2>Lasciaci un tuo feedback!</h2>
                                <form action="Recensioni.php" method="POST">
                                    <label>Descrizione :</label>
                                    <input class="form-control" id="descrizione" name="descrizione" placeholder="esplicita la tua recensione" type="text"><br><br><br>
                                    <input name="submit" class="btn btn-primary" type="submit" value=" Invio ">

                                    <?php
                                    ini_set('display_errors', 'Off');
                                    ini_set('error_reporting', E_ALL);
                                    define('WP_DEBUG', false);
                                    define('WP_DEBUG_DISPLAY', false);

                                
                                    $descrizione = $_POST["descrizione"];
                                    if (isset($_POST['submit']) && $descrizione != '') {
                                        /////////////////////////////////////////////////inserimento dati nuova recensione
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
                                        $sql = "INSERT INTO recensione VALUES ('codR','$descrizione')";


                                        if (!isset($_COOKIE['tempo'])) {
                                            if ($conn->query($sql) === TRUE) {
                                                echo "<h5>Recensione registrata correttamente!!</h5>";
                                                header("location: Recensioni.php");
                                            } else {
                                                //echo "Error: " . $sql . "<br>" . $conn->error;
                                            }
                                        }

                                        $descrizione = null;
                                        $conn->close();
                                        echo "<br><br>";
                                    }

                                    ?>
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
        </div>

    </div>
    </div>


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