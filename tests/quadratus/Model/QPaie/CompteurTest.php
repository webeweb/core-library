<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\Compteur;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Compteur test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CompteurTest extends AbstractTestCase {

    /**
     * Tests setNbAttesAssedic()
     *
     * @return void
     */
    public function testSetNbAttesAssedic(): void {

        $obj = new Compteur();

        $obj->setNbAttesAssedic(10);
        $this->assertEquals(10, $obj->getNbAttesAssedic());
    }

    /**
     * Tests setNbAttesAssedicADeduire()
     *
     * @return void
     */
    public function testSetNbAttesAssedicADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttesAssedicADeduire(10);
        $this->assertEquals(10, $obj->getNbAttesAssedicADeduire());
    }

    /**
     * Tests setNbAttesAssedicFact()
     *
     * @return void
     */
    public function testSetNbAttesAssedicFact(): void {

        $obj = new Compteur();

        $obj->setNbAttesAssedicFact(10);
        $this->assertEquals(10, $obj->getNbAttesAssedicFact());
    }

    /**
     * Tests setNbAttesIjss()
     *
     * @return void
     */
    public function testSetNbAttesIjss(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjss(10);
        $this->assertEquals(10, $obj->getNbAttesIjss());
    }

    /**
     * Tests setNbAttesIjssADeduire()
     *
     * @return void
     */
    public function testSetNbAttesIjssADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssADeduire(10);
        $this->assertEquals(10, $obj->getNbAttesIjssADeduire());
    }

    /**
     * Tests setNbAttesIjssAt()
     *
     * @return void
     */
    public function testSetNbAttesIjssAt(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssAt(10);
        $this->assertEquals(10, $obj->getNbAttesIjssAt());
    }

    /**
     * Tests setNbAttesIjssAtFact()
     *
     * @return void
     */
    public function testSetNbAttesIjssAtFact(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssAtFact(10);
        $this->assertEquals(10, $obj->getNbAttesIjssAtFact());
    }

    /**
     * Tests setNbAttesIjssAtaDeduire()
     *
     * @return void
     */
    public function testSetNbAttesIjssAtaDeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssAtaDeduire(10);
        $this->assertEquals(10, $obj->getNbAttesIjssAtaDeduire());
    }

    /**
     * Tests setNbAttesIjssFact()
     *
     * @return void
     */
    public function testSetNbAttesIjssFact(): void {

        $obj = new Compteur();

        $obj->setNbAttesIjssFact(10);
        $this->assertEquals(10, $obj->getNbAttesIjssFact());
    }

    /**
     * Tests setNbAttestEmploi()
     *
     * @return void
     */
    public function testSetNbAttestEmploi(): void {

        $obj = new Compteur();

        $obj->setNbAttestEmploi(10);
        $this->assertEquals(10, $obj->getNbAttestEmploi());
    }

    /**
     * Tests setNbAttestEmploiADeduire()
     *
     * @return void
     */
    public function testSetNbAttestEmploiADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAttestEmploiADeduire(10);
        $this->assertEquals(10, $obj->getNbAttestEmploiADeduire());
    }

    /**
     * Tests setNbAttestEmploiFact()
     *
     * @return void
     */
    public function testSetNbAttestEmploiFact(): void {

        $obj = new Compteur();

        $obj->setNbAttestEmploiFact(10);
        $this->assertEquals(10, $obj->getNbAttestEmploiFact());
    }

    /**
     * Tests setNbBulEdites()
     *
     * @return void
     */
    public function testSetNbBulEdites(): void {

        $obj = new Compteur();

        $obj->setNbBulEdites(10);
        $this->assertEquals(10, $obj->getNbBulEdites());
    }

    /**
     * Tests setNbBulEditesADeduire()
     *
     * @return void
     */
    public function testSetNbBulEditesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBulEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbBulEditesADeduire());
    }

    /**
     * Tests setNbBulEditesFact()
     *
     * @return void
     */
    public function testSetNbBulEditesFact(): void {

        $obj = new Compteur();

        $obj->setNbBulEditesFact(10);
        $this->assertEquals(10, $obj->getNbBulEditesFact());
    }

    /**
     * Tests setNbBulValides()
     *
     * @return void
     */
    public function testSetNbBulValides(): void {

        $obj = new Compteur();

        $obj->setNbBulValides(10);
        $this->assertEquals(10, $obj->getNbBulValides());
    }

    /**
     * Tests setNbBulValidesADeduire()
     *
     * @return void
     */
    public function testSetNbBulValidesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBulValidesADeduire(10);
        $this->assertEquals(10, $obj->getNbBulValidesADeduire());
    }

    /**
     * Tests setNbBulValidesFact()
     *
     * @return void
     */
    public function testSetNbBulValidesFact(): void {

        $obj = new Compteur();

        $obj->setNbBulValidesFact(10);
        $this->assertEquals(10, $obj->getNbBulValidesFact());
    }

    /**
     * Tests setNbCertifTravail()
     *
     * @return void
     */
    public function testSetNbCertifTravail(): void {

        $obj = new Compteur();

        $obj->setNbCertifTravail(10);
        $this->assertEquals(10, $obj->getNbCertifTravail());
    }

    /**
     * Tests setNbCertifTravailADeduire()
     *
     * @return void
     */
    public function testSetNbCertifTravailADeduire(): void {

        $obj = new Compteur();

        $obj->setNbCertifTravailADeduire(10);
        $this->assertEquals(10, $obj->getNbCertifTravailADeduire());
    }

    /**
     * Tests setNbCertifTravailFact()
     *
     * @return void
     */
    public function testSetNbCertifTravailFact(): void {

        $obj = new Compteur();

        $obj->setNbCertifTravailFact(10);
        $this->assertEquals(10, $obj->getNbCertifTravailFact());
    }

    /**
     * Tests setNbDadsEditees()
     *
     * @return void
     */
    public function testSetNbDadsEditees(): void {

        $obj = new Compteur();

        $obj->setNbDadsEditees(10);
        $this->assertEquals(10, $obj->getNbDadsEditees());
    }

    /**
     * Tests setNbDadsEditeesADeduire()
     *
     * @return void
     */
    public function testSetNbDadsEditeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDadsEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbDadsEditeesADeduire());
    }

    /**
     * Tests setNbDadsEditeesFact()
     *
     * @return void
     */
    public function testSetNbDadsEditeesFact(): void {

        $obj = new Compteur();

        $obj->setNbDadsEditeesFact(10);
        $this->assertEquals(10, $obj->getNbDadsEditeesFact());
    }

    /**
     * Tests setNbDisquettesVirements()
     *
     * @return void
     */
    public function testSetNbDisquettesVirements(): void {

        $obj = new Compteur();

        $obj->setNbDisquettesVirements(10);
        $this->assertEquals(10, $obj->getNbDisquettesVirements());
    }

    /**
     * Tests setNbDisquettesVirementsADeduire()
     *
     * @return void
     */
    public function testSetNbDisquettesVirementsADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDisquettesVirementsADeduire(10);
        $this->assertEquals(10, $obj->getNbDisquettesVirementsADeduire());
    }

    /**
     * Tests setNbDisquettesVirementsFact()
     *
     * @return void
     */
    public function testSetNbDisquettesVirementsFact(): void {

        $obj = new Compteur();

        $obj->setNbDisquettesVirementsFact(10);
        $this->assertEquals(10, $obj->getNbDisquettesVirementsFact());
    }

    /**
     * Tests setNbDsnEvtArret()
     *
     * @return void
     */
    public function testSetNbDsnEvtArret(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtArret(10);
        $this->assertEquals(10, $obj->getNbDsnEvtArret());
    }

    /**
     * Tests setNbDsnEvtArretADeduire()
     *
     * @return void
     */
    public function testSetNbDsnEvtArretADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtArretADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnEvtArretADeduire());
    }

    /**
     * Tests setNbDsnEvtArretFact()
     *
     * @return void
     */
    public function testSetNbDsnEvtArretFact(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtArretFact(10);
        $this->assertEquals(10, $obj->getNbDsnEvtArretFact());
    }

    /**
     * Tests setNbDsnEvtFinContrat()
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContrat(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtFinContrat(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContrat());
    }

    /**
     * Tests setNbDsnEvtFinContratADeduire()
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContratADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtFinContratADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContratADeduire());
    }

    /**
     * Tests setNbDsnEvtFinContratFact()
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContratFact(): void {

        $obj = new Compteur();

        $obj->setNbDsnEvtFinContratFact(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContratFact());
    }

    /**
     * Tests setNbDsnMensuelle()
     *
     * @return void
     */
    public function testSetNbDsnMensuelle(): void {

        $obj = new Compteur();

        $obj->setNbDsnMensuelle(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelle());
    }

    /**
     * Tests setNbDsnMensuelleADeduire()
     *
     * @return void
     */
    public function testSetNbDsnMensuelleADeduire(): void {

        $obj = new Compteur();

        $obj->setNbDsnMensuelleADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelleADeduire());
    }

    /**
     * Tests setNbDsnMensuelleFact()
     *
     * @return void
     */
    public function testSetNbDsnMensuelleFact(): void {

        $obj = new Compteur();

        $obj->setNbDsnMensuelleFact(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelleFact());
    }

    /**
     * Tests setNbDue()
     *
     * @return void
     */
    public function testSetNbDue(): void {

        $obj = new Compteur();

        $obj->setNbDue(10);
        $this->assertEquals(10, $obj->getNbDue());
    }

    /**
     * Tests setNbDueFact()
     *
     * @return void
     */
    public function testSetNbDueFact(): void {

        $obj = new Compteur();

        $obj->setNbDueFact(10);
        $this->assertEquals(10, $obj->getNbDueFact());
    }

    /**
     * Tests setNbDueaDeduire()
     *
     * @return void
     */
    public function testSetNbDueaDeduire(): void {

        $obj = new Compteur();

        $obj->setNbDueaDeduire(10);
        $this->assertEquals(10, $obj->getNbDueaDeduire());
    }

    /**
     * Tests setNbSoldeToutCompte()
     *
     * @return void
     */
    public function testSetNbSoldeToutCompte(): void {

        $obj = new Compteur();

        $obj->setNbSoldeToutCompte(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompte());
    }

    /**
     * Tests setNbSoldeToutCompteADeduire()
     *
     * @return void
     */
    public function testSetNbSoldeToutCompteADeduire(): void {

        $obj = new Compteur();

        $obj->setNbSoldeToutCompteADeduire(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompteADeduire());
    }

    /**
     * Tests setNbSoldeToutCompteFact()
     *
     * @return void
     */
    public function testSetNbSoldeToutCompteFact(): void {

        $obj = new Compteur();

        $obj->setNbSoldeToutCompteFact(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompteFact());
    }

    /**
     * Tests setNbTdsRealisees()
     *
     * @return void
     */
    public function testSetNbTdsRealisees(): void {

        $obj = new Compteur();

        $obj->setNbTdsRealisees(10);
        $this->assertEquals(10, $obj->getNbTdsRealisees());
    }

    /**
     * Tests setNbTdsRealiseesADeduire()
     *
     * @return void
     */
    public function testSetNbTdsRealiseesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbTdsRealiseesADeduire(10);
        $this->assertEquals(10, $obj->getNbTdsRealiseesADeduire());
    }

    /**
     * Tests setNbTdsRealiseesFact()
     *
     * @return void
     */
    public function testSetNbTdsRealiseesFact(): void {

        $obj = new Compteur();

        $obj->setNbTdsRealiseesFact(10);
        $this->assertEquals(10, $obj->getNbTdsRealiseesFact());
    }

    /**
     * Tests setPeriode()
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
     * Tests __construct()
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
