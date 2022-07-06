<?php

include 'connect.php';
$code = $_GET['code_clt'];
$selectsql = " SELECT * FROM `client` WHERE code_clt = $code ";
$res = mysqli_query($my_conn, $selectsql);
$r = mysqli_fetch_assoc($res);



    if(isset($_POST['submit'])){


        if(empty($_POST['code'])){
            $errcode ="veuillez remplir le code du client";
        }elseif(empty($_POST['nom'])){
            $errnom ="veuillez remplir le nom du client" ;
        }elseif(empty($_POST['prenom'])){
            $errprenom ="veuillez remplir le prenom du client" ;
        }elseif(empty($_POST['date'])){
            $errdate ="veuillez remplir la date du client" ;
        }elseif(empty($_POST['abonnement'])){
            $errabon ="veuillez remplir le type d'abonnement du client" ;
        }elseif(empty($_POST['entraineur'])){
            $errentrain ="veuillez remplir l'entraineur du client" ;
        }elseif(empty($_POST['Sport'])){
            $errsport ="veuillez remplir le Sport du client" ;
        }else{

            $NOM =  htmlspecialchars(strtolower( trim( $_POST['nom'])));
            $PRENOM  = htmlspecialchars(strtolower( trim( $_POST['prenom'])));
            $DATE =   htmlspecialchars(strtolower(trim( $_POST['date'])));
            $TLF  = htmlspecialchars(strtolower(trim( $_POST['tlf'])));
            $ADRESSE =  htmlspecialchars(strtolower(trim( $_POST['adresse'])));
            $ABONN  =  htmlspecialchars(strtolower(trim( $_POST['abonnement'])));
            $ENTRAINEUR  =  htmlspecialchars(strtolower(trim( $_POST['entraineur'])));
            $SPORT  =  htmlspecialchars(strtolower(trim( $_POST['Sport'])));

            $queryupdate = "UPDATE `client` SET  nom_clt = '$NOM' , prenom_clt = '$PRENOM' , date_depart = '$DATE' , Abonnement = '$ABONN' ,  tlf = '$TLF' , adresse = '$ADRESSE' , entraineur = '$ENTRAINEUR' ,  Sport = '$SPORT' WHERE code_clt=$code ";
            if(mysqli_query($my_conn, $queryupdate)){
                $msg = "client modifier avec succes";
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
    <section class="section-ajout">
       
        <h1 class="titre-ajouter">Modifier Client :</h1>
        <form class="form-ajouter" method="POST" action="">
            <div class="msg">
                <?php if(isset ($msg))  echo $msg; ?>
            </div>
            <div class="err">
                <span><?php if(isset ($errcode) ) echo $errcode;  ?></span>
                <span><?php if(isset ($errnom) ) echo $errnom;  ?></span>
                <span><?php if(isset ($errprenom) ) echo $errprenom;  ?></span>
                <span><?php if(isset ($errdate) ) echo $errdate ; ?></span>
                <span><?php if(isset ($errabon) ) echo $errabon;  ?></span>
            </div>
            <input  type="text" name="code" id="code" placeholder="entrer code Client" size="30" maxlength="20" value="<?php echo $r['code_clt'] ?>" required class="input" />
                
            <input  type="text" name="nom" id="nom" placeholder="entrer nom du client" size="30" maxlength="20"  value="<?php echo $r['nom_clt'] ?>" required class="input" minlength="3"/>
            <input type="text" name="prenom" id="prenom" placeholder="entrer prenom du Client" value="<?php echo $r['prenom_clt'] ?>" required maxlength="20"  size="30"class="input" minlength="3"/>
            <br><br><br>
            <label class="start1" >Date debut:</label>
            <input type="date" class="date" value="<?php echo $r['date_depart']; ?>" required name="date">
            <input type="text" id="tlf" name="tlf" placeholder="entrer num de tel" value="<?php echo $r['tlf'] ?>"  class="input"> 
            <input type="text" id="adresse" name="adresse"  value="<?php echo $r['adresse'] ?>" placeholder="entrer adresse" class="input"> 
            <br><br><br>
            <label class="abonn">Type d'abonnement:</label>
            <select name="abonnement"  class="combobox" >
                <option value="Classique" class="combobox" <?php if( $r['Abonnement'] =='Classique') {echo "Classique";}  ?>  >Classique</option>
                <option value="Premuim" class="combobox" <?php if( $r['Abonnement'] =='Premuim') {echo "Premuim";}   ?> >Premuim</option>
            </select>
            
            <?php 
                $show = mysqli_query($my_conn, "SELECT `nom_sport` FROM `sport` ");

            ?>
            <label class="start1" >Choisir un sport:</label>
            <select name="Sport"  class="combobox" >
                <?php

            while($row = mysqli_fetch_array($show)){
            ?>
                
                <option   <?php if( $r['Sport']  ) ?> > <?php  echo $row['nom_sport']; ?> </option>
               
                
                <?php 


            }
            ?>
            </select>
            <?php 
                $show = mysqli_query($my_conn, "SELECT `nom_entraineur` FROM `entraineur` ");

            ?>
            <label class="start1" >Choisir un Entraineur:</label>
            <select name="entraineur"  class="combobox" >
                <?php

            while($row = mysqli_fetch_array($show)){
            ?>
                <option   <?php if( $r['entraineur']  ) ?> > <?php  echo $row['nom_entraineur']; ?> </option>
                <?php 


            }
            ?>
            </select>
            <br><br><br><br>
            <button  name="submit"> Modifier</button>
                
            <a href="supprimerclt.php" > Voire Liste</a>
            
        </form>
       
    </section>
   
   <script src="projet.js"></script> 
</body>
</html>