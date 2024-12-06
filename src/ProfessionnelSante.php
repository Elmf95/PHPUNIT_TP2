<?php

namespace User\Tp2PhpUnit;

use User\Tp2PhpUnit\Exceptions\InformationsManquantesException;

abstract class ProfessionnelSante
{
    public $nom;
    public $prenom;
    public $specialite;
    public $numeroIdentification;

    public function __construct($nom, $prenom, $specialite, $numeroIdentification)
    {
        if (empty($nom) || empty($prenom) || empty($specialite) || empty($numeroIdentification)) {
            throw new InformationsManquantesException("Tous les attributs doivent être renseignés.");
        }

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->specialite = $specialite;
        $this->numeroIdentification = $numeroIdentification;
    }

    abstract public function afficherType();

    public function afficherDetails()
    {
        return "Nom : " . $this->nom . " Prénom : " . $this->prenom . " Spécialité : " . $this->specialite . " Numéro d'Identification : " . $this->numeroIdentification;
    }
}

class ProfessionnelSanteConcret extends ProfessionnelSante
{
    public function __construct($nom, $prenom, $specialite, $numeroIdentification)
    {
        parent::__construct($nom, $prenom, $specialite, $numeroIdentification);
    }

    public function afficherType()
    {
        return "Professionnel de santé";
    }
}
