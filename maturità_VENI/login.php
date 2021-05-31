<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

session_start();
$error = ''; // variabile d'errore
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Valori non validi!";
    } else {
        // Definiamo $username e $password
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$password_hash = password_hash($password, PASSWORD_BCRYPT);
        //echo "$password_hash";
        // stabiliamo una connessione con il database
        $conn = mysqli_connect("localhost", "root", "", "giacobello_shop_veni");
        // query
        $query = "SELECT username, password from utente where username=? AND password=? LIMIT 1";
        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, md5($password));
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if ($stmt->fetch()) {
            //if($password == $password_hash){
            //if (password_verify($password, $hash)) {
                // Success!
                $_SESSION['logged'] = $username; // inizializzazione sessione
                header("location: index.php"); // reindirizzamento alla pagina
            //}
            //} else {
                // Invalid credentials
            }
                
        
        mysqli_close($conn); // chiudiamo la connessione
    }

}