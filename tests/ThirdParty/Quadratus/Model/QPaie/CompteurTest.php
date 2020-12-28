<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Compteur;

/**
 * Compteur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CompteurTest extends AbstractTestCase {

    /**
     * Tests the setNbAttesAssedic() method.
     *
     * @return void
     */
    public function testSetNbAttesAssedic(): void {

        $obj = new Compteur();

        $obj->setNbAttesAssedic(10);
        $this->assertEquals(10, $obj->getNbAttesAssedic());
    }

    /**
     * Tests the setNbAttesAssedicADeduire() method.
     *
     * @return void
     */
    public function testSetNbAttesAssedicADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttesAssedicADeduire(10);
        $this->assertEquals(10, $obj->getNbAttesAssedicADeduire());
    }

    /**
     * Tests the setNbAttesAssedicFact() method.
     *
     * @return void
     */
    public function testSetNbAttesAssedicFact(): void {

        $obj = new Compteur();

        $obj->setNbAttesAssedicFact(10);
        $this->assertEquals(10, $obj->getNbAttesAssedicFact());
    }

    /**
     * Tests the setNbAttesIjss() method.
     *
     * @return void
     */
    public function testSetNbAttesIjss(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjss(10);
        $this->assertEquals(10, $obj->getNbAttesIjss());
    }

    /**
     * Tests the setNbAttesIjssADeduire() method.
     *
     * @return void
     */
    public function testSetNbAttesIjssADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssADeduire(10);
        $this->assertEquals(10, $obj->getNbAttesIjssADeduire());
    }

    /**
     * Tests the setNbAttesIjssAt() method.
     *
     * @return void
     */
    public function testSetNbAttesIjssAt(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssAt(10);
        $this->assertEquals(10, $obj->getNbAttesIjssAt());
    }

    /**
     * Tests the setNbAttesIjssAtFact() method.
     *
     * @return void
     */
    public function testSetNbAttesIjssAtFact(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssAtFact(10);
        $this->assertEquals(10, $obj->getNbAttesIjssAtFact());
    }

    /**
     * Tests the setNbAttesIjssAtaDeduire() method.
     *
     * @return void
     */
    public function testSetNbAttesIjssAtaDeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssAtaDeduire(10);
        $this->assertEquals(10, $obj->getNbAttesIjssAtaDeduire());
    }

    /**
     * Tests the setNbAttesIjssFact() method.
     *
     * @return void
     */
    public function testSetNbAttesIjssFact(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssFact(10);
        $this->assertEquals(10, $obj->getNbAttesIjssFact());
    }

    /**
     * Tests the setNbAttestEmploi() method.
     *
     * @return void
     */
    public function testSetNbAttestEmploi(): void {

        $obj = new Compteur();

        $obj->setNbAttestEmploi(10);
        $this->assertEquals(10, $obj->getNbAttestEmploi());
    }

    /**
     * Tests the setNbAttestEmploiADeduire() method.
     *
     * @return void
     */
    public function testSetNbAttestEmploiADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttestEmploiADeduire(10);
        $this->assertEquals(10, $obj->getNbAttestEmploiADeduire());
    }

    /**
     * Tests the setNbAttestEmploiFact() method.
     *
     * @return void
     */
    public function testSetNbAttestEmploiFact(): void {

        $obj = new Compteur();

        $obj->setNbAttestEmploiFact(10);
        $this->assertEquals(10, $obj->getNbAttestEmploiFact());
    }

    /**
     * Tests the setNbBulEdites() method.
     *
     * @return void
     */
    public function testSetNbBulEdites(): void {

        $obj = new Compteur();

        $obj->setNbBulEdites(10);
        $this->assertEquals(10, $obj->getNbBulEdites());
    }

    /**
     * Tests the setNbBulEditesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBulEditesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBulEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbBulEditesADeduire());
    }

    /**
     * Tests the setNbBulEditesFact() method.
     *
     * @return void
     */
    public function testSetNbBulEditesFact(): void {

        $obj = new Compteur();

        $obj->setNbBulEditesFact(10);
        $this->assertEquals(10, $obj->getNbBulEditesFact());
    }

    /**
     * Tests the setNbBulValides() method.
     *
     * @return void
     */
    public function testSetNbBulValides(): void {

        $obj = new Compteur();

        $obj->setNbBulValides(10);
        $this->assertEquals(10, $obj->getNbBulValides());
    }

    /**
     * Tests the setNbBulValidesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBulValidesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBulValidesADeduire(10);
        $this->assertEquals(10, $obj->getNbBulValidesADeduire());
    }

    /**
     * Tests the setNbBulValidesFact() method.
     *
     * @return void
     */
    public function testSetNbBulValidesFact(): void {

        $obj = new Compteur();

        $obj->setNbBulValidesFact(10);
        $this->assertEquals(10, $obj->getNbBulValidesFact());
    }

    /**
     * Tests the setNbCertifTravail() method.
     *
     * @return void
     */
    public function testSetNbCertifTravail(): void {

        $obj = new Compteur();

        $obj->setNbCertifTravail(10);
        $this->assertEquals(10, $obj->getNbCertifTravail());
    }

    /**
     * Tests the setNbCertifTravailADeduire() method.
     *
     * @return void
     */
    public function testSetNbCertifTravailADeduire(): void {

        $obj = new Compteur();

        $obj->setNbCertifTravailADeduire(10);
        $this->assertEquals(10, $obj->getNbCertifTravailADeduire());
    }

    /**
     * Tests the setNbCertifTravailFact() method.
     *
     * @return void
     */
    public function testSetNbCertifTravailFact(): void {

        $obj = new Compteur();

        $obj->setNbCertifTravailFact(10);
        $this->assertEquals(10, $obj->getNbCertifTravailFact());
    }

    /**
     * Tests the setNbDadsEditees() method.
     *
     * @return void
     */
    public function testSetNbDadsEditees(): void {

        $obj = new Compteur();

        $obj->setNbDadsEditees(10);
        $this->assertEquals(10, $obj->getNbDadsEditees());
    }

    /**
     * Tests the setNbDadsEditeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbDadsEditeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDadsEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbDadsEditeesADeduire());
    }

    /**
     * Tests the setNbDadsEditeesFact() method.
     *
     * @return void
     */
    public function testSetNbDadsEditeesFact(): void {

        $obj = new Compteur();

        $obj->setNbDadsEditeesFact(10);
        $this->assertEquals(10, $obj->getNbDadsEditeesFact());
    }

    /**
     * Tests the setNbDisquettesVirements() method.
     *
     * @return void
     */
    public function testSetNbDisquettesVirements(): void {

        $obj = new Compteur();

        $obj->setNbDisquettesVirements(10);
        $this->assertEquals(10, $obj->getNbDisquettesVirements());
    }

    /**
     * Tests the setNbDisquettesVirementsADeduire() method.
     *
     * @return void
     */
    public function testSetNbDisquettesVirementsADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDisquettesVirementsADeduire(10);
        $this->assertEquals(10, $obj->getNbDisquettesVirementsADeduire());
    }

    /**
     * Tests the setNbDisquettesVirementsFact() method.
     *
     * @return void
     */
    public function testSetNbDisquettesVirementsFact(): void {

        $obj = new Compteur();

        $obj->setNbDisquettesVirementsFact(10);
        $this->assertEquals(10, $obj->getNbDisquettesVirementsFact());
    }

    /**
     * Tests the setNbDsnEvtArret() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtArret(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtArret(10);
        $this->assertEquals(10, $obj->getNbDsnEvtArret());
    }

    /**
     * Tests the setNbDsnEvtArretADeduire() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtArretADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtArretADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnEvtArretADeduire());
    }

    /**
     * Tests the setNbDsnEvtArretFact() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtArretFact(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtArretFact(10);
        $this->assertEquals(10, $obj->getNbDsnEvtArretFact());
    }

    /**
     * Tests the setNbDsnEvtFinContrat() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContrat(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtFinContrat(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContrat());
    }

    /**
     * Tests the setNbDsnEvtFinContratADeduire() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContratADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtFinContratADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContratADeduire());
    }

    /**
     * Tests the setNbDsnEvtFinContratFact() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContratFact(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtFinContratFact(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContratFact());
    }

    /**
     * Tests the setNbDsnMensuelle() method.
     *
     * @return void
     */
    public function testSetNbDsnMensuelle(): void {

        $obj = new Compteur();

        $obj->setNbDsnMensuelle(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelle());
    }

    /**
     * Tests the setNbDsnMensuelleADeduire() method.
     *
     * @return void
     */
    public function testSetNbDsnMensuelleADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDsnMensuelleADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelleADeduire());
    }

    /**
     * Tests the setNbDsnMensuelleFact() method.
     *
     * @return void
     */
    public function testSetNbDsnMensuelleFact(): void {

        $obj = new Compteur();

        $obj->setNbDsnMensuelleFact(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelleFact());
    }

    /**
     * Tests the setNbDue() method.
     *
     * @return void
     */
    public function testSetNbDue(): void {

        $obj = new Compteur();

        $obj->setNbDue(10);
        $this->assertEquals(10, $obj->getNbDue());
    }

    /**
     * Tests the setNbDueFact() method.
     *
     * @return void
     */
    public function testSetNbDueFact(): void {

        $obj = new Compteur();

        $obj->setNbDueFact(10);
        $this->assertEquals(10, $obj->getNbDueFact());
    }

    /**
     * Tests the setNbDueaDeduire() method.
     *
     * @return void
     */
    public function testSetNbDueaDeduire(): void {

        $obj = new Compteur();

        $obj->setNbDueaDeduire(10);
        $this->assertEquals(10, $obj->getNbDueaDeduire());
    }

    /**
     * Tests the setNbSoldeToutCompte() method.
     *
     * @return void
     */
    public function testSetNbSoldeToutCompte(): void {

        $obj = new Compteur();

        $obj->setNbSoldeToutCompte(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompte());
    }

    /**
     * Tests the setNbSoldeToutCompteADeduire() method.
     *
     * @return void
     */
    public function testSetNbSoldeToutCompteADeduire(): void {

        $obj = new Compteur();

        $obj->setNbSoldeToutCompteADeduire(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompteADeduire());
    }

    /**
     * Tests the setNbSoldeToutCompteFact() method.
     *
     * @return void
     */
    public function testSetNbSoldeToutCompteFact(): void {

        $obj = new Compteur();

        $obj->setNbSoldeToutCompteFact(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompteFact());
    }

    /**
     * Tests the setNbTdsRealisees() method.
     *
     * @return void
     */
    public function testSetNbTdsRealisees(): void {

        $obj = new Compteur();

        $obj->setNbTdsRealisees(10);
        $this->assertEquals(10, $obj->getNbTdsRealisees());
    }

    /**
     * Tests the setNbTdsRealiseesADeduire() method.
     *
     * @return void
     */
    public function testSetNbTdsRealiseesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbTdsRealiseesADeduire(10);
        $this->assertEquals(10, $obj->getNbTdsRealiseesADeduire());
    }

    /**
     * Tests the setNbTdsRealiseesFact() method.
     *
     * @return void
     */
    public function testSetNbTdsRealiseesFact(): void {

        $obj = new Compteur();

        $obj->setNbTdsRealiseesFact(10);
        $this->assertEquals(10, $obj->getNbTdsRealiseesFact());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new Compteur();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Compteur();

        $this->assertNull($obj->getNbAttesAssedic());
        $this->assertNull($obj->getNbAttesAssedicADeduire());
        $this->assertNull($obj->getNbAttesAssedicFact());
        $this->assertNull($obj->getNbAttesIjss());
        $this->assertNull($obj->getNbAttesIjssADeduire());
        $this->assertNull($obj->getNbAttesIjssAt());
        $this->assertNull($obj->getNbAttesIjssAtaDeduire());
        $this->assertNull($obj->getNbAttesIjssAtFact());
        $this->assertNull($obj->getNbAttesIjssFact());
        $this->assertNull($obj->getNbAttestEmploi());
        $this->assertNull($obj->getNbAttestEmploiADeduire());
        $this->assertNull($obj->getNbAttestEmploiFact());
        $this->assertNull($obj->getNbBulEdites());
        $this->assertNull($obj->getNbBulEditesADeduire());
        $this->assertNull($obj->getNbBulEditesFact());
        $this->assertNull($obj->getNbBulValides());
        $this->assertNull($obj->getNbBulValidesADeduire());
        $this->assertNull($obj->getNbBulValidesFact());
        $this->assertNull($obj->getNbCertifTravail());
        $this->assertNull($obj->getNbCertifTravailADeduire());
        $this->assertNull($obj->getNbCertifTravailFact());
        $this->assertNull($obj->getNbDadsEditees());
        $this->assertNull($obj->getNbDadsEditeesADeduire());
        $this->assertNull($obj->getNbDadsEditeesFact());
        $this->assertNull($obj->getNbDsnEvtArret());
        $this->assertNull($obj->getNbDsnEvtArretADeduire());
        $this->assertNull($obj->getNbDsnEvtArretFact());
        $this->assertNull($obj->getNbDsnEvtFinContrat());
        $this->assertNull($obj->getNbDsnEvtFinContratADeduire());
        $this->assertNull($obj->getNbDsnEvtFinContratFact());
        $this->assertNull($obj->getNbDsnMensuelle());
        $this->assertNull($obj->getNbDsnMensuelleADeduire());
        $this->assertNull($obj->getNbDsnMensuelleFact());
        $this->assertNull($obj->getNbDue());
        $this->assertNull($obj->getNbDueaDeduire());
        $this->assertNull($obj->getNbDueFact());
        $this->assertNull($obj->getNbDisquettesVirements());
        $this->assertNull($obj->getNbDisquettesVirementsADeduire());
        $this->assertNull($obj->getNbDisquettesVirementsFact());
        $this->assertNull($obj->getNbSoldeToutCompte());
        $this->assertNull($obj->getNbSoldeToutCompteADeduire());
        $this->assertNull($obj->getNbSoldeToutCompteFact());
        $this->assertNull($obj->getNbTdsRealisees());
        $this->assertNull($obj->getNbTdsRealiseesADeduire());
        $this->assertNull($obj->getNbTdsRealiseesFact());
        $this->assertNull($obj->getPeriode());
    }
}
