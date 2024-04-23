<?php

declare(strict_types = 1);

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
use WBW\Library\Quadratus\Model\QCompta\Emprunts;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emprunts test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class EmpruntsTest extends AbstractTestCase {

    /**
     * Test setAEchoirEchu()
     *
     * @return void
     */
    public function testSetAEchoirEchu(): void {

        $obj = new Emprunts();

        $obj->setAEchoirEchu("aEchoirEchu");
        $this->assertEquals("aEchoirEchu", $obj->getAEchoirEchu());
    }

    /**
     * Test setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new Emprunts();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Emprunts();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Emprunts();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Test setCptAssuranceEmprunt()
     *
     * @return void
     */
    public function testSetCptAssuranceEmprunt(): void {

        $obj = new Emprunts();

        $obj->setCptAssuranceEmprunt("cptAssuranceEmprunt");
        $this->assertEquals("cptAssuranceEmprunt", $obj->getCptAssuranceEmprunt());
    }

    /**
     * Test setCptEmprunt()
     *
     * @return void
     */
    public function testSetCptEmprunt(): void {

        $obj = new Emprunts();

        $obj->setCptEmprunt("cptEmprunt");
        $this->assertEquals("cptEmprunt", $obj->getCptEmprunt());
    }

    /**
     * Test setCptInteretEmprunt()
     *
     * @return void
     */
    public function testSetCptInteretEmprunt(): void {

        $obj = new Emprunts();

        $obj->setCptInteretEmprunt("cptInteretEmprunt");
        $this->assertEquals("cptInteretEmprunt", $obj->getCptInteretEmprunt());
    }

    /**
     * Test setDateOuverture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateOuverture(): void {

        // Set a Date/time mock.
        $dateOuverture = new DateTime("2018-09-10");

        $obj = new Emprunts();

        $obj->setDateOuverture($dateOuverture);
        $this->assertSame($dateOuverture, $obj->getDateOuverture());
    }

    /**
     * Test setDatePremiereEcheance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePremiereEcheance(): void {

        // Set a Date/time mock.
        $datePremiereEcheance = new DateTime("2018-09-10");

        $obj = new Emprunts();

        $obj->setDatePremiereEcheance($datePremiereEcheance);
        $this->assertSame($datePremiereEcheance, $obj->getDatePremiereEcheance());
    }

    /**
     * Test setDiffere()
     *
     * @return void
     */
    public function testSetDiffere(): void {

        $obj = new Emprunts();

        $obj->setDiffere(true);
        $this->assertTrue($obj->getDiffere());
    }

    /**
     * Test setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new Emprunts();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Test setEmpruntEnFrancs()
     *
     * @return void
     */
    public function testSetEmpruntEnFrancs(): void {

        $obj = new Emprunts();

        $obj->setEmpruntEnFrancs(true);
        $this->assertTrue($obj->getEmpruntEnFrancs());
    }

    /**
     * Test setIdentification()
     *
     * @return void
     */
    public function testSetIdentification(): void {

        $obj = new Emprunts();

        $obj->setIdentification("identification");
        $this->assertEquals("identification", $obj->getIdentification());
    }

    /**
     * Test setMoisAnnee()
     *
     * @return void
     */
    public function testSetMoisAnnee(): void {

        $obj = new Emprunts();

        $obj->setMoisAnnee("moisAnnee");
        $this->assertEquals("moisAnnee", $obj->getMoisAnnee());
    }

    /**
     * Test setMontantAssurance()
     *
     * @return void
     */
    public function testSetMontantAssurance(): void {

        $obj = new Emprunts();

        $obj->setMontantAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAssurance());
    }

    /**
     * Test setMontantEmprunte()
     *
     * @return void
     */
    public function testSetMontantEmprunte(): void {

        $obj = new Emprunts();

        $obj->setMontantEmprunte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantEmprunte());
    }

    /**
     * Test setMtCapitalFixeRemb()
     *
     * @return void
     */
    public function testSetMtCapitalFixeRemb(): void {

        $obj = new Emprunts();

        $obj->setMtCapitalFixeRemb(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCapitalFixeRemb());
    }

    /**
     * Test setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new Emprunts();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Test setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Emprunts();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Emprunts();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Test setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Emprunts();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Test setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new Emprunts();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Test setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Emprunts();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Test setTauxAssurance()
     *
     * @return void
     */
    public function testSetTauxAssurance(): void {

        $obj = new Emprunts();

        $obj->setTauxAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAssurance());
    }

    /**
     * Test setTauxInteret()
     *
     * @return void
     */
    public function testSetTauxInteret(): void {

        $obj = new Emprunts();

        $obj->setTauxInteret(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxInteret());
    }

    /**
     * Test setTypeInFine()
     *
     * @return void
     */
    public function testSetTypeInFine(): void {

        $obj = new Emprunts();

        $obj->setTypeInFine(true);
        $this->assertTrue($obj->getTypeInFine());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Emprunts();

        $this->assertNull($obj->getAEchoirEchu());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCptAssuranceEmprunt());
        $this->assertNull($obj->getCptEmprunt());
        $this->assertNull($obj->getCptInteretEmprunt());
        $this->assertNull($obj->getDateOuverture());
        $this->assertNull($obj->getDatePremiereEcheance());
        $this->assertNull($obj->getDiffere());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getEmpruntEnFrancs());
        $this->assertNull($obj->getIdentification());
        $this->assertNull($obj->getMoisAnnee());
        $this->assertNull($obj->getMontantAssurance());
        $this->assertNull($obj->getMontantEmprunte());
        $this->assertNull($obj->getMtCapitalFixeRemb());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getTauxAssurance());
        $this->assertNull($obj->getTauxInteret());
        $this->assertNull($obj->getTypeInFine());
    }
}
