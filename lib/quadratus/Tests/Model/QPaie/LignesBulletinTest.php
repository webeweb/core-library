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

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
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
     * Test setAnalDiff()
     *
     * @return void
     */
    public function testSetAnalDiff(): void {

        $obj = new LignesBulletin();

        $obj->setAnalDiff(true);
        $this->assertTrue($obj->getAnalDiff());
    }

    /**
     * Test setAvantageNature()
     *
     * @return void
     */
    public function testSetAvantageNature(): void {

        $obj = new LignesBulletin();

        $obj->setAvantageNature(true);
        $this->assertTrue($obj->getAvantageNature());
    }

    /**
     * Test setBaseSansReintegration()
     *
     * @return void
     */
    public function testSetBaseSansReintegration(): void {

        $obj = new LignesBulletin();

        $obj->setBaseSansReintegration(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSansReintegration());
    }

    /**
     * Test setCleLigBul()
     *
     * @return void
     */
    public function testSetCleLigBul(): void {

        $obj = new LignesBulletin();

        $obj->setCleLigBul("cleLigBul");
        $this->assertEquals("cleLigBul", $obj->getCleLigBul());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LignesBulletin();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeCalcul()
     *
     * @return void
     */
    public function testSetCodeCalcul(): void {

        $obj = new LignesBulletin();

        $obj->setCodeCalcul("codeCalcul");
        $this->assertEquals("codeCalcul", $obj->getCodeCalcul());
    }

    /**
     * Test setConditionSpec()
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new LignesBulletin();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Test setCongePaye()
     *
     * @return void
     */
    public function testSetCongePaye(): void {

        $obj = new LignesBulletin();

        $obj->setCongePaye(true);
        $this->assertTrue($obj->getCongePaye());
    }

    /**
     * Test setCumulCoutGlob()
     *
     * @return void
     */
    public function testSetCumulCoutGlob(): void {

        $obj = new LignesBulletin();

        $obj->setCumulCoutGlob(true);
        $this->assertTrue($obj->getCumulCoutGlob());
    }

    /**
     * Test setEditionBase()
     *
     * @return void
     */
    public function testSetEditionBase(): void {

        $obj = new LignesBulletin();

        $obj->setEditionBase(true);
        $this->assertTrue($obj->getEditionBase());
    }

    /**
     * Test setEditionCotPatronale()
     *
     * @return void
     */
    public function testSetEditionCotPatronale(): void {

        $obj = new LignesBulletin();

        $obj->setEditionCotPatronale(true);
        $this->assertTrue($obj->getEditionCotPatronale());
    }

    /**
     * Test setEditionResultat()
     *
     * @return void
     */
    public function testSetEditionResultat(): void {

        $obj = new LignesBulletin();

        $obj->setEditionResultat(true);
        $this->assertTrue($obj->getEditionResultat());
    }

    /**
     * Test setEditionTauxSal()
     *
     * @return void
     */
    public function testSetEditionTauxSal(): void {

        $obj = new LignesBulletin();

        $obj->setEditionTauxSal(true);
        $this->assertTrue($obj->getEditionTauxSal());
    }

    /**
     * Test setFlagForce()
     *
     * @return void
     */
    public function testSetFlagForce(): void {

        $obj = new LignesBulletin();

        $obj->setFlagForce(true);
        $this->assertTrue($obj->getFlagForce());
    }

    /**
     * Test setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new LignesBulletin();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Test setIntegNetPaye()
     *
     * @return void
     */
    public function testSetIntegNetPaye(): void {

        $obj = new LignesBulletin();

        $obj->setIntegNetPaye(true);
        $this->assertTrue($obj->getIntegNetPaye());
    }

    /**
     * Test setIntervientBrutAl()
     *
     * @return void
     */
    public function testSetIntervientBrutAl(): void {

        $obj = new LignesBulletin();

        $obj->setIntervientBrutAl(true);
        $this->assertTrue($obj->getIntervientBrutAl());
    }

    /**
     * Test setIntervientIndemPreca()
     *
     * @return void
     */
    public function testSetIntervientIndemPreca(): void {

        $obj = new LignesBulletin();

        $obj->setIntervientIndemPreca(true);
        $this->assertTrue($obj->getIntervientIndemPreca());
    }

    /**
     * Test setIntervientTauxHAbCp()
     *
     * @return void
     */
    public function testSetIntervientTauxHAbCp(): void {

        $obj = new LignesBulletin();

        $obj->setIntervientTauxHAbCp("intervientTauxHAbCp");
        $this->assertEquals("intervientTauxHAbCp", $obj->getIntervientTauxHAbCp());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new LignesBulletin();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLien()
     *
     * @return void
     */
    public function testSetLien(): void {

        $obj = new LignesBulletin();

        $obj->setLien(10);
        $this->assertEquals(10, $obj->getLien());
    }

    /**
     * Test setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new LignesBulletin();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Test setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new LignesBulletin();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Test setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new LignesBulletin();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Test setMontant4()
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new LignesBulletin();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Test setMontantGlobal()
     *
     * @return void
     */
    public function testSetMontantGlobal(): void {

        $obj = new LignesBulletin();

        $obj->setMontantGlobal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGlobal());
    }

    /**
     * Test setMontantSalarial()
     *
     * @return void
     */
    public function testSetMontantSalarial(): void {

        $obj = new LignesBulletin();

        $obj->setMontantSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalarial());
    }

    /**
     * Test setNeutre()
     *
     * @return void
     */
    public function testSetNeutre(): void {

        $obj = new LignesBulletin();

        $obj->setNeutre(true);
        $this->assertTrue($obj->getNeutre());
    }

    /**
     * Test setNumCumulBulletin()
     *
     * @return void
     */
    public function testSetNumCumulBulletin(): void {

        $obj = new LignesBulletin();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Test setNumCumulPatron()
     *
     * @return void
     */
    public function testSetNumCumulPatron(): void {

        $obj = new LignesBulletin();

        $obj->setNumCumulPatron(10);
        $this->assertEquals(10, $obj->getNumCumulPatron());
    }

    /**
     * Test setNumLigneBulletin()
     *
     * @return void
     */
    public function testSetNumLigneBulletin(): void {

        $obj = new LignesBulletin();

        $obj->setNumLigneBulletin(10);
        $this->assertEquals(10, $obj->getNumLigneBulletin());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesBulletin();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPasEditer()
     *
     * @return void
     */
    public function testSetPasEditer(): void {

        $obj = new LignesBulletin();

        $obj->setPasEditer(true);
        $this->assertTrue($obj->getPasEditer());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new LignesBulletin();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPpSoumisTaxe()
     *
     * @return void
     */
    public function testSetPpSoumisTaxe(): void {

        $obj = new LignesBulletin();

        $obj->setPpSoumisTaxe(true);
        $this->assertTrue($obj->getPpSoumisTaxe());
    }

    /**
     * Test setPrimeNonProratisee()
     *
     * @return void
     */
    public function testSetPrimeNonProratisee(): void {

        $obj = new LignesBulletin();

        $obj->setPrimeNonProratisee(true);
        $this->assertTrue($obj->getPrimeNonProratisee());
    }

    /**
     * Test setRegleCalcul()
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new LignesBulletin();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Test setRegleTaux()
     *
     * @return void
     */
    public function testSetRegleTaux(): void {

        $obj = new LignesBulletin();

        $obj->setRegleTaux("regleTaux");
        $this->assertEquals("regleTaux", $obj->getRegleTaux());
    }

    /**
     * Test setSoumisAbattement()
     *
     * @return void
     */
    public function testSetSoumisAbattement(): void {

        $obj = new LignesBulletin();

        $obj->setSoumisAbattement(true);
        $this->assertTrue($obj->getSoumisAbattement());
    }

    /**
     * Test setSoumisCrds()
     *
     * @return void
     */
    public function testSetSoumisCrds(): void {

        $obj = new LignesBulletin();

        $obj->setSoumisCrds(true);
        $this->assertTrue($obj->getSoumisCrds());
    }

    /**
     * Test setSoumisCsg()
     *
     * @return void
     */
    public function testSetSoumisCsg(): void {

        $obj = new LignesBulletin();

        $obj->setSoumisCsg(true);
        $this->assertTrue($obj->getSoumisCsg());
    }

    /**
     * Test setTypeAbsence()
     *
     * @return void
     */
    public function testSetTypeAbsence(): void {

        $obj = new LignesBulletin();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Test setTypeAcompte()
     *
     * @return void
     */
    public function testSetTypeAcompte(): void {

        $obj = new LignesBulletin();

        $obj->setTypeAcompte("typeAcompte");
        $this->assertEquals("typeAcompte", $obj->getTypeAcompte());
    }

    /**
     * Test __construct()
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
