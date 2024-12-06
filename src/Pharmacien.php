<?php

namespace User\Tp2PhpUnit;

use User\Tp2PhpUnit\Exceptions\MedicamentInvalideException;

class Pharmacien extends ProfessionnelSante
{
    public $qualification;

    public function __construct($nom, $prenom, $specialite, $numeroIdentification, $qualification)
    {
        parent::__construct($nom, $prenom, $specialite, $numeroIdentification);

        if (empty($qualification)) {
            throw new MedicamentInvalideException("La qualification du pharmacien ne peut pas être vide.");
        }

        $this->qualification = $qualification;
    }

    public function afficherType()
    {
        return "Pharmacien";
    }

    public function preparerMedicament($medicament)
    {
        return "Le médicament préparé est : " . $medicament;
    }
}
