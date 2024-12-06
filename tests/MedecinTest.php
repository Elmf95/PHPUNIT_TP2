<?php

namespace User\Tp2PhpUnit\Tests;

use PHPUnit\Framework\TestCase;
use User\Tp2PhpUnit\Medecin;
use User\Tp2PhpUnit\Exceptions\HospitalisationInvalideException;

class MedecinTest extends TestCase
{
    public function testConstructeurAvecAttributsValides()
    {
        $medecin = new Medecin('Fikri', 'El mehdi', 'Cardiologie', '12345', true);
        $this->assertEquals('Fikri', $medecin->nom);
        $this->assertEquals(true, $medecin->hospitalisationAutorisee);
    }

    public function testConstructeurAvecHospitalisationInvalide()
    {
        $this->expectException(HospitalisationInvalideException::class);
        new Medecin('Fikri', 'El mehdi', 'Cardiologie', '12345', 'oui');
    }

    public function testAfficherType()
    {
        $medecin = new Medecin('Fikri', 'El mehdi', 'Cardiologie', '12345', true);
        $this->assertEquals('Médecin', $medecin->afficherType());
    }

    public function testPrescrireTraitement()
    {
        $medecin = new Medecin('Fikri', 'El mehdi', 'Cardiologie', '12345', true);
        $this->assertEquals('Le traitement prescrit est : Aspirine', $medecin->prescrireTraitement('Aspirine'));
    }

    public function testAfficherDetails()
    {
        $medecin = new Medecin('Fikri', 'El mehdi', 'Cardiologie', '12345', true);
        $expected = "Nom : Fikri Prénom : El mehdi Spécialité : Cardiologie Numéro d'Identification : 12345";
        $this->assertEquals($expected, $medecin->afficherDetails());
    }
}
