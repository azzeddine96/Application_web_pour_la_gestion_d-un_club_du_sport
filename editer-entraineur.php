<?php

include 'connect.php';
$code = $_GET['id_entraineur'];
$selectsql = " SELECT * FROM `entraineur` WHERE id_entraineur = $code ";
$res = mysqli_query($my_conn, $selectsql);
$r = mysqli_fetch_assoc($res);



    if(isset($_POST['submit'])){


        if(empty($_POST['code'])){
            $errcode ="veuillez remplir le code d'entraineur";
        }elseif(empty($_POST['nom'])){
            $errnom ="veuillez remplir le nom  d'entraineur" ;
        }elseif(empty($_POST['prenom'])){
            $errprenom ="veuillez remplir le prenom  d'entraineur" ;
        }elseif(empty($_POST['date'])){
            $errdate ="veuillez remplir la date de debut  d'entraineur" ;
        
        }elseif(empty($_POST['Sport'])){
            $errsport ="veuillez remplir le Sport d'entraineur " ;
        }else{

            $NOM =  htmlspecialchars(strtolower( trim( $_POST['nom'])));
            $PRENOM  = htmlspecialchars(strtolower( trim( $_POST['prenom'])));;
            $DATE =   htmlspecialchars(strtolower(trim( $_POST['date'])));
            $TLF  = htmlspecialchars(strtolower(trim( $_POST['tlf'])));
            $ADRESSE =  htmlspecialchars(strtolower(trim( $_POST['adresse'])));
            
            $SPORT  =  htmlspecialchars(strtolower(trim( $_POST['Sport'])));
            $SALAIRE = htmlspecialchars(strtolower(trim( $_POST['salaire'])));
            $queryupdate = "UPDATE `entraineur` SET  nom_entraineur = '$NOM' , prenom_entraineur = '$PRENOM' , date_depart = '$DATE'  ,  tlf = '$TLF' , adress = '$ADRESSE' ,   Sport = '$SPORT' , salaire = '$SALAIRE'  WHERE id_entraineur=$code ";
            if(mysqli_query($my_conn, $queryupdate)){
                $msg = "Entraineur modifier avec succes";
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
       
        <h1 class="titre-ajouter">Modifier Entraineur :</h1>
        <form class="form-ajouter" method="POST" action="">
            <div class="msg">
                <?php if(isset ($msg))  echo $msg; ?>
            </div>
            <div class="err">
                <span><?php if(isset ($errcode) ) echo $errcode;  ?></span>
                <span><?php if(isset ($errnom) ) echo $errnom;  ?></span>
                <span><?php if(isset ($errprenom) ) echo $errprenom;  ?></span>
                <span><?php if(isset ($errdate) ) echo $errdate ; ?></span>
                
            </div>
            <input  type="text" name="code" id="code" placeholder="entrer code entraineur" size="30" maxlength="20" value="<?php echo $r['id_entraineur'] ?>" required class="input" />
                
            <input  type="text" name="nom" id="nom" placeholder="entrer nom d'entraineur" size="30" maxlength="20"  value="<?php echo $r['nom_entraineur'] ?>" required class="input" minlength="3"/>
            <input type="text" name="prenom" id="prenom" placeholder="entrer prenom d'entraineur" value="<?php echo $r['prenom_entraineur'] ?>" required maxlength="20"  size="30"class="input" minlength="3"/>
            <br><br><br>
            <label class="start1" >Date debut:</label>
            <input type="date" class="date" value="<?php echo $r['date_depart']; ?>" required name="date">
            <input type="text" id="tlf" name="tlf" placeholder="entrer num de tel" value="<?php echo $r['tlf'] ?>"  class="input"> 
            <input type="text" id="adresse" name="adresse"  value="<?php echo $r['adress'] ?>" placeholder="entrer adresse" class="input"> 
            <br><br><br>
            
            
            <?php 
                $show = mysqli_query($my_conn, "SELECT `nom_sport` FROM `sport` ");

            ?>
            <label class="start1" >Choisir un sport:</label>
            <select name="Sport"  class="combobox" >
                <?php

            while($row = mysqli_fetch_array($show)){
            ?>
                
                <option   <?php if( $r['sport']  ) ?> > <?php  echo $row['nom_sport']; ?> </option>
               
                
                <?php 


            }
            ?>
            </select>
            <label class="start1" >Entrer salire:</label>
            <input type="text" id="salaire" name="salaire"  value="<?php echo $r['salaire'] ?>" placeholder="entrer salaire d'entraineur" class="input"> 
            <br><br><br><br>
            <button  name="submit"> Modifier</button>
                
            <a href="gerer_entraineur.php" > Voire Liste</a>
            
        </form>
       
    </section>
   
   <script src="projet.js"></script> 
</body>
</html>