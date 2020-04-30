<?php
class utilisateur
{

    private $_ID_utilisateur;
    private $_MDP;
    private $_Identifiant;
    private $_inscription;

public function inscription($Identifiant,$MDP){
                                try
                                {
        //execution du code sur la BDD 
                                    $BDD = new PDO('mysql:host=localhost; dbname=; charset=utf8','root','');
                                    $inscription = $BDD->query('INSERT INTO`inscription`(`Identifiant`,`MDP`)VALUES("'.$Identifiant.'","'.$MDP.'")');
                                    $this->__Identifiant= $inscription['Identifiant'];
                                    $this->_MDP = $inscription['MDP'];
                                }
                                catch (Exception $erreur)
                                {
                                    echo 'Erreur : '.$erreur->getmessage();
                                }

                            }
}