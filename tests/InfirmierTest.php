<?php

namespace User\Tp2PhpUnit\Tests;

use PHPUnit\Framework\TestCase;
use User\Tp2PhpUnit\Infirmier;
use User\Tp2PhpUnit\Exceptions\ExperienceInvalideException;

class InfirmierTest extends TestCase
{
    public function testConstructeurAvecAttributsValides()
    {
        $infirmier = new Infirmier('Fikri', 'El mehdi', 'Dentiste', '67890', 5);
        $this->assertEquals(5, $infirmier->experience);
    }

    public function testConstructeurAvecExperienceNegative()
    {
        $this->expectException(ExperienceInvalideException::class);
        new Infirmier('Fikri', 'El mehdi', 'Dentiste', '67890', -3);
    }

    public function testAfficherType()
    {
        $infirmier = new Infirmier('Fikri', 'El mehdi', 'Dentiste', '67890', 5);
        $this->assertEquals('Infirmier', $infirmier->afficherType());
    }

    public function testAdministrerMedicament()
    {
        $infirmier = new Infirmier('Fikri', 'El mehdi', 'Dentiste', '67890', 5);
        $this->assertEquals('Le médicament administré est : Paracétamol', $infirmier->administrerMedicament('Paracétamol'));
    }

    public function testAfficherDetails()
    {
        $infirmier = new Infirmier('Fikri', 'El mehdi', 'Dentiste', '67890', 5);
        $expected = "Nom : Fikri Prénom : El mehdi Spécialité : Dentiste Numéro d'Identification : 67890";
        $this->assertEquals($expected, $infirmier->afficherDetails());
    }
}
