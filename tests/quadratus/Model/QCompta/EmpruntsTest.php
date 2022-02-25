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
use Exception;
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
     * Tests setAEchoirEchu()
     *
     * @return void
     */
    public function testSetAEchoirEchu(): void {

        $obj = new Emprunts();

        $obj->setAEchoirEchu("aEchoirEchu");
        $this->assertEquals("aEchoirEchu", $obj->getAEchoirEchu());
    }

    /**
     * Tests setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new Emprunts();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Emprunts();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Emprunts();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests setCptAssuranceEmprunt()
     *
     * @return void
     */
    public function testSetCptAssuranceEmprunt(): void {

        $obj = new Emprunts();

        $obj->setCptAssuranceEmprunt("cptAssuranceEmprunt");
        $this->assertEquals("cptAssuranceEmprunt", $obj->getCptAssuranceEmprunt());
    }

    /**
     * Tests setCptEmprunt()
     *
     * @return void
     */
    public function testSetCptEmprunt(): void {

        $obj = new Emprunts();

        $obj->setCptEmprunt("cptEmprunt");
        $this->assertEquals("cptEmprunt", $obj->getCptEmprunt());
    }

    /**
     * Tests setCptInteretEmprunt()
     *
     * @return void
     */
    public function testSetCptInteretEmprunt(): void {

        $obj = new Emprunts();

        $obj->setCptInteretEmprunt("cptInteretEmprunt");
        $this->assertEquals("cptInteretEmprunt", $obj->getCptInteretEmprunt());
    }

    /**
     * Tests setDateOuverture()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateOuverture(): void {

        // Set a Date/time mock.
        $dateOuverture = new DateTime("2018-09-10");

        $obj = new Emprunts();

        $obj->setDateOuverture($dateOuverture);
        $this->assertSame($dateOuverture, $obj->getDateOuverture());
    }

    /**
     * Tests setDatePremiereEcheance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePremiereEcheance(): void {

        // Set a Date/time mock.
        $datePremiereEcheance = new DateTime("2018-09-10");

        $obj = new Emprunts();

        $obj->setDatePremiereEcheance($datePremiereEcheance);
        $this->assertSame($datePremiereEcheance, $obj->getDatePremiereEcheance());
    }

    /**
     * Tests setDiffere()
     *
     * @return void
     */
    public function testSetDiffere(): void {

        $obj = new Emprunts();

        $obj->setDiffere(true);
        $this->assertEquals(true, $obj->getDiffere());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new Emprunts();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests setEmpruntEnFrancs()
     *
     * @return void
     */
    public function testSetEmpruntEnFrancs(): void {

        $obj = new Emprunts();

        $obj->setEmpruntEnFrancs(true);
        $this->assertEquals(true, $obj->getEmpruntEnFrancs());
    }

    /**
     * Tests setIdentification()
     *
     * @return void
     */
    public function testSetIdentification(): void {

        $obj = new Emprunts();

        $obj->setIdentification("identification");
        $this->assertEquals("identification", $obj->getIdentification());
    }

    /**
     * Tests setMoisAnnee()
     *
     * @return void
     */
    public function testSetMoisAnnee(): void {

        $obj = new Emprunts();

        $obj->setMoisAnnee("moisAnnee");
        $this->assertEquals("moisAnnee", $obj->getMoisAnnee());
    }

    /**
     * Tests setMontantAssurance()
     *
     * @return void
     */
    public function testSetMontantAssurance(): void {

        $obj = new Emprunts();

        $obj->setMontantAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAssurance());
    }

    /**
     * Tests setMontantEmprunte()
     *
     * @return void
     */
    public function testSetMontantEmprunte(): void {

        $obj = new Emprunts();

        $obj->setMontantEmprunte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantEmprunte());
    }

    /**
     * Tests setMtCapitalFixeRemb()
     *
     * @return void
     */
    public function testSetMtCapitalFixeRemb(): void {

        $obj = new Emprunts();

        $obj->setMtCapitalFixeRemb(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCapitalFixeRemb());
    }

    /**
     * Tests setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new Emprunts();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Emprunts();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Emprunts();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Emprunts();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new Emprunts();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Emprunts();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests setTauxAssurance()
     *
     * @return void
     */
    public function testSetTauxAssurance(): void {

        $obj = new Emprunts();

        $obj->setTauxAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAssurance());
    }

    /**
     * Tests setTauxInteret()
     *
     * @return void
     */
    public function testSetTauxInteret(): void {

        $obj = new Emprunts();

        $obj->setTauxInteret(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxInteret());
    }

    /**
     * Tests setTypeInFine()
     *
     * @return void
     */
    public function testSetTypeInFine(): void {

        $obj = new Emprunts();

        $obj->setTypeInFine(true);
        $this->assertEquals(true, $obj->getTypeInFine());
    }

    /**
     * Tests __construct()
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
