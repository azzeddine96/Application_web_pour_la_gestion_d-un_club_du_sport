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
    <section class="principal" id="principal">
        <div class="swiper home-sliden">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                    <div class="content">

                        <span>Soit Fort, Soit Fit</span>
                        <h3>Soit Fort de t'excuses</h3>
                        <a href="#btn" class="btn">Soit pret</a>

                    </div>
                </div>

                <div class="swiper-slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                    <div class="content">

                        <span>Soit Fort, Soit Fit</span>
                        <h3>Soit Fort de t'excuses</h3>
                        <a href="#btn" class="btn">Soit pret</a>

                    </div>
                </div>

                <div class="swiper-slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                    <div class="content">

                        <span>Soit Fort, Soit Fit</span>
                        <h3>Soit Fort de t'excuses</h3>
                        <a href="#btn" class="btn">Soit pret</a>

                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>


    </section>
    
    <!--about partie-->
    <section class="abouts" id="abouts">
        <div class="imageabout">
            <img src="images/about-img.jpg" alt="image">
        </div>
        <div class="contentabout">
            <span>Nos avantages</span>
            <h3 class="titleabout">Chaque jours est une chance de developpement </h3>
            <p>Rejoignez-nous est commencer notre programmes des maintenant. avec Myfit4Life vous pouver realiser votre reves , commencer maintenant</p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>corps & esprit</h3>
                    <p>vous pouvez entrainer votre corps et liberer votre esprit</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Sante</h3>
                    <p>nous presentons un programme complet pour une meilleure sante de votre corps </p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Strategies</h3>
                    <p>nous sommes le numero un dans les Strategies pour avaoir des meilleurs resultats </p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Workout programme</h3>
                    <p>avec notre professionels Entraineur vous pouvez voyez le resultat dans 60 jours</p>
                </div>
            </div>
            <a href="#btn" class="btn">plus d'infos</a>
        </div>
    </section>
    <section class="features" id="features">

        <h1 class="heading">Dans MyFit4Life</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/f-img-1.jpg" alt="image">

                </div>
                <div class="content">
                    <img src="images/icon-1.png" alt="icon">
                    <h3>fitnesse</h3>
                    
                    <a href="programme.php" class="plusinfo">Plus d'info</a>
                </div>
            </div>

            <div class="box ">
               
                <div class="content">
                    <img src="images/icon-2.png" alt="icon">
                    <h3>Musculation</h3>
                    
                    <a href="programme.php" class="plusinfo">Plus d'info</a>
                </div>
                <div class="image">
                    <img src="images/f-img-2.jpg" alt="image">

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/f-img-3.jpg" alt="image">

                </div>
                <div class="content">
                    <img src="images/icon-3.png" alt="icon">
                    <h3>Aerobic</h3>
                    
                    <a href="programme.php" class="plusinfo">Plus d'info</a>
                </div>
            </div>
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