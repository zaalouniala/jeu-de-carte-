<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 08/08/2018
 * Time: 12:12
 */

class Carte
{
    private $cle;
    private $value;

    /**
     * carte constructor.
     * @param $cle
     * @param $value
     */
    public function __construct($cle=null, $value=null)
    {
        $this->cle = $cle;
        $this->value = $value;
    }

    public function showCarte()
    {
       echo "<img width='100px' height='150px' src=".$this->value."> </img> ";

    }


}
