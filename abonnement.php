<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <link rel="stylesheet" href="projet.scss" >
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
           
            <a href="abonnement.php" >A propos</a>
            <a href="liste-produits.php" ><i class="fa-solid fa-store"></i></a>
            <a href="logiiin.php" class="deconecter"><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>   
    <section class="pricing" id="pricing">

        <div class="information">
            <h1>Abonnements</h1>
            <h3>Meilleurs Abonnements pour vous profitez maintenant</h3>
            <p> <i class="fas fa-check"></i> exercices de cardio </p>
            <p> <i class="fas fa-check"></i> wight lifting </p>
            <p> <i class="fas fa-check"></i> plan de regime </p>
            <p> <i class="fas fa-check"></i> poursivie les resultats </p>
           
        </div>
        <div class="plan">

            <h3>Plan Classique</h3>
            <div class="price"><span>$</span>100<span>/mois</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> Entrainement personel </p>
                <p> <i class="fas fa-check"></i> exercices de cardio </p>
                <p> <i class="fas fa-check"></i> plan de regime </p>
                <p> <i class="fas fa-check"></i> poursuivre les resultats </p>
                <p> <i class="fas fa-check"></i> wight lifting </p>
                
            </div>
            <a href="#" class="btn">plus d'infos</a>
        </div>
        <div class="plan">

            <h3>Plan Premuim</h3>
            <div class="price"><span>$</span>300<span>/mois</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> Entrainement personel </p>
                <p> <i class="fas fa-check"></i> exercices de cardio </p>
                <p> <i class="fas fa-check"></i> plan de regime </p>
                <p> <i class="fas fa-check"></i> poursuivre les resultats </p>
                <p> <i class="fas fa-check"></i> wight lifting </p>
                <p> <i class="fas fa-check"></i> Preparation au competiton </p>
                <p> <i class="fas fa-check"></i> formation de coaching </p>
            </div>
            <a href="#" class="btn">plus d'infos</a>
        </div>

    </section>
    <section class="banner">
        <div class="contbanner">
            <span>Joignez MyFit4Life Maintenent</span>
            <h3>Profitez d'un solde de 50% </h3>
            <p>nous vous offrons une meielleure chance de rejoigner notre clube profitez maintenant</p>
            <a href="#" class="btn">plus d'info</a>
        </div>
        
    </section>
    <section class="footer">
        <div class="boxfooter">
            <div class="box">
                <h3>JOURS de travail</h3>
                <p> Lundi    : <i> de 09:00 jusqu'a 21:00 </i> </p>
                <p> Mardi    : <i> de 09:00 jusqu'a 21:00 </i> </p>
                <p> Mercredi : <i> de 09:00 jusqu'a 21:00 </i> </p>
                <p> Jeudi    : <i> de 09:00 jusqu'a 21:00 </i> </p>
                <p> Vendredi : <i> de 09:00 jusqu'a 21:00 </i> </p>
                <p> Samedi   : <i> de 09:00 jusqu'a 21:00 </i> </p>
                <p> Dimanche : <i> de 07:00 jusqu'a 12:00 </i> </p>
            </div>

            <div class="box">
                <h3>Nos Informations</h3>
                <p>  <i class="fas fa-phone"> 0523452021 </i> </p>
                <p>  <i class="fas fa-phone"> 0520451313 </i> </p>
                <p>  <i class="fas fa-envelope"> azzeddinefejri@gmail.com </i> </p>
                <p>  <i class="fas fa-map"> 2300, Beni Mellal, Maroc </i> </p>
                <div class="share">
                    <a href="#"  class="fab fa-facebook" ></a>
                    <a href="#"  class="fab fa-whatsapp" ></a>
                    <a href="#"  class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="projet.js"></script> 
</body>
</html> 