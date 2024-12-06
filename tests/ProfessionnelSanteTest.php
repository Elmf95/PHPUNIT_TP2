<?php

namespace User\Tp2PhpUnit\Tests;

use PHPUnit\Framework\TestCase;
use User\Tp2PhpUnit\ProfessionnelSanteConcret;
use User\Tp2PhpUnit\Exceptions\InformationsManquantesException;

class ProfessionnelSanteTest extends TestCase
{
    public function testConstructeurAvecAttributsValides()
    {
        $mock = new ProfessionnelSanteConcret('Nom', 'Prenom', 'Specialite', '12345');
        $this->assertEquals('Nom', $mock->nom);
    }

    public function testConstructeurAvecAttributsInvalides()
    {
        $this->expectException(InformationsManquantesException::class);
        
        // Crée une instance de la classe concrète avec des attributs invalides
        new ProfessionnelSanteConcret('', 'Prenom', 'Specialite', '');
    }
}


