<?php

    include 'connect.php';

    
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
            
            $query = "INSERT INTO produit(code_produit,type,marque,quantite,prix,montant) VALUE('$CODE', '$complement', '$marque', '$quantite', '$prix', '$montant' ) ";
            if(mysqli_query($my_conn,$query)){
                $msg = "produit ajouter avec succes";
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
       
        <h1 class="titre-ajouter">Ajouter Un Produit :</h1>
        <form class="form-ajouter" method="POST" action="ajouter-produit.php">
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
            <input  type="text" name="code" id="code" placeholder="entrer code produit" size="30" maxlength="20" required class="input" />
            <label class="start1"> Type :</label>   
            <select name="complement"  class="combobox" >
                <option value="Complement" class="combobox">Complement</option>
                <option value="Materiel" class="combobox">Materiel</option>
                <option value="vetement" class="vetement">vetement</option>
                <option value="Machine" class="Machine">Machine</option>
            </select>
            <input type="text" name="marque" id="marque" placeholder="entrer marque du produit" required maxlength="20"  size="30"class="input" minlength="3"/>
            <br><br><br>
            
            <input type="text" class="input" required name="quantite" placeholder="entre la quantite du produit" size="30">
            <input type="text" id="prix" name="prix" placeholder="entrer prix du produits"  class="input"> 
            <input type="text" id="montant" name="montant" placeholder="entrer montant total du stock"  size="30" class="input"> 
           
            
            <br><br><br><br>
            <button  name="submit"> Ajouter</button>
                
            <a href="liste-produits.php" > Voire Liste</a>
            
        </form>
       
    </section>
   
   <script src="projet.js"></script> 
</body>
</html>