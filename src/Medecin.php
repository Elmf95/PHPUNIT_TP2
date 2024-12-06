<?php

namespace User\Tp2PhpUnit;

use User\Tp2PhpUnit\Exceptions\HospitalisationInvalideException;

class Medecin extends ProfessionnelSante
{
    public $hospitalisationAutorisee;

    public function __construct($nom, $prenom, $specialite, $numeroIdentification, $hospitalisationAutorisee)
    {
        parent::__construct($nom, $prenom, $specialite, $numeroIdentification);

        if (!is_bool($hospitalisationAutorisee)) {
            throw new HospitalisationInvalideException("L'attribut hospitalisationAutorisee doit être un booléen.");
        }

        $this->hospitalisationAutorisee = $hospitalisationAutorisee;
    }

    public function afficherType()
    {
        return "Médecin";
    }

    public function prescrireTraitement($traitement)
    {
        return "Le traitement prescrit est : " . $traitement;
    }
}
