<html>
<?php require("index_utilisateur.php");
?>
<head>
    <link rel="stylesheet" href="css_applis.css">
    <script type="text/javascript">
    </script>
</head>   
<body>  
        <center>
            <h1><font color="red"> Utilisateur </font></h1>
        </center>

<ul>          <!-- debut du menus-->

    <li><a href="page_livre.php">Page des livres </a></li>
    <li><a href="page_auteur.php">Page des auteurs </a></li>
    <li><a href="page_commentaire.php">Page des commentaires  </a></li>
    <li style="float:right"><a class="active" href="page_daccueil.php">retour accueil</a></li>
    </ul>  
    <!-- fin du menus -->
  <!--  
<form method="POST" action="index_utilisateur.php" >
Choisissez quelle utilisateur à supprimé ( ne marche pas,et rien dans la BDD )<br>
<input type="checkbox" name="utilisateur" value="Mathis">Mathis<br>
<input type="checkbox" name="utilisateur" value="Thomas"> Thomas<br>
<input type="checkbox" name="utilisateur" value="elodie"> elodie<br>
<input type="submit" name="exple2" value="Supprimé">
</form>
-->
<!-- formulaire d'inscription -->
<center>
<form action="utilisateur.php" method="POST">
<label >Identifiant</label>
<input type="text" name="identifiant">
<p></p>
<label >MDP</label>
<input type="password" name="MDP">
<p></p>
<label>Confimation du MDP</label>
<input type="password" name="MDP2">
<input type="submit">
<?php
if(empty($_POST['identifiant'])&& empty($_POST['MDP']))
{

}else if($_POST['MDP']==$_POST['MDP2'])
{
$admin = new identifiant();
$admin->inscription($_POST['identifiant'] ,$_POST['MDP']);
echo"Inscription validée";
}else
{
    echo"Erreur";
}
?>
<!-- fin du formulaire d'inscription -->
</center>
</form>
</body>
</html>