<?php

namespace User\Tp2PhpUnit\Tests;

use PHPUnit\Framework\TestCase;
use User\Tp2PhpUnit\Exceptions\InformationsManquantesException;
use User\Tp2PhpUnit\Exceptions\HospitalisationInvalideException;
use User\Tp2PhpUnit\Exceptions\ExperienceInvalideException;
use User\Tp2PhpUnit\Exceptions\MedicamentInvalideException;

class ExceptionsTest extends TestCase
{
    public function testInformationsManquantesException()
    {
        $this->expectException(InformationsManquantesException::class);
        throw new InformationsManquantesException("Message d'erreur");
    }

    public function testHospitalisationInvalideException()
    {
        $this->expectException(HospitalisationInvalideException::class);
        throw new HospitalisationInvalideException("Message d'erreur");
    }

    public function testExperienceInvalideException()
    {
        $this->expectException(ExperienceInvalideException::class);
        throw new ExperienceInvalideException("Message d'erreur");
    }

    public function testMedicamentInvalideExceptionIsThrown()
    {
        $this->expectException(MedicamentInvalideException::class);
        $this->expectExceptionMessage("Test de l'exception de médicament invalide.");

        // Simuler un déclenchement de l'exception
        throw new MedicamentInvalideException("Test de l'exception de médicament invalide.");
    }

    public function testMedicamentInvalideExceptionMessage()
    {
        $exception = new MedicamentInvalideException("Message personnalisé");
        $this->assertSame("Message personnalisé", $exception->getMessage());
    }
}