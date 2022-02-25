<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PlansEnTeteBonTrav;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Plans en tete bon trav test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PlansEnTeteBonTravTest extends AbstractTestCase {

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodePays()
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setDtAvantDernPrepa()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtAvantDernPrepa(): void {

        // Set a Date/time mock.
        $dtAvantDernPrepa = new DateTime("2018-09-10");

        $obj = new PlansEnTeteBonTrav();

        $obj->setDtAvantDernPrepa($dtAvantDernPrepa);
        $this->assertSame($dtAvantDernPrepa, $obj->getDtAvantDernPrepa());
    }

    /**
     * Tests setDtDernPrepa()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernPrepa(): void {

        // Set a Date/time mock.
        $dtDernPrepa = new DateTime("2018-09-10");

        $obj = new PlansEnTeteBonTrav();

        $obj->setDtDernPrepa($dtDernPrepa);
        $this->assertSame($dtDernPrepa, $obj->getDtDernPrepa());
    }

    /**
     * Tests setDtValiditeFactDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDeb(): void {

        // Set a Date/time mock.
        $dtValiditeFactDeb = new DateTime("2018-09-10");

        $obj = new PlansEnTeteBonTrav();

        $obj->setDtValiditeFactDeb($dtValiditeFactDeb);
        $this->assertSame($dtValiditeFactDeb, $obj->getDtValiditeFactDeb());
    }

    /**
     * Tests setDtValiditeFactDebDebMois()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDebDebMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactDebDebMois = new DateTime("2018-09-10");

        $obj = new PlansEnTeteBonTrav();

        $obj->setDtValiditeFactDebDebMois($dtValiditeFactDebDebMois);
        $this->assertSame($dtValiditeFactDebDebMois, $obj->getDtValiditeFactDebDebMois());
    }

    /**
     * Tests setDtValiditeFactFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFin(): void {

        // Set a Date/time mock.
        $dtValiditeFactFin = new DateTime("2018-09-10");

        $obj = new PlansEnTeteBonTrav();

        $obj->setDtValiditeFactFin($dtValiditeFactFin);
        $this->assertSame($dtValiditeFactFin, $obj->getDtValiditeFactFin());
    }

    /**
     * Tests setDtValiditeFactFinFinMois()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFinFinMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactFinFinMois = new DateTime("2018-09-10");

        $obj = new PlansEnTeteBonTrav();

        $obj->setDtValiditeFactFinFinMois($dtValiditeFactFinFinMois);
        $this->assertSame($dtValiditeFactFinFinMois, $obj->getDtValiditeFactFinFinMois());
    }

    /**
     * Tests setJourFact()
     *
     * @return void
     */
    public function testSetJourFact(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setJourFact("jourFact");
        $this->assertEquals("jourFact", $obj->getJourFact());
    }

    /**
     * Tests setMontantHtpx()
     *
     * @return void
     */
    public function testSetMontantHtpx(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setMontantHtpx(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtpx());
    }

    /**
     * Tests setMontantHtvm()
     *
     * @return void
     */
    public function testSetMontantHtvm(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setMontantHtvm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtvm());
    }

    /**
     * Tests setNomClient()
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests setNomSuite()
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests setNomSuite2()
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests setNomSuite3()
     *
     * @return void
     */
    public function testSetNomSuite3(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setReferenceFacture()
     *
     * @return void
     */
    public function testSetReferenceFacture(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Tests setReferenceFacture2()
     *
     * @return void
     */
    public function testSetReferenceFacture2(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

    /**
     * Tests setRepriseDatesEmployes()
     *
     * @return void
     */
    public function testSetRepriseDatesEmployes(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setRepriseDatesEmployes(true);
        $this->assertEquals(true, $obj->getRepriseDatesEmployes());
    }

    /**
     * Tests setTypeAdresse()
     *
     * @return void
     */
    public function testSetTypeAdresse(): void {

        $obj = new PlansEnTeteBonTrav();

        $obj->setTypeAdresse("typeAdresse");
        $this->assertEquals("typeAdresse", $obj->getTypeAdresse());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PlansEnTeteBonTrav();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDtAvantDernPrepa());
        $this->assertNull($obj->getDtDernPrepa());
        $this->assertNull($obj->getDtValiditeFactDeb());
        $this->assertNull($obj->getDtValiditeFactDebDebMois());
        $this->assertNull($obj->getDtValiditeFactFin());
        $this->assertNull($obj->getDtValiditeFactFinFinMois());
        $this->assertNull($obj->getJourFact());
        $this->assertNull($obj->getMontantHtpx());
        $this->assertNull($obj->getMontantHtvm());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomSuite3());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
        $this->assertNull($obj->getRepriseDatesEmployes());
        $this->assertNull($obj->getTypeAdresse());
    }
}
