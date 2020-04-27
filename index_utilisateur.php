<?php
class utilisateur
{

    private $_ID_admin;
    private $_MDP;
    private $_Identifiant;

public function inscription(){
    try
    {
        //execution du code sur la BDD 
        $BDD = new PDO('mysql:host=localhost; dbname=; charset=utf8','root','');
        $inscription = $BDD->query('INSERT INTO `inscription` (`Identifiant`, `MDP`) VALUES ("'$this->.$Identifiant.'","'$this->.$MDP.'")');
    }

    catch (Exception $erreur)
    {
        echo 'Erreur : '.$erreur->getmessage();
    }
}
}
?>