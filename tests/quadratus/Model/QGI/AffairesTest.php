<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Affaires;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affaires test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AffairesTest extends AbstractTestCase {

    /**
     * Tests setClientDonneurOrdre()
     *
     * @return void
     */
    public function testSetClientDonneurOrdre(): void {

        $obj = new Affaires();

        $obj->setClientDonneurOrdre("clientDonneurOrdre");
        $this->assertEquals("clientDonneurOrdre", $obj->getClientDonneurOrdre());
    }

    /**
     * Tests setClientPayeur()
     *
     * @return void
     */
    public function testSetClientPayeur(): void {

        $obj = new Affaires();

        $obj->setClientPayeur("clientPayeur");
        $this->assertEquals("clientPayeur", $obj->getClientPayeur());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Affaires();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAvenant()
     *
     * @return void
     */
    public function testSetCodeAvenant(): void {

        $obj = new Affaires();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests setCodeColCreat()
     *
     * @return void
     */
    public function testSetCodeColCreat(): void {

        $obj = new Affaires();

        $obj->setCodeColCreat("codeColCreat");
        $this->assertEquals("codeColCreat", $obj->getCodeColCreat());
    }

    /**
     * Tests setCodeColModif()
     *
     * @return void
     */
    public function testSetCodeColModif(): void {

        $obj = new Affaires();

        $obj->setCodeColModif("codeColModif");
        $this->assertEquals("codeColModif", $obj->getCodeColModif());
    }

    /**
     * Tests setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new Affaires();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests setCoutHeureTheo()
     *
     * @return void
     */
    public function testSetCoutHeureTheo(): void {

        $obj = new Affaires();

        $obj->setCoutHeureTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutHeureTheo());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateDebutPrevue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutPrevue(): void {

        // Set a Date/time mock.
        $dateDebutPrevue = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateDebutPrevue($dateDebutPrevue);
        $this->assertSame($dateDebutPrevue, $obj->getDateDebutPrevue());
    }

    /**
     * Tests setDateDebutReelle()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutReelle(): void {

        // Set a Date/time mock.
        $dateDebutReelle = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateDebutReelle($dateDebutReelle);
        $this->assertSame($dateDebutReelle, $obj->getDateDebutReelle());
    }

    /**
     * Tests setDateFinPrevue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPrevue(): void {

        // Set a Date/time mock.
        $dateFinPrevue = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateFinPrevue($dateFinPrevue);
        $this->assertSame($dateFinPrevue, $obj->getDateFinPrevue());
    }

    /**
     * Tests setDateFinReelle()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinReelle(): void {

        // Set a Date/time mock.
        $dateFinReelle = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateFinReelle($dateFinReelle);
        $this->assertSame($dateFinReelle, $obj->getDateFinReelle());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Affaires();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setEchEnMt()
     *
     * @return void
     */
    public function testSetEchEnMt(): void {

        $obj = new Affaires();

        $obj->setEchEnMt(true);
        $this->assertEquals(true, $obj->getEchEnMt());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Affaires();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setEtat1()
     *
     * @return void
     */
    public function testSetEtat1(): void {

        $obj = new Affaires();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }

    /**
     * Tests setEtat2()
     *
     * @return void
     */
    public function testSetEtat2(): void {

        $obj = new Affaires();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }

    /**
     * Tests setEtat3()
     *
     * @return void
     */
    public function testSetEtat3(): void {

        $obj = new Affaires();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }

    /**
     * Tests setEtat4()
     *
     * @return void
     */
    public function testSetEtat4(): void {

        $obj = new Affaires();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }

    /**
     * Tests setEtat5()
     *
     * @return void
     */
    public function testSetEtat5(): void {

        $obj = new Affaires();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Affaires();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setListeCollabAcces()
     *
     * @return void
     */
    public function testSetListeCollabAcces(): void {

        $obj = new Affaires();

        $obj->setListeCollabAcces("listeCollabAcces");
        $this->assertEquals("listeCollabAcces", $obj->getListeCollabAcces());
    }

    /**
     * Tests setMtCaPrevu()
     *
     * @return void
     */
    public function testSetMtCaPrevu(): void {

        $obj = new Affaires();

        $obj->setMtCaPrevu(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCaPrevu());
    }

    /**
     * Tests setNbHeuresInterim()
     *
     * @return void
     */
    public function testSetNbHeuresInterim(): void {

        $obj = new Affaires();

        $obj->setNbHeuresInterim(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresInterim());
    }

    /**
     * Tests setNbHeuresPrevues()
     *
     * @return void
     */
    public function testSetNbHeuresPrevues(): void {

        $obj = new Affaires();

        $obj->setNbHeuresPrevues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresPrevues());
    }

    /**
     * Tests setNbHeuresReelInterim()
     *
     * @return void
     */
    public function testSetNbHeuresReelInterim(): void {

        $obj = new Affaires();

        $obj->setNbHeuresReelInterim(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresReelInterim());
    }

    /**
     * Tests setNbHeuresReelSousTrait()
     *
     * @return void
     */
    public function testSetNbHeuresReelSousTrait(): void {

        $obj = new Affaires();

        $obj->setNbHeuresReelSousTrait(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresReelSousTrait());
    }

    /**
     * Tests setNbHeuresSousTrait()
     *
     * @return void
     */
    public function testSetNbHeuresSousTrait(): void {

        $obj = new Affaires();

        $obj->setNbHeuresSousTrait(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresSousTrait());
    }

    /**
     * Tests setNbInscrits()
     *
     * @return void
     */
    public function testSetNbInscrits(): void {

        $obj = new Affaires();

        $obj->setNbInscrits(10);
        $this->assertEquals(10, $obj->getNbInscrits());
    }

    /**
     * Tests setNbJoursPrevus()
     *
     * @return void
     */
    public function testSetNbJoursPrevus(): void {

        $obj = new Affaires();

        $obj->setNbJoursPrevus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursPrevus());
    }

    /**
     * Tests setNbJoursReels()
     *
     * @return void
     */
    public function testSetNbJoursReels(): void {

        $obj = new Affaires();

        $obj->setNbJoursReels(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursReels());
    }

    /**
     * Tests setProchainNumArr()
     *
     * @return void
     */
    public function testSetProchainNumArr(): void {

        $obj = new Affaires();

        $obj->setProchainNumArr(10);
        $this->assertEquals(10, $obj->getProchainNumArr());
    }

    /**
     * Tests setRefDevis()
     *
     * @return void
     */
    public function testSetRefDevis(): void {

        $obj = new Affaires();

        $obj->setRefDevis("refDevis");
        $this->assertEquals("refDevis", $obj->getRefDevis());
    }

    /**
     * Tests setResponsable()
     *
     * @return void
     */
    public function testSetResponsable(): void {

        $obj = new Affaires();

        $obj->setResponsable("responsable");
        $this->assertEquals("responsable", $obj->getResponsable());
    }

    /**
     * Tests setResponsableChantier()
     *
     * @return void
     */
    public function testSetResponsableChantier(): void {

        $obj = new Affaires();

        $obj->setResponsableChantier("responsableChantier");
        $this->assertEquals("responsableChantier", $obj->getResponsableChantier());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Affaires();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setTypeFg()
     *
     * @return void
     */
    public function testSetTypeFg(): void {

        $obj = new Affaires();

        $obj->setTypeFg("typeFg");
        $this->assertEquals("typeFg", $obj->getTypeFg());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Affaires();

        $this->assertNull($obj->getClientDonneurOrdre());
        $this->assertNull($obj->getClientPayeur());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodeColCreat());
        $this->assertNull($obj->getCodeColModif());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCoutHeureTheo());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebutPrevue());
        $this->assertNull($obj->getDateDebutReelle());
        $this->assertNull($obj->getDateFinPrevue());
        $this->assertNull($obj->getDateFinReelle());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getEchEnMt());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getEtat1());
        $this->assertNull($obj->getEtat2());
        $this->assertNull($obj->getEtat3());
        $this->assertNull($obj->getEtat4());
        $this->assertNull($obj->getEtat5());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getListeCollabAcces());
        $this->assertNull($obj->getMtCaPrevu());
        $this->assertNull($obj->getNbHeuresInterim());
        $this->assertNull($obj->getNbHeuresPrevues());
        $this->assertNull($obj->getNbHeuresReelInterim());
        $this->assertNull($obj->getNbHeuresReelSousTrait());
        $this->assertNull($obj->getNbHeuresSousTrait());
        $this->assertNull($obj->getNbInscrits());
        $this->assertNull($obj->getNbJoursPrevus());
        $this->assertNull($obj->getNbJoursReels());
        $this->assertNull($obj->getProchainNumArr());
        $this->assertNull($obj->getRefDevis());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getResponsableChantier());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeFg());
    }
}
