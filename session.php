<?php
session_start()
echo"bienvenue sur le site";


if(isset($_session['identifiant'])&& isset($_session['MDP']))
    {

    }else if($_session['MDP']==$_session['MDP'])
    {
        $user->connexion($_POST['identifiant'] ,$_POST['MDP']);
        echo"bienvenue";
    }else
    {
        echo"mot_de_passe ou pseudo incorrect";
    }


?>
