<?php
namespace App\EventDispatcher;

class Event
{
    protected $nom;

    //Action qui déclenche l'instruction
    public function setNom($nom)
    {
        echo '  EventEntry ';
        $this->nom = $nom;
        echo '  EventExit ';

    }

    //getNom pour obtenir le nom depuis le
    public function getNom()
    {
        return $this->nom;
    }

}
