<?php
include('session.php');
if (!isset($_SESSION['logged'])) {
    header("location: index.php"); // torna alla Homepage
}
?>


<!DOCTYPE html>
<html lang="IT">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Giacobello & Photos">
    <meta name="author" content="Alessio Veni">

    <title>Galleria</title>

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
            <a class="navbar-brand" href="#">Inserimento foto</a>
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
                        <h4 class="card-title">Inserimento foto</h4>
                    </div>
                    <div class="card-footer text-center">
                        <!DOCTYPE html>
                        <html>

                        <head>
                            <title>Inserisci una <u>tua</u> foto!</title>
                            <!-- GALLERIA -->
                            <br>

                            <!doctype html>
                            <html>

                            <head>
                                <!-- Bootstrap core CSS -->
                                <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                                <!-- Custom styles for this template -->
                                <link href="css/heroic-features.css" rel="stylesheet">
                                <link rel="stylesheet" type="text/css" href="styles.css?version=51">
                            </head>

                        <body>
                            <div id="content">

                                <form method="POST" action="" enctype="multipart/form-data">
                                    <input type="file" name="uploadfile" value="" required /><br>
                                    <br><label for="anno"><b>Anno dello scatto:</b></label>
                                    <input class="form-control" type="date" id="anno" name="anno" required><br><br>
                                    <label for="descrizione"><b>Descrizione (facoltativa)</b></label>
                                    <input class="form-control" type="text" id="descrizione" name="descrizione"><br><br>
                                    <label for="tipologia"><b>Tipologia dispositivo:</b></label>
                                    <!--<input class="form-control" type="text" id="tipologia" name="tipologia" required><br><br>-->
                                    <input class="form-control" type="radio" id="Reflex_Mirrorless" name="tipologia" value="Reflex/Mirrorless" required>
                                    <label for="Reflex_Mirrorless">Reflex & Mirrorless</label><br>
                                    <input class="form-control" type="radio" id="telefono" name="tipologia" value="Telefono">
                                    <label for="telefono">Telefono</label><br>
                                    <input class="form-control" type="radio" id="altro" name="tipologia" value="Altro">
                                    <label for="altro">Altro</label>
                                    <br><label for="certifica">
                                        <h4>Prendo visione di avere i diritti d'autore per questa foto:</h4>
                                    </label>
                                    <input class="form-control" type="checkbox" id="certifica" name="certifica" required><br><br>

                                    <div><br>
                                        <button type="submit" name="upload">
                                            CARICA
                                        </button>
                                        <br>
                                    </div>
                                </form>
                            </div>
                            <?php
                            error_reporting(0);
                            ?>
                            <?php
                            session_start();
                            include('login.php');
                            if (isset($_SESSION['logged'])) {
                                header("location: index.php"); // reindirizzamento alla pagina
                            }
                            $msg = "";

                            // If upload button is clicked ...
                            if (isset($_POST['upload'])) {
                                $tipologia = $_POST["tipologia"];
                                $anno = $_POST["anno"];
                                $descrizione = $_POST["descrizione"];
                                $autore = $_SESSION['logged'];
                                $filename = $_FILES["uploadfile"]["name"];
                                $tempname = $_FILES["uploadfile"]["tmp_name"];
                                $folder = "gallery/" . $filename;

                                $db = mysqli_connect("localhost", "root", "", "giacobello_shop_veni");

                                // Get all the submitted data from the form
                                $sql = "INSERT INTO immagine (filename, tipologia, anno, autore, descrizione) VALUES ('$filename','$tipologia','$anno','$autore','$descrizione')";

                                // Execute query
                                mysqli_query($db, $sql);

                                // Now let's move the uploaded image into the folder: image
                                if (move_uploaded_file($tempname, $folder)) {
                                    $msg = "Immagine importata con successo!";
                                } else {
                                    $msg = "Caricamento immagine fallito";
                                }
                            }
                            $result = mysqli_query($db, "SELECT * FROM immagine");
                            ?>
                            <br>
                        </body>

                        </html>




                        <!-- FINE GALLERIA -->
                        </head>


</html>
</div>
<div class="card-footer">
    <a href="index.php" class="btn btn-primary">Torna alla Home</a>
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