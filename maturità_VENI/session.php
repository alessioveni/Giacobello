<?php
// stabiliamo una connessione con il database
$conn = mysqli_connect("localhost", "root", "", "giacobello_shop_veni");
session_start(); // iniziamo la sessione
// storing della sessione
$user_check = $_SESSION['logged'];

$query = "SELECT username from utente where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
