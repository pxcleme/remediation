<?php
class Identifiant
{

    private $_ID_admin;
    private $_MDP;
    private $_Identifiant;

public function inscription($Identifiant,$MDP){
    try
    {
        //execution du code sur la BDD 
        $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','');
        $inscription = $BDD->query('INSERT INTO `inscription` (`Identifiant`, `MDP`) VALUES ("'.$Identifiant.'","'.$MDP.'")');
    
    }

    catch (Exception $erreur)
    {
        echo 'Erreur : '.$erreur->getmessage();
    }
}
}
?>
