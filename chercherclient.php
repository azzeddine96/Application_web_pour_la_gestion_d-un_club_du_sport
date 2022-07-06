<?php

include 'connect.php';
if(isset($_POST['search'])){
    $query="SELECT * FROM `client` WHERE code_clt = '$_POST[chercher]' ";
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
       <form class="formgerer" action="chercherclient.php" method="POST">
            <input  type="text" name="chercher" id="nom" placeholder="Entrer Code client" size="30" maxlength="20"  required class="input"/>
                <br><br>
            <button class="confirmer" type="submit" name="search"> Chercher </button>
            
       </form>
       <div class="listeclt">
           <h1>Resultat de recherche :</h1>
           <div class="btnlistclt">
               <a href="supprimerclt.php" class="btnajoutlist">Lite des client</a>
           </div>
       </div>
       <table class="table">
           <thead class="lignepremier">
               <tr>
                   <th>Code client</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Date debut</th>
                   <th>Abonnement</th>
                   <th>Tlf</th>
                   <th>Adresse</th>
                   <th>Entraineur</th>
                   <th>Sport</th>
                   <th>Gerer</th>
                
               </tr>
           </thead>
           <tbody>
               <?php  while($row = mysqli_fetch_assoc($res)) { ?>
                

                <tr>
                    <td><?php echo $row['code_clt']; ?></td>
                    <td><?php echo $row['nom_clt']; ?></td>
                    <td><?php echo $row['prenom_clt']; ?></td>
                    <td><?php echo $row['date_depart']; ?></td>
                    <td class="typabn"><?php echo $row['Abonnement']; ?></td>
                    <td><?php echo $row['tlf']; ?></td>
                    <td><?php echo $row['adresse']; ?></td>
                    <td><?php echo $row['entraineur']; ?></td>
                    <td><?php echo $row['Sport']; ?></td>
                    <td>
                        <a href="editerclient.php?code_clt=<?php echo $row['code_clt']; ?>" class="edit">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="deleteclient.php?code_clt=<?php echo $row['code_clt']; ?>"    onclick =" return confirm ('voulez vous vraiment supprimer ?');"  class="trash">
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