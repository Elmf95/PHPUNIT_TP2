<?php

namespace User\Tp2PhpUnit;

use User\Tp2PhpUnit\Exceptions\ExperienceInvalideException;

class Infirmier extends ProfessionnelSante
{
    public $experience;

    public function __construct($nom, $prenom, $specialite, $numeroIdentification, $experience)
    {
        parent::__construct($nom, $prenom, $specialite, $numeroIdentification);

        if ($experience < 0) {
            throw new ExperienceInvalideException("L'expérience ne peut pas être négative.");
        }

        $this->experience = $experience;
    }

    public function afficherType()
    {
        return "Infirmier";
    }

    public function administrerMedicament($medicament)
    {
        return "Le médicament administré est : " . $medicament;
    }
}
