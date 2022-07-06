<?php

include 'connect.php';
if(isset($_POST['search'])){
    $query="SELECT * FROM `produit` WHERE type = '$_POST[chercher]' ";
    $res = mysqli_query($my_conn, $query); 
   
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
           
            <a href="abonnement.php" >A propos</a>
            <a href="liste-produits.php" ><i class="fa-solid fa-store"></i></a>
            <a href="logiiin.php" class="deconecter"><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>
    <section class="gererclt">
       <form class="formgerer" action="chercherproduit.php" method="POST">
            <input  type="text" name="chercher" id="nom" placeholder="Entrer type produit" size="30" maxlength="20"  required class="input"/>
                <br><br>
            <button class="confirmer" type="submit" name="search"> Chercher </button>
            
       </form>
       <div class="listeclt">
           <h1>Resultat de recherche :</h1>
           <div class="btnlistclt">
               <a href="liste-produits.php" class="btnajoutlist">Lite des produits</a>
           </div>
       </div>
       <table class="table">
           <thead class="lignepremier">
               <tr>
                   <th>Code Produit</th>
                   <th>type</th>
                   <th>Marque</th>
                   <th>Quantite</th>
                   <th>Prix (DH)</th>
                   <th>Montant totale (DH)</th>
                   
                   <th>Gerer</th>
                
                
               </tr>
           </thead>
           <tbody>
               <?php  while($row = mysqli_fetch_assoc($res)) { ?>
                

                <tr>
                    <td><?php echo $row['code_produit']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['marque']; ?></td>
                    <td><?php echo $row['quantite']; ?></td>
                    <td class="typabn"><?php echo $row['prix']; ?></td>
                    <td class="typabn"><?php echo $row['montant']; ?></td>
                    
                    <td>
                        <a href="editer-produit.php?code_produit=<?php echo $row['code_produit']; ?>" class="edit">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="deleteproduit.php?code_produit=<?php echo $row['code_produit']; ?>"  onclick =" return confirm ('voulez vous vraiment supprimer ?');"  class="trash">
                            <i class="fa fa-trash"></i>
                        </a>
                    
                    </td>
                </tr>
               <?php } ?>
           </tbody>
               
       </table>

    </section>
</body>
</html>