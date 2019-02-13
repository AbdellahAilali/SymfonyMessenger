<?php


namespace App\POO;


class Personnage
{
    /**
     * @var Personnage $nom
     */
    private $nom;
    /**
     * @var Personnage $dammage
     */
    private $dammage;

    const CEST_MOI = 'vous ne pouvez pas vous auto frapper';
    const PERSONNAGE_TUE = 'Vous etes dead Mec';
    const PERSONNAGE_FRAPPE = 'vous allez recevoir 5 de dégats';


    public function __construct(array $donnees)
    {
      $this->hydrater($donnees);
    }

    public function frapper(Personnage $perso)
    {
        if ($perso === $this) {
            echo self::CEST_MOI;
        }

        echo self::PERSONNAGE_FRAPPE;
    }


    public function recevoirDegats()
    {
        if ($this->dammage < 100) {
            $this->dammage += 5;
            echo 'vous venez de recevoir 5 de dégats';
        }

        echo self::PERSONNAGE_TUE;

    }
}
