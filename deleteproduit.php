<?php

include 'connect.php';

$code = $_GET['code_produit'];
$deletesql = " DELETE FROM `produit` WHERE code_produit = $code ";
$res = mysqli_query($my_conn, $deletesql);
if($res) {
    header("location: liste-produits.php");    
} else{
    $msg ="Suppression impossible ";
}
    
   

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <title>Myfit4Life</title>
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo"><span class="logo2">Myfit4</span>Life</a>
        <div id="menu-btn" class="fas fa-bars"></div>
        <div class="fa-times"></div>
        <nav class="navbar">
        <a href="home.php" >Home</a>
            <a href="supprimerclt.php">Client</a>
            <a href="gerer_entraineur.php" >Entraineur</a>
            <a href="ajout-sport.php" >Sport</a>
           
            <a href="abonnement.php" >Abonnements</a>
            <a href="liste-produits.php" ><i class="fa-solid fa-store"></i></a>
            <a href="logiiin.php" class="deconecter"><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>
   



</body>
</html>