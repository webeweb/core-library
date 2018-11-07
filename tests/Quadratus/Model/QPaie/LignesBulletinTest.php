<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\LignesBulletin;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes bulletin model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesBulletinTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getIntervientBrutal());
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
        $this->assertNull($obj->getPPSoumisTaxe());
        $this->assertNull($obj->getPasEditer());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrimeNonProratisee());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegleTaux());
        $this->assertNull($obj->getSoumisAbattement());
        $this->assertNull($obj->getSoumisCSG());
        $this->assertNull($obj->getSoumisCrds());
        $this->assertNull($obj->getTypeAbsence());
        $this->assertNull($obj->getTypeAcompte());
    }

    /**
     * Tests the setAnalDiff() method.
     *
     * @return void
     */
    public function testSetAnalDiff() {

        $obj = new LignesBulletin();

        $obj->setAnalDiff(true);
        $this->assertEquals(true, $obj->getAnalDiff());
    }

    /**
     * Tests the setAvantageNature() method.
     *
     * @return void
     */
    public function testSetAvantageNature() {

        $obj = new LignesBulletin();

        $obj->setAvantageNature(true);
        $this->assertEquals(true, $obj->getAvantageNature());
    }

    /**
     * Tests the setBaseSansReintegration() method.
     *
     * @return void
     */
    public function testSetBaseSansReintegration() {

        $obj = new LignesBulletin();

        $obj->setBaseSansReintegration(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSansReintegration());
    }

    /**
     * Tests the setCleLigBul() method.
     *
     * @return void
     */
    public function testSetCleLigBul() {

        $obj = new LignesBulletin();

        $obj->setCleLigBul("cleLigBul");
        $this->assertEquals("cleLigBul", $obj->getCleLigBul());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new LignesBulletin();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCalcul() method.
     *
     * @return void
     */
    public function testSetCodeCalcul() {

        $obj = new LignesBulletin();

        $obj->setCodeCalcul("codeCalcul");
        $this->assertEquals("codeCalcul", $obj->getCodeCalcul());
    }

    /**
     * Tests the setConditionSpec() method.
     *
     * @return void
     */
    public function testSetConditionSpec() {

        $obj = new LignesBulletin();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests the setCongePaye() method.
     *
     * @return void
     */
    public function testSetCongePaye() {

        $obj = new LignesBulletin();

        $obj->setCongePaye(true);
        $this->assertEquals(true, $obj->getCongePaye());
    }

    /**
     * Tests the setCumulCoutGlob() method.
     *
     * @return void
     */
    public function testSetCumulCoutGlob() {

        $obj = new LignesBulletin();

        $obj->setCumulCoutGlob(true);
        $this->assertEquals(true, $obj->getCumulCoutGlob());
    }

    /**
     * Tests the setEditionBase() method.
     *
     * @return void
     */
    public function testSetEditionBase() {

        $obj = new LignesBulletin();

        $obj->setEditionBase(true);
        $this->assertEquals(true, $obj->getEditionBase());
    }

    /**
     * Tests the setEditionCotPatronale() method.
     *
     * @return void
     */
    public function testSetEditionCotPatronale() {

        $obj = new LignesBulletin();

        $obj->setEditionCotPatronale(true);
        $this->assertEquals(true, $obj->getEditionCotPatronale());
    }

    /**
     * Tests the setEditionResultat() method.
     *
     * @return void
     */
    public function testSetEditionResultat() {

        $obj = new LignesBulletin();

        $obj->setEditionResultat(true);
        $this->assertEquals(true, $obj->getEditionResultat());
    }

    /**
     * Tests the setEditionTauxSal() method.
     *
     * @return void
     */
    public function testSetEditionTauxSal() {

        $obj = new LignesBulletin();

        $obj->setEditionTauxSal(true);
        $this->assertEquals(true, $obj->getEditionTauxSal());
    }

    /**
     * Tests the setFlagForce() method.
     *
     * @return void
     */
    public function testSetFlagForce() {

        $obj = new LignesBulletin();

        $obj->setFlagForce(true);
        $this->assertEquals(true, $obj->getFlagForce());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new LignesBulletin();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setIntegNetPaye() method.
     *
     * @return void
     */
    public function testSetIntegNetPaye() {

        $obj = new LignesBulletin();

        $obj->setIntegNetPaye(true);
        $this->assertEquals(true, $obj->getIntegNetPaye());
    }

    /**
     * Tests the setIntervientBrutal() method.
     *
     * @return void
     */
    public function testSetIntervientBrutal() {

        $obj = new LignesBulletin();

        $obj->setIntervientBrutal(true);
        $this->assertEquals(true, $obj->getIntervientBrutal());
    }

    /**
     * Tests the setIntervientIndemPreca() method.
     *
     * @return void
     */
    public function testSetIntervientIndemPreca() {

        $obj = new LignesBulletin();

        $obj->setIntervientIndemPreca(true);
        $this->assertEquals(true, $obj->getIntervientIndemPreca());
    }

    /**
     * Tests the setIntervientTauxHAbCp() method.
     *
     * @return void
     */
    public function testSetIntervientTauxHAbCp() {

        $obj = new LignesBulletin();

        $obj->setIntervientTauxHAbCp("intervientTauxHAbCp");
        $this->assertEquals("intervientTauxHAbCp", $obj->getIntervientTauxHAbCp());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new LignesBulletin();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLien() method.
     *
     * @return void
     */
    public function testSetLien() {

        $obj = new LignesBulletin();

        $obj->setLien(10);
        $this->assertEquals(10, $obj->getLien());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1() {

        $obj = new LignesBulletin();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new LignesBulletin();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3() {

        $obj = new LignesBulletin();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontant4() method.
     *
     * @return void
     */
    public function testSetMontant4() {

        $obj = new LignesBulletin();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests the setMontantGlobal() method.
     *
     * @return void
     */
    public function testSetMontantGlobal() {

        $obj = new LignesBulletin();

        $obj->setMontantGlobal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGlobal());
    }

    /**
     * Tests the setMontantSalarial() method.
     *
     * @return void
     */
    public function testSetMontantSalarial() {

        $obj = new LignesBulletin();

        $obj->setMontantSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalarial());
    }

    /**
     * Tests the setNeutre() method.
     *
     * @return void
     */
    public function testSetNeutre() {

        $obj = new LignesBulletin();

        $obj->setNeutre(true);
        $this->assertEquals(true, $obj->getNeutre());
    }

    /**
     * Tests the setNumCumulBulletin() method.
     *
     * @return void
     */
    public function testSetNumCumulBulletin() {

        $obj = new LignesBulletin();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Tests the setNumCumulPatron() method.
     *
     * @return void
     */
    public function testSetNumCumulPatron() {

        $obj = new LignesBulletin();

        $obj->setNumCumulPatron(10);
        $this->assertEquals(10, $obj->getNumCumulPatron());
    }

    /**
     * Tests the setNumLigneBulletin() method.
     *
     * @return void
     */
    public function testSetNumLigneBulletin() {

        $obj = new LignesBulletin();

        $obj->setNumLigneBulletin(10);
        $this->assertEquals(10, $obj->getNumLigneBulletin());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesBulletin();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPPSoumisTaxe() method.
     *
     * @return void
     */
    public function testSetPPSoumisTaxe() {

        $obj = new LignesBulletin();

        $obj->setPPSoumisTaxe(true);
        $this->assertEquals(true, $obj->getPPSoumisTaxe());
    }

    /**
     * Tests the setPasEditer() method.
     *
     * @return void
     */
    public function testSetPasEditer() {

        $obj = new LignesBulletin();

        $obj->setPasEditer(true);
        $this->assertEquals(true, $obj->getPasEditer());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new LignesBulletin();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPrimeNonProratisee() method.
     *
     * @return void
     */
    public function testSetPrimeNonProratisee() {

        $obj = new LignesBulletin();

        $obj->setPrimeNonProratisee(true);
        $this->assertEquals(true, $obj->getPrimeNonProratisee());
    }

    /**
     * Tests the setRegleCalcul() method.
     *
     * @return void
     */
    public function testSetRegleCalcul() {

        $obj = new LignesBulletin();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Tests the setRegleTaux() method.
     *
     * @return void
     */
    public function testSetRegleTaux() {

        $obj = new LignesBulletin();

        $obj->setRegleTaux("regleTaux");
        $this->assertEquals("regleTaux", $obj->getRegleTaux());
    }

    /**
     * Tests the setSoumisAbattement() method.
     *
     * @return void
     */
    public function testSetSoumisAbattement() {

        $obj = new LignesBulletin();

        $obj->setSoumisAbattement(true);
        $this->assertEquals(true, $obj->getSoumisAbattement());
    }

    /**
     * Tests the setSoumisCSG() method.
     *
     * @return void
     */
    public function testSetSoumisCSG() {

        $obj = new LignesBulletin();

        $obj->setSoumisCSG(true);
        $this->assertEquals(true, $obj->getSoumisCSG());
    }

    /**
     * Tests the setSoumisCrds() method.
     *
     * @return void
     */
    public function testSetSoumisCrds() {

        $obj = new LignesBulletin();

        $obj->setSoumisCrds(true);
        $this->assertEquals(true, $obj->getSoumisCrds());
    }

    /**
     * Tests the setTypeAbsence() method.
     *
     * @return void
     */
    public function testSetTypeAbsence() {

        $obj = new LignesBulletin();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests the setTypeAcompte() method.
     *
     * @return void
     */
    public function testSetTypeAcompte() {

        $obj = new LignesBulletin();

        $obj->setTypeAcompte("typeAcompte");
        $this->assertEquals("typeAcompte", $obj->getTypeAcompte());
    }

}
