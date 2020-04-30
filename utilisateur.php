
<?php require("index_utilisateur.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="">
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
</center>
<?php
if(empty($_POST['identifiant'])&& empty($_POST['MDP']))
    {

    }else if($_POST['MDP']==$_POST['MDP2'])
    {
        $user = new utilisateur($inscription);
        $user->inscription($_POST['identifiant'] ,$_POST['MDP']);
        echo"Inscription validée";
    }else
    {
        echo"mot_de_passe ou login incorrect";
    }
?>
</form>
</body>
</html>