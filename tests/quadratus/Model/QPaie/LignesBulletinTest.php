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
use WBW\Library\Quadratus\Model\QPaie\LignesBulletin;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes bulletin test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesBulletinTest extends AbstractTestCase {

    /**
     * Tests setAnalDiff()
     *
     * @return void
     */
    public function testSetAnalDiff(): void {

        $obj = new LignesBulletin();

        $obj->setAnalDiff(true);
        $this->assertEquals(true, $obj->getAnalDiff());
    }

    /**
     * Tests setAvantageNature()
     *
     * @return void
     */
    public function testSetAvantageNature(): void {

        $obj = new LignesBulletin();

        $obj->setAvantageNature(true);
        $this->assertEquals(true, $obj->getAvantageNature());
    }

    /**
     * Tests setBaseSansReintegration()
     *
     * @return void
     */
    public function testSetBaseSansReintegration(): void {

        $obj = new LignesBulletin();

        $obj->setBaseSansReintegration(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSansReintegration());
    }

    /**
     * Tests setCleLigBul()
     *
     * @return void
     */
    public function testSetCleLigBul(): void {

        $obj = new LignesBulletin();

        $obj->setCleLigBul("cleLigBul");
        $this->assertEquals("cleLigBul", $obj->getCleLigBul());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LignesBulletin();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeCalcul()
     *
     * @return void
     */
    public function testSetCodeCalcul(): void {

        $obj = new LignesBulletin();

        $obj->setCodeCalcul("codeCalcul");
        $this->assertEquals("codeCalcul", $obj->getCodeCalcul());
    }

    /**
     * Tests setConditionSpec()
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new LignesBulletin();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests setCongePaye()
     *
     * @return void
     */
    public function testSetCongePaye(): void {

        $obj = new LignesBulletin();

        $obj->setCongePaye(true);
        $this->assertEquals(true, $obj->getCongePaye());
    }

    /**
     * Tests setCumulCoutGlob()
     *
     * @return void
     */
    public function testSetCumulCoutGlob(): void {

        $obj = new LignesBulletin();

        $obj->setCumulCoutGlob(true);
        $this->assertEquals(true, $obj->getCumulCoutGlob());
    }

    /**
     * Tests setEditionBase()
     *
     * @return void
     */
    public function testSetEditionBase(): void {

        $obj = new LignesBulletin();

        $obj->setEditionBase(true);
        $this->assertEquals(true, $obj->getEditionBase());
    }

    /**
     * Tests setEditionCotPatronale()
     *
     * @return void
     */
    public function testSetEditionCotPatronale(): void {

        $obj = new LignesBulletin();

        $obj->setEditionCotPatronale(true);
        $this->assertEquals(true, $obj->getEditionCotPatronale());
    }

    /**
     * Tests setEditionResultat()
     *
     * @return void
     */
    public function testSetEditionResultat(): void {

        $obj = new LignesBulletin();

        $obj->setEditionResultat(true);
        $this->assertEquals(true, $obj->getEditionResultat());
    }

    /**
     * Tests setEditionTauxSal()
     *
     * @return void
     */
    public function testSetEditionTauxSal(): void {

        $obj = new LignesBulletin();

        $obj->setEditionTauxSal(true);
        $this->assertEquals(true, $obj->getEditionTauxSal());
    }

    /**
     * Tests setFlagForce()
     *
     * @return void
     */
    public function testSetFlagForce(): void {

        $obj = new LignesBulletin();

        $obj->setFlagForce(true);
        $this->assertEquals(true, $obj->getFlagForce());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new LignesBulletin();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setIntegNetPaye()
     *
     * @return void
     */
    public function testSetIntegNetPaye(): void {

        $obj = new LignesBulletin();

        $obj->setIntegNetPaye(true);
        $this->assertEquals(true, $obj->getIntegNetPaye());
    }

    /**
     * Tests setIntervientBrutAl()
     *
     * @return void
     */
    public function testSetIntervientBrutAl(): void {

        $obj = new LignesBulletin();

        $obj->setIntervientBrutAl(true);
        $this->assertEquals(true, $obj->getIntervientBrutAl());
    }

    /**
     * Tests setIntervientIndemPreca()
     *
     * @return void
     */
    public function testSetIntervientIndemPreca(): void {

        $obj = new LignesBulletin();

        $obj->setIntervientIndemPreca(true);
        $this->assertEquals(true, $obj->getIntervientIndemPreca());
    }

    /**
     * Tests setIntervientTauxHAbCp()
     *
     * @return void
     */
    public function testSetIntervientTauxHAbCp(): void {

        $obj = new LignesBulletin();

        $obj->setIntervientTauxHAbCp("intervientTauxHAbCp");
        $this->assertEquals("intervientTauxHAbCp", $obj->getIntervientTauxHAbCp());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new LignesBulletin();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLien()
     *
     * @return void
     */
    public function testSetLien(): void {

        $obj = new LignesBulletin();

        $obj->setLien(10);
        $this->assertEquals(10, $obj->getLien());
    }

    /**
     * Tests setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new LignesBulletin();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new LignesBulletin();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new LignesBulletin();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests setMontant4()
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new LignesBulletin();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests setMontantGlobal()
     *
     * @return void
     */
    public function testSetMontantGlobal(): void {

        $obj = new LignesBulletin();

        $obj->setMontantGlobal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGlobal());
    }

    /**
     * Tests setMontantSalarial()
     *
     * @return void
     */
    public function testSetMontantSalarial(): void {

        $obj = new LignesBulletin();

        $obj->setMontantSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalarial());
    }

    /**
     * Tests setNeutre()
     *
     * @return void
     */
    public function testSetNeutre(): void {

        $obj = new LignesBulletin();

        $obj->setNeutre(true);
        $this->assertEquals(true, $obj->getNeutre());
    }

    /**
     * Tests setNumCumulBulletin()
     *
     * @return void
     */
    public function testSetNumCumulBulletin(): void {

        $obj = new LignesBulletin();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Tests setNumCumulPatron()
     *
     * @return void
     */
    public function testSetNumCumulPatron(): void {

        $obj = new LignesBulletin();

        $obj->setNumCumulPatron(10);
        $this->assertEquals(10, $obj->getNumCumulPatron());
    }

    /**
     * Tests setNumLigneBulletin()
     *
     * @return void
     */
    public function testSetNumLigneBulletin(): void {

        $obj = new LignesBulletin();

        $obj->setNumLigneBulletin(10);
        $this->assertEquals(10, $obj->getNumLigneBulletin());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesBulletin();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPasEditer()
     *
     * @return void
     */
    public function testSetPasEditer(): void {

        $obj = new LignesBulletin();

        $obj->setPasEditer(true);
        $this->assertEquals(true, $obj->getPasEditer());
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

        $obj = new LignesBulletin();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setPpSoumisTaxe()
     *
     * @return void
     */
    public function testSetPpSoumisTaxe(): void {

        $obj = new LignesBulletin();

        $obj->setPpSoumisTaxe(true);
        $this->assertEquals(true, $obj->getPpSoumisTaxe());
    }

    /**
     * Tests setPrimeNonProratisee()
     *
     * @return void
     */
    public function testSetPrimeNonProratisee(): void {

        $obj = new LignesBulletin();

        $obj->setPrimeNonProratisee(true);
        $this->assertEquals(true, $obj->getPrimeNonProratisee());
    }

    /**
     * Tests setRegleCalcul()
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new LignesBulletin();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Tests setRegleTaux()
     *
     * @return void
     */
    public function testSetRegleTaux(): void {

        $obj = new LignesBulletin();

        $obj->setRegleTaux("regleTaux");
        $this->assertEquals("regleTaux", $obj->getRegleTaux());
    }

    /**
     * Tests setSoumisAbattement()
     *
     * @return void
     */
    public function testSetSoumisAbattement(): void {

        $obj = new LignesBulletin();

        $obj->setSoumisAbattement(true);
        $this->assertEquals(true, $obj->getSoumisAbattement());
    }

    /**
     * Tests setSoumisCrds()
     *
     * @return void
     */
    public function testSetSoumisCrds(): void {

        $obj = new LignesBulletin();

        $obj->setSoumisCrds(true);
        $this->assertEquals(true, $obj->getSoumisCrds());
    }

    /**
     * Tests setSoumisCsg()
     *
     * @return void
     */
    public function testSetSoumisCsg(): void {

        $obj = new LignesBulletin();

        $obj->setSoumisCsg(true);
        $this->assertEquals(true, $obj->getSoumisCsg());
    }

    /**
     * Tests setTypeAbsence()
     *
     * @return void
     */
    public function testSetTypeAbsence(): void {

        $obj = new LignesBulletin();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests setTypeAcompte()
     *
     * @return void
     */
    public function testSetTypeAcompte(): void {

        $obj = new LignesBulletin();

        $obj->setTypeAcompte("typeAcompte");
        $this->assertEquals("typeAcompte", $obj->getTypeAcompte());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesBulletin();

        $this->assertNull($obj->getAnalDiff());
        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getBaseSansReintegration());
        $this->assertNull($obj->getCleLigBul());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getCongePaye());
        $this->assertNull($obj->getCumulCoutGlob());
        $this->assertNull($obj->getEditionBase());
        $this->assertNull($obj->getEditionCotPatronale());
        $this->assertNull($obj->getEditionResultat());
        $this->assertNull($obj->getEditionTauxSal());
        $this->assertNull($obj->getFlagForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getIntegNetPaye());
        $this->assertNull($obj->getIntervientBrutAl());
        $this->assertNull($obj->getIntervientIndemPreca());
        $this->assertNull($obj->getIntervientTauxHAbCp());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLien());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontantGlobal());
        $this->assertNull($obj->getMontantSalarial());
        $this->assertNull($obj->getNeutre());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumCumulPatron());
        $this->assertNull($obj->getNumLigneBulletin());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPpSoumisTaxe());
        $this->assertNull($obj->getPasEditer());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrimeNonProratisee());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegleTaux());
        $this->assertNull($obj->getSoumisAbattement());
        $this->assertNull($obj->getSoumisCsg());
        $this->assertNull($obj->getSoumisCrds());
        $this->assertNull($obj->getTypeAbsence());
        $this->assertNull($obj->getTypeAcompte());
    }
}
