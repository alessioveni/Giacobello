<!DOCTYPE html>
<html lang="IT">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Giacobello & Photos">
    <meta name="author" content="Alessio Veni">

    <title>Chi Siamo</title>

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
            <a class="navbar-brand" href="#">Chi Siamo</a>
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
                        <h4 class="card-title">Chi Siamo</h4>
                    </div>
                    <div class="card-footer text-center">
                        <!DOCTYPE html>
                        <html>

                        <head>
                            <title>Informazioni</title>
                        </head>

                        <body>
                            <p class="lead" style="text-align:center"><b>Giacobello & Photos è un pioniere nel settore foto del Veneto</b><br> <b>Scoprici nel nostro punto vendita:</b><br><u> Campo Santa Maria Formosa, 5248a
                                    30122 Venezia VE</u></p>
                        </body>

                        </html>
                    </div>
                    <div class="card-footer text-center">
                        <!DOCTYPE html>
                        <html>

                        <head>
                            <title>Mappa</title>
                        </head>

                        <body>
                            <?php
                            $address = '5248a Campo Santa Maria Formosa, Venezia, VE';

                            echo '<iframe frameborder="10" width="800" height="500" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
                            ?>
                        </body>

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