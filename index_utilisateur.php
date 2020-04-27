<?php
class utilisateur
{

    private $_ID_utilisateur;
    private $_MDP;
    private $_Identifiant;

public function inscription(){
                                try
                                {
        //execution du code sur la BDD 
                                    $BDD = new PDO('mysql:host=localhost; dbname=; charset=utf8','root','');
                                    $inscription = $BDD->query('INSERT INTO`inscription`(`ID_inscription`,`Identifiant`,`MDP`)VALUES("'.$Identifiant.'","'.$MDP.'")');
                                    $inscription = $BDD->query('SELECT `ID_inscription`, `Identifiant`, `MDP` FROM `inscription` WHERE 1');
                                }
                                catch (Exception $erreur)
                                {
                                    echo 'Erreur : '.$erreur->getmessage();
                                }

                                }
                            }

?>