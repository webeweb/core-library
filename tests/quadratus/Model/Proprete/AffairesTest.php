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
use WBW\Library\Quadratus\Model\Proprete\Affaires;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affaires test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AffairesTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Affaires();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Affaires();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCaStatAnnuel() method.
     *
     * @return void
     */
    public function testSetCaStatAnnuel(): void {

        $obj = new Affaires();

        $obj->setCaStatAnnuel(10.092018);
        $this->assertEquals(10.092018, $obj->getCaStatAnnuel());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Affaires();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeAnalytique(): void {

        $obj = new Affaires();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Affaires();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCommercial() method.
     *
     * @return void
     */
    public function testSetCodeCommercial(): void {

        $obj = new Affaires();

        $obj->setCodeCommercial("codeCommercial");
        $this->assertEquals("codeCommercial", $obj->getCodeCommercial());
    }

    /**
     * Tests the setCodeFactor() method.
     *
     * @return void
     */
    public function testSetCodeFactor(): void {

        $obj = new Affaires();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new Affaires();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Affaires();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegMarge() method.
     *
     * @return void
     */
    public function testSetCodeRegMarge(): void {

        $obj = new Affaires();

        $obj->setCodeRegMarge("codeRegMarge");
        $this->assertEquals("codeRegMarge", $obj->getCodeRegMarge());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Affaires();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Affaires();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Affaires();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Tests the setDateDebAffaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebAffaire(): void {

        // Set a Date/time mock.
        $dateDebAffaire = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateDebAffaire($dateDebAffaire);
        $this->assertSame($dateDebAffaire, $obj->getDateDebAffaire());
    }

    /**
     * Tests the setDateDebAffaireDebMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebAffaireDebMois(): void {

        // Set a Date/time mock.
        $dateDebAffaireDebMois = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateDebAffaireDebMois($dateDebAffaireDebMois);
        $this->assertSame($dateDebAffaireDebMois, $obj->getDateDebAffaireDebMois());
    }

    /**
     * Tests the setDateFinAffaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAffaire(): void {

        // Set a Date/time mock.
        $dateFinAffaire = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateFinAffaire($dateFinAffaire);
        $this->assertSame($dateFinAffaire, $obj->getDateFinAffaire());
    }

    /**
     * Tests the setDateFinAffaireFinMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAffaireFinMois(): void {

        // Set a Date/time mock.
        $dateFinAffaireFinMois = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateFinAffaireFinMois($dateFinAffaireFinMois);
        $this->assertSame($dateFinAffaireFinMois, $obj->getDateFinAffaireFinMois());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setDateVente() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVente(): void {

        // Set a Date/time mock.
        $dateVente = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateVente($dateVente);
        $this->assertSame($dateVente, $obj->getDateVente());
    }

    /**
     * Tests the setFactureIsolee() method.
     *
     * @return void
     */
    public function testSetFactureIsolee(): void {

        $obj = new Affaires();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests the setGroupeSousTraite() method.
     *
     * @return void
     */
    public function testSetGroupeSousTraite(): void {

        $obj = new Affaires();

        $obj->setGroupeSousTraite("groupeSousTraite");
        $this->assertEquals("groupeSousTraite", $obj->getGroupeSousTraite());
    }

    /**
     * Tests the setNomAdresse() method.
     *
     * @return void
     */
    public function testSetNomAdresse(): void {

        $obj = new Affaires();

        $obj->setNomAdresse("nomAdresse");
        $this->assertEquals("nomAdresse", $obj->getNomAdresse());
    }

    /**
     * Tests the setNomAffaire() method.
     *
     * @return void
     */
    public function testSetNomAffaire(): void {

        $obj = new Affaires();

        $obj->setNomAffaire("nomAffaire");
        $this->assertEquals("nomAffaire", $obj->getNomAffaire());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new Affaires();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Affaires();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Affaires();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setReferenceFacture() method.
     *
     * @return void
     */
    public function testSetReferenceFacture(): void {

        $obj = new Affaires();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Tests the setReferenceFacture2() method.
     *
     * @return void
     */
    public function testSetReferenceFacture2(): void {

        $obj = new Affaires();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Affaires();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCaStatAnnuel());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodeFactor());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegMarge());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebAffaire());
        $this->assertNull($obj->getDateDebAffaireDebMois());
        $this->assertNull($obj->getDateFinAffaire());
        $this->assertNull($obj->getDateFinAffaireFinMois());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateVente());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getGroupeSousTraite());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomAffaire());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
    }
}
