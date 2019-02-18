<?php

namespace App\POO;

/*class Test
{
    private $_degats;
    private $_experience;
    private $_force;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    private static $_text = 'Voici mon attribut static Chico';

    public function __construct($forceInitiale)
    {
        $this->setForce($forceInitiale);
    }

    public function deplacer()
    {

    }

    public function frapper()
    {

    }

    public function gagnerExperience()
    {

    }

    public function setForce($force)
    {
        $this->_force = $force;
    }

    public static function parler()
    {
        echo self::$_text;
    }
}

class Chrono
{
    private static $compteur;

    public function __construct()
    {
        self::$compteur ++;
    }

    public static function getCompteur()
    {
        return self::$compteur;
    }

}*/


class Test
{
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;



    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {

            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {

               return $this->$method($value);
            }
        }
    }

    public function id()
    {
        return $this->_id;
    }

    public function nom()
    {
        return $this->_nom;
    }

    public function forcePerso()
    {
        return $this->_forcePerso;
    }

    public function degats()
    {
        return $this->_degats;
    }

    public function niveau()
    {
        return $this->_niveau;
    }

    public function experience()
    {
        return $this->_experience;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setForcePerso($forcePerso)
    {
        $this->_forcePerso = $forcePerso;
    }

    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }

    public function setNiveau($niveau)
    {
        $this->_niveau = $niveau;
    }

    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }


}
 $donnees = [
    'id' => 16, 'nom' => 'Vyk12', 'forcePerso' => 5,
    '    degats' => 55, 'niveau' => 4, 'experience' => 20];


$perso = new Test();

echo $perso->hydrate($donnees);