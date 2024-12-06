<?php

namespace User\Tp2PhpUnit\Tests;

use PHPUnit\Framework\TestCase;
use User\Tp2PhpUnit\Pharmacien;
use User\Tp2PhpUnit\Exceptions\MedicamentInvalideException;

class PharmacienTest extends TestCase
{
    public function testConstructeurAvecAttributsValides()
    {
        $pharmacien = new Pharmacien('Fikri', 'Sophie', 'Pharmacie', '45678', 'Pharmacologie');
        $this->assertEquals('Pharmacologie', $pharmacien->qualification);
    }

    public function testConstructeurAvecQualificationInvalide()
    {
        $this->expectException(MedicamentInvalideException::class);
        $this->expectExceptionMessage("La qualification du pharmacien ne peut pas être vide.");

        // Créer un pharmacien avec une qualification vide
        new Pharmacien("Fikri", "ELMF", "Pharmacie", "PH12345", "");
    }

    public function testAfficherType()
    {
        $pharmacien = new Pharmacien('Fikri', 'Sarah', 'Pharmacie', '45678', 'Pharmacologie');
        $this->assertEquals('Pharmacien', $pharmacien->afficherType());
    }

    public function testPreparerMedicament()
    {
        $pharmacien = new Pharmacien('Fikri', 'Sarah', 'Pharmacie', '45678', 'Pharmacologie');
        $this->assertEquals('Le médicament préparé est : Ibuprofène', $pharmacien->preparerMedicament('Ibuprofène'));
    }

    public function testAfficherDetails()
    {
        $pharmacien = new Pharmacien('Fikri', 'Sarah', 'Pharmacie', '45678', 'Pharmacologie');
        $expected = "Nom : Fikri Prénom : Sarah Spécialité : Pharmacie Numéro d'Identification : 45678";
        $this->assertEquals($expected, $pharmacien->afficherDetails());
    }
}




