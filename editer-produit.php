<?php

include 'connect.php';
$code = $_GET['code_produit'];
$selectsql = " SELECT * FROM `produit` WHERE code_produit = $code ";
$res = mysqli_query($my_conn, $selectsql);
$r = mysqli_fetch_assoc($res);

    if(isset($_POST['submit'])){


        if(empty($_POST['code'])){
            $errcode ="veuillez remplir le code du produit";
        }elseif(empty($_POST['complement'])){
            $errnom ="veuillez remplir le type du produit" ;
        }elseif(empty($_POST['marque'])){
            $errprenom ="veuillez remplir la marque du produit" ;
        }elseif(empty($_POST['quantite'])){
            $errdate ="veuillez remplir la quantite du produit" ;
        }elseif(empty($_POST['prix'])){
            $errabon ="veuillez remplir le prix du produit" ;
        }else{


            $CODE = htmlspecialchars(strtolower(trim( $_POST['code'])));
            $complement =  htmlspecialchars(strtolower( trim( $_POST['complement'])));
            $marque  = htmlspecialchars(strtolower( trim( $_POST['marque'])));;
            $quantite =   htmlspecialchars(strtolower(trim( $_POST['quantite'])));
            $prix  = htmlspecialchars(strtolower(trim( $_POST['prix'])));
            $montant =  htmlspecialchars(strtolower(trim( $_POST['montant'])));
            $queryupdate = "UPDATE `produit` SET  type = '$complement' , marque = '$marque' , quantite = '$quantite' ,  prix = '$prix' , montant = '$montant'  WHERE code_produit=$CODE ";
            if(mysqli_query($my_conn, $queryupdate)){
                $msg = "produit modifier avec succes";
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
       
        <h1 class="titre-ajouter">Modifier Produit :</h1>
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
            <input  type="text" name="code" id="code" placeholder="entrer code produit" size="30" maxlength="20" value="<?php echo $r['code_produit'] ?>" required class="input" />
            <label class="start1"> Type :</label>   
            <select name="complement"  class="combobox" >
                <option value="Complement" class="combobox"  <?php if( $r['type'] =='Complement') {echo "Complement";}  ?>  >Complement</option>
                <option value="Materiel" class="combobox"  <?php if( $r['type'] =='Materiel') {echo "Materiel";}  ?>  >Materiel</option>
                <option value="vetement" class="vetement"  <?php if( $r['type'] =='vetement') {echo "vetement";}  ?>  >vetement</option>
                <option value="Machine" class="Machine"   <?php if( $r['type'] =='Machine') {echo "Machine";}  ?>  >Machine</option>
            </select>
            <input type="text" name="marque" id="marque" placeholder="entrer marque du produit" value="<?php echo $r['marque'] ?>"  required maxlength="20"  size="30"class="input" minlength="3"/>
            <br><br><br>
            
            <input type="text" class="input" required name="quantite" placeholder="entre la quantite du produit" value="<?php echo $r['quantite'] ?>"  size="30">
            <input type="text" id="prix" name="prix" placeholder="entrer prix du produits"   value="<?php echo $r['prix'] ?>"  class="input"> 
            <input type="text" id="montant" name="montant" placeholder="entrer montant total du stock"   value="<?php echo $r['montant'] ?>"  size="30" class="input"> 
           
            
            <br><br><br><br>
            <button  name="submit"> modifier</button>
                
            <a href="liste-produits.php" > Voire Liste</a>
            
        </form>
       
    </section>
   
   <script src="projet.js"></script> 
</body>
</html>