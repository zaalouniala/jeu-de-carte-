<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 08/08/2018
 * Time: 12:23
 */
include_once('Carte.php');
class Joueur
{
private $nom;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Joueur constructor.
     * @param $nom
     */

    public function __construct($nom)
    {
        $this->nom = $nom;
    }


}