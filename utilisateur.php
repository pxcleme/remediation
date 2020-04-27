
<?php require("index_utilisateur.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="css_applis.css">
    </head>   
<body>
<center>

<form action="utilisateur.php" method="POST">
<label>Identifiant</label>
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
        $admin = new utilisateur();
        $admin->inscription($_POST['identifiant'] ,$_POST['MDP']);
        echo"Inscription validée";
    }else
    {
        echo"mot_de_passe ou login incorrect";
    }
?>
</center>
</form>
</body>
</html>