<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\Centres;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Centres test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CentresTest extends AbstractTestCase {

    /**
     * Test setAdresseRue1()
     *
     * @return void
     */
    public function testSetAdresseRue1(): void {

        $obj = new Centres();

        $obj->setAdresseRue1("adresseRue1");
        $this->assertEquals("adresseRue1", $obj->getAdresseRue1());
    }

    /**
     * Test setAdresseRue2()
     *
     * @return void
     */
    public function testSetAdresseRue2(): void {

        $obj = new Centres();

        $obj->setAdresseRue2("adresseRue2");
        $this->assertEquals("adresseRue2", $obj->getAdresseRue2());
    }

    /**
     * Test setAdresseVille()
     *
     * @return void
     */
    public function testSetAdresseVille(): void {

        $obj = new Centres();

        $obj->setAdresseVille("adresseVille");
        $this->assertEquals("adresseVille", $obj->getAdresseVille());
    }

    /**
     * Test setCentreInactif()
     *
     * @return void
     */
    public function testSetCentreInactif(): void {

        $obj = new Centres();

        $obj->setCentreInactif(true);
        $this->assertTrue($obj->getCentreInactif());
    }

    /**
     * Test setCleRepartition()
     *
     * @return void
     */
    public function testSetCleRepartition(): void {

        $obj = new Centres();

        $obj->setCleRepartition("cleRepartition");
        $this->assertEquals("cleRepartition", $obj->getCleRepartition());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Centres();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Centres();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateDevis()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDevis(): void {

        // Set a Date/time mock.
        $dateDevis = new DateTime("2018-09-10");

        $obj = new Centres();

        $obj->setDateDevis($dateDevis);
        $this->assertSame($dateDevis, $obj->getDateDevis());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new Centres();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Centres();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setMargeDirecte()
     *
     * @return void
     */
    public function testSetMargeDirecte(): void {

        $obj = new Centres();

        $obj->setMargeDirecte(true);
        $this->assertTrue($obj->getMargeDirecte());
    }

    /**
     * Test setNiveauRepartition()
     *
     * @return void
     */
    public function testSetNiveauRepartition(): void {

        $obj = new Centres();

        $obj->setNiveauRepartition("niveauRepartition");
        $this->assertEquals("niveauRepartition", $obj->getNiveauRepartition());
    }

    /**
     * Test setOrdreEdition()
     *
     * @return void
     */
    public function testSetOrdreEdition(): void {

        $obj = new Centres();

        $obj->setOrdreEdition(10);
        $this->assertEquals(10, $obj->getOrdreEdition());
    }

    /**
     * Test setRepartitionAna()
     *
     * @return void
     */
    public function testSetRepartitionAna(): void {

        $obj = new Centres();

        $obj->setRepartitionAna("repartitionAna");
        $this->assertEquals("repartitionAna", $obj->getRepartitionAna());
    }

    /**
     * Test setRepartitionAuto()
     *
     * @return void
     */
    public function testSetRepartitionAuto(): void {

        $obj = new Centres();

        $obj->setRepartitionAuto(true);
        $this->assertTrue($obj->getRepartitionAuto());
    }

    /**
     * Test setResponsable()
     *
     * @return void
     */
    public function testSetResponsable(): void {

        $obj = new Centres();

        $obj->setResponsable("responsable");
        $this->assertEquals("responsable", $obj->getResponsable());
    }

    /**
     * Test setRestrictions()
     *
     * @return void
     */
    public function testSetRestrictions(): void {

        $obj = new Centres();

        $obj->setRestrictions("restrictions");
        $this->assertEquals("restrictions", $obj->getRestrictions());
    }

    /**
     * Test setSuiviAnneeRecolte()
     *
     * @return void
     */
    public function testSetSuiviAnneeRecolte(): void {

        $obj = new Centres();

        $obj->setSuiviAnneeRecolte(true);
        $this->assertTrue($obj->getSuiviAnneeRecolte());
    }

    /**
     * Test setSuperficie()
     *
     * @return void
     */
    public function testSetSuperficie(): void {

        $obj = new Centres();

        $obj->setSuperficie(10.092018);
        $this->assertEquals(10.092018, $obj->getSuperficie());
    }

    /**
     * Test setTypeCentre()
     *
     * @return void
     */
    public function testSetTypeCentre(): void {

        $obj = new Centres();

        $obj->setTypeCentre("typeCentre");
        $this->assertEquals("typeCentre", $obj->getTypeCentre());
    }

    /**
     * Test setTypeSuivi()
     *
     * @return void
     */
    public function testSetTypeSuivi(): void {

        $obj = new Centres();

        $obj->setTypeSuivi("typeSuivi");
        $this->assertEquals("typeSuivi", $obj->getTypeSuivi());
    }

    /**
     * Test setTypeSuiviAutreTexte()
     *
     * @return void
     */
    public function testSetTypeSuiviAutreTexte(): void {

        $obj = new Centres();

        $obj->setTypeSuiviAutreTexte("typeSuiviAutreTexte");
        $this->assertEquals("typeSuiviAutreTexte", $obj->getTypeSuiviAutreTexte());
    }

    /**
     * Test setTypeSuiviAutreValeur()
     *
     * @return void
     */
    public function testSetTypeSuiviAutreValeur(): void {

        $obj = new Centres();

        $obj->setTypeSuiviAutreValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getTypeSuiviAutreValeur());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Centres();

        $this->assertNull($obj->getAdresseRue1());
        $this->assertNull($obj->getAdresseRue2());
        $this->assertNull($obj->getAdresseVille());
        $this->assertNull($obj->getCentreInactif());
        $this->assertNull($obj->getCleRepartition());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDevis());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMargeDirecte());
        $this->assertNull($obj->getNiveauRepartition());
        $this->assertNull($obj->getOrdreEdition());
        $this->assertNull($obj->getRepartitionAna());
        $this->assertNull($obj->getRepartitionAuto());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getRestrictions());
        $this->assertNull($obj->getSuiviAnneeRecolte());
        $this->assertNull($obj->getSuperficie());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getTypeSuiviAutreTexte());
        $this->assertNull($obj->getTypeSuiviAutreValeur());
    }
}
