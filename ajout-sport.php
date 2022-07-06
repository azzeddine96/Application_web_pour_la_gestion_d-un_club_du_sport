<?php

    include 'connect.php';

    
        if(isset($_POST['submit'])){


            if(empty($_POST['sport'])){
                $errcode ="veuillez choisir le sport du client";
            }elseif(empty($_POST['entraineur'])){
                $errnom ="veuillez remplir l'entraineur du client" ;
            
            }else{


            $sport = htmlspecialchars(strtolower(trim( $_POST['sport'])));
            $entraineur =  htmlspecialchars(strtolower( trim( $_POST['entraineur'])));
           

            $query = "INSERT INTO sport(nom_sport,nom_entraineur) VALUE('$sport', '$entraineur') ";
            if(mysqli_query($my_conn, $query)){
                $msg = "sport ajouter avec succes";
            }
       
       
        }
    }
    

   
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
    <section class="section">
       
       
        <div class="bgcover1">
            
            
            <form class="form" method="POST" action="ajout-sport.php" >  
               

                <div class="msg">
                    <?php if(isset ($msg))  echo $msg; ?>
                </div>
                <div class="err">
                    <span><?php if(isset ($errcode) ) echo $errcode;  ?></span>
                    <span><?php if(isset ($errnom) ) echo $errnom;  ?></span>
                   
                </div>
                <label class="start1" >Choisir un sport:</label>
                <select name="sport"  class="combobox1" >
                    <option value="Fitnesse" class="combobox">Fitnesse</option>
                    <option value="Building" class="combobox">Body Building</option>
                    <option value="Aerobic" class="combobox">Aerobic</option>
                    <option value="power" class="combobox">Power Lifitng</option>
                    <option value="Boxx" class="combobox">Box</option>
                    <option value="karate" class="combobox">Karate</option>
                    <option value="MMA" class="combobox">MMA</option>
                    <option value="judo" class="combobox">Judo</option>
                    <option value="Teakouando" class="combobox">Teakouando</option>
                </select>
                <br><br>
               
                <br><br>
                <?php 
                $show = mysqli_query($my_conn, "SELECT `nom_entraineur` FROM `entraineur` ");

                ?>
                <label class="start1" >Choisir un Entraineur:</label>
                <select name="entraineur"  class="combobox1" >
                    <?php

                while($row = mysqli_fetch_array($show)){
                ?>
                    <option>  <?php  echo $row['nom_entraineur']; ?> </option>
                    <?php 


                }
                ?>
                </select>
                <br><br>
                <button class="submit1" name="submit"> Ajouter</button>
                <br><br>
                
              
                <a href="supprimerclt.php" class="versliste1">  Clients</a>
                
                <a href="gerer_entraineur.php" class="versliste1"> Entraineur</a>
               
            </form>
            
        </div>
        <div class="imagelogin">
           
            <img src="images/sports.jpg" alt="image" >
        </div>
    </section>
   
   <script src="projet.js"></script> 
</body>
</html>