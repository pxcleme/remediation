<?php
session_start()
echo"bienvenue sur le site";


if(isset($_POST['identifiant'])&& isset($_POST['MDP']))
    {

    }else if($_POST['MDP']==$_POST['MDP'])
    {
        $user = new utilisateur($inscription);
        $user->connexion($_POST['identifiant'] ,$_POST['MDP']);
        echo"bienvenue";
    }else
    {
        echo"mot_de_passe ou pseudo incorrect";
    }


?>
