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
<body >
    <header class="header">
        <a href="home.php" class="logo"><span class="logo2">Myfit4</span>Life</a>
        <div id="menu-btn" class="fas fa-bars"></div>
        <div class="fa-times"></div>
        <nav class="navbar">
            
            <a href="logiiin.php" class="deconecter"><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
     </header>
    <section >
        <div class="produit">
            <h1 class="log1">Myfit<span class="log2">4Life</span> Store :</h1>
            <div class="box-contain">
                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/protein1.png" class="big" >
                        </div>
                        <div class="sub-img">
                            <img src="images/protin1.jpg"  class="active">
                            <img src="images/protin2.jpg" class="small">
                            <img src="images/protin3.jpg" class="small">
                        </div>
                        <div class="content-container">
                            <strong>700 DH </strong>
                            <h2>Protein </h2>
                            <p> complemennts contient 65% ISO PROTEIN</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="image-container">
                    <div class="main-img">
                            <img src="images/creatine.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/creatine1.jpg" class="active">
                            <img src="images/creatine2.jpg">
                            <img src="images/creatine3.jpg">
                        </div>
                        <div class="content-container">
                            <strong>300 DH </strong>
                            <h2>Creatine </h2>
                            <p>Des complemennts pour enrichir votre muscles</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/c4.jpg">
                        </div>
                        <div class="sub-img">
                            <img src="images/c4-1.jpg" class="active">
                            <img src="images/c4-2.jpg">
                            <img src="images/c4.jpg">
                        </div>
                        <div class="content-container">
                            <strong>400 DH </strong>
                            <h2>C4 </h2>
                            <p>Des complemennts pour gagner de la masse</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                    <div class="main-img">
                            <img src="images/megamassof.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/megamass1.png" class="active">
                            <img src="images/megamass2.png">
                            <img src="images/megamaa.png">
                        </div>
                        <div class="content-container">
                            <strong>500 DH </strong>
                            <h2>MegaMasse </h2>
                            <p> complemennts pour gagner de la masse</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/caseine.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/caseine1.png" class="active">
                            <img src="images/caseine2.png">
                            <img src="images/caseine3.png">
                        </div>
                        <div class="content-container">
                            <strong>900 DH </strong>
                            <h2>Caseine </h2>
                            <p>complemennts Riche en proteine BIO</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                <div class="image-container">
                        <div class="main-img">
                            <img src="images/aminoof.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/amino.png" class="active">
                            <img src="images/amino2.png">
                            <img src="images/amino1.png">
                        </div>
                        <div class="content-container">
                            <strong>200 DH </strong>
                            <h2>Amino </h2>
                            <p>complemennts pour avoir l'energie</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="deal">
        
        <div class="ligne">
            <div class="contenue">
                <span class="discount">SOLDE JUSQU'A  <span class="prct">50%</span></span>
                <h3 class="deal-text">Visitez Myfit4Life et Profitez manitenant</h3>
                <div class="count-down">
                    <div class="deal-box">
                        <h3 id="days">00 :</h3>
                        <span class="tmps">Jours</span>
                    </div>

                    <div class="deal-box">
                        <h3 id="hours">00 :</h3>
                        <span class="tmps">heures</span>
                    </div>

                    <div class="deal-box">
                        <h3 id="minutes">00 :</h3>
                        <span class="tmps">Minutes</span>
                    </div>

                    <div class="deal-box">
                        <h3 id="seconds">00</h3>
                        <span class="tmps">Secondes</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="produit">
            <div class="box-contain">
                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/materiel.png" class="big" >
                        </div>
                        <div class="sub-img">
                            <img src="images/materiel1.png"  class="active">
                            <img src="images/materiel.png" class="small">
                            <img src="images/materiel.png" class="small">
                        </div>
                        <div class="content-container">
                            <strong>3700 DH </strong>
                            <h2>Machine </h2>
                            <p> Machine multi-fonctionne</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="image-container">
                    <div class="main-img">
                            <img src="images/tapis-roulant.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/tapis1.png" class="active">
                            <img src="images/tapis-roulant.png">
                            <img src="images/tapis2.png">
                        </div>
                        <div class="content-container">
                            <strong>12000 DH </strong>
                            <h2>Tapis Roulant </h2>
                            <p>Practicer le sport a votre maison</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/gants.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/gants1.png" class="active">
                            <img src="images/gants2.png">
                            <img src="images/gants3.png">
                        </div>
                        <div class="content-container">
                            <strong>300 DH </strong>
                            <h2>Des gants de Box </h2>
                            <p>Les gants de Box ,meilleure qualite pour l securite</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                    <div class="main-img">
                            <img src="images/vetementsOF-removebg-preview (1).png">
                        </div>
                        <div class="sub-img">
                            <img src="images/vetemnts3-removebg-preview.png" class="active">
                            <img src="images/vetements.png">
                            <img src="images/vetements_2-removebg-preview.png">
                        </div>
                        <div class="content-container">
                            <strong>100 DH - 1000 DH </strong>
                            <h2>Vetements Sportifs </h2>
                            <p> Des meilleures qualites de vetements</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/barre-removebg-preview.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/barre1-removebg-preview.png" class="active">
                            <img src="images/barre2-removebg-preview.png">
                            <img src="images/barre3-removebg-preview.png">
                        </div>
                        <div class="content-container">
                            <strong>1100 DH </strong>
                            <h2>Barre et Disques de Sport </h2>
                            <p>Des Barres et disques, s'entrainer a votre maison</p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="image-container">
                        <div class="main-img">
                            <img src="images/barre-entrainement-removebg-preview.png">
                        </div>
                        <div class="sub-img">
                            <img src="images/barredentr1-removebg-preview.png" class="active">
                            <img src="images/barredent2-removebg-preview.png">
                            <img src="images/barreden3-removebg-preview.png">
                        </div>
                        <div class="content-container">
                            <strong>170 DH </strong>
                            <h2>Barre fixe </h2>
                            <p>Pour practicer du sport </p>
                            <button type="button" name="button" >Acheter Maintenant</button>
                        </div>
                    </div>
                </div>

            </div>
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