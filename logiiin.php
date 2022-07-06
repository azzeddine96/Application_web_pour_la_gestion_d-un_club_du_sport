<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $nom = mysqli_real_escape_string($my_conn, $_POST['nom']);
    $pass =  mysqli_real_escape_string($my_conn, md5($_POST['pass']));

    $select = mysqli_query($my_conn, "SELECT * FROM `authentification` WHERE `nom_util` = '$nom' && `mdp` = '$pass' ");
    if(mysqli_num_rows($select) > 0){
   
   
        header('location: home.php ');
        
    }else{
        $message = 'nom utlisateur ou mot de passe incoreccte ';
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
<body >
    <header class="header">
       <a href="logiiin.php" class="logo"><span class="logo2">Myfit4</span>Life</a>
       <div id="menu-btn" class="fas fa-bars"></div>
       <div class="fa-times"></div>
       <nav class="navbar">
           <a href="modevisiteur.php" class="visiteur">Mode visiteur</a>
           
       </nav>
    </header>
    <section class="section">
       
        <div class="bgcover">
            
            <form class="form"  method="POST"  action="home.php" >  
                <div class="msg">
                    <?php if(isset ($message))  echo $message; ?>
                </div>  
                <input  type="text" name="nom" id="nom" placeholder="entrer votre nom d'utilisteur" size="30" maxlength="20" required class="input"/>
                <br><br>
                
                <input type="password" name="pass" id="pass" placeholder="entrer votre mot de passe" required maxlength="20"  size="30"class="input"/>
                <br><br>
                <input type="checkbox" id="auto" name="auto"class="checkbox" >
                <label for="checkbox" class="checkbox"><span>connection automatique</span></label>
                <br><br>
                <button class="submit" type="submit" name="submit"> connecter </button>
                <div class="nv_cmpt">
                    <label class="new">mot de passe oublie ? <a href="recuperer-mdp.php" class="creer">Recuperer </a></label>
                </div>
                
            </form>
            
        </div>
        <div class="imagelogin">
            <img src="images/home-bg-1.jpg" alt="image" >
        </div>
    </section>
   
   <script src="projet.js"></script> 
</body>
</html>