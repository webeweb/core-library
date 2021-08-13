<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PlansEnTete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Plans en tete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PlansEnTeteTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new PlansEnTete();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new PlansEnTete();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new PlansEnTete();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PlansEnTete();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PlansEnTete();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PlansEnTete();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new PlansEnTete();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new PlansEnTete();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new PlansEnTete();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new PlansEnTete();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setDateRevision() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Tests the setDtAvantDernPrepa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtAvantDernPrepa(): void {

        // Set a Date/time mock.
        $dtAvantDernPrepa = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDtAvantDernPrepa($dtAvantDernPrepa);
        $this->assertSame($dtAvantDernPrepa, $obj->getDtAvantDernPrepa());
    }

    /**
     * Tests the setDtDernPrepa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernPrepa(): void {

        // Set a Date/time mock.
        $dtDernPrepa = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDtDernPrepa($dtDernPrepa);
        $this->assertSame($dtDernPrepa, $obj->getDtDernPrepa());
    }

    /**
     * Tests the setDtValiditeFactDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDeb(): void {

        // Set a Date/time mock.
        $dtValiditeFactDeb = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactDeb($dtValiditeFactDeb);
        $this->assertSame($dtValiditeFactDeb, $obj->getDtValiditeFactDeb());
    }

    /**
     * Tests the setDtValiditeFactDebDebMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDebDebMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactDebDebMois = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactDebDebMois($dtValiditeFactDebDebMois);
        $this->assertSame($dtValiditeFactDebDebMois, $obj->getDtValiditeFactDebDebMois());
    }

    /**
     * Tests the setDtValiditeFactFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFin(): void {

        // Set a Date/time mock.
        $dtValiditeFactFin = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactFin($dtValiditeFactFin);
        $this->assertSame($dtValiditeFactFin, $obj->getDtValiditeFactFin());
    }

    /**
     * Tests the setDtValiditeFactFinFinMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFinFinMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactFinFinMois = new DateTime("2018-09-10");

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactFinFinMois($dtValiditeFactFinFinMois);
        $this->assertSame($dtValiditeFactFinFinMois, $obj->getDtValiditeFactFinFinMois());
    }

    /**
     * Tests the setJourFact() method.
     *
     * @return void
     */
    public function testSetJourFact(): void {

        $obj = new PlansEnTete();

        $obj->setJourFact("jourFact");
        $this->assertEquals("jourFact", $obj->getJourFact());
    }

    /**
     * Tests the setMontantHtpx() method.
     *
     * @return void
     */
    public function testSetMontantHtpx(): void {

        $obj = new PlansEnTete();

        $obj->setMontantHtpx(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtpx());
    }

    /**
     * Tests the setMontantHtvm() method.
     *
     * @return void
     */
    public function testSetMontantHtvm(): void {

        $obj = new PlansEnTete();

        $obj->setMontantHtvm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtvm());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new PlansEnTete();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new PlansEnTete();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuite2() method.
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new PlansEnTete();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests the setNomSuite3() method.
     *
     * @return void
     */
    public function testSetNomSuite3(): void {

        $obj = new PlansEnTete();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new PlansEnTete();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PlansEnTete();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new PlansEnTete();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumeroCommandeWebFt() method.
     *
     * @return void
     */
    public function testSetNumeroCommandeWebFt(): void {

        $obj = new PlansEnTete();

        $obj->setNumeroCommandeWebFt("numeroCommandeWebFt");
        $this->assertEquals("numeroCommandeWebFt", $obj->getNumeroCommandeWebFt());
    }

    /**
     * Tests the setNumeroDevis() method.
     *
     * @return void
     */
    public function testSetNumeroDevis(): void {

        $obj = new PlansEnTete();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests the setReferenceFacture() method.
     *
     * @return void
     */
    public function testSetReferenceFacture(): void {

        $obj = new PlansEnTete();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Tests the setReferenceFacture2() method.
     *
     * @return void
     */
    public function testSetReferenceFacture2(): void {

        $obj = new PlansEnTete();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

    /**
     * Tests the setRevisionAnnuelle() method.
     *
     * @return void
     */
    public function testSetRevisionAnnuelle(): void {

        $obj = new PlansEnTete();

        $obj->setRevisionAnnuelle(true);
        $this->assertEquals(true, $obj->getRevisionAnnuelle());
    }

    /**
     * Tests the setTypeAdresse() method.
     *
     * @return void
     */
    public function testSetTypeAdresse(): void {

        $obj = new PlansEnTete();

        $obj->setTypeAdresse("typeAdresse");
        $this->assertEquals("typeAdresse", $obj->getTypeAdresse());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PlansEnTete();

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
        $this->assertNull($obj->getDateRevision());
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
        $this->assertNull($obj->getNumeroCommandeWebFt());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
        $this->assertNull($obj->getRevisionAnnuelle());
        $this->assertNull($obj->getTypeAdresse());
    }
}
