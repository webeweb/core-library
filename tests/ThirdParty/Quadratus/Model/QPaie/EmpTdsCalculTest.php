<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpTdsCalcul;

/**
 * Emp tds calcul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpTdsCalculTest extends AbstractTestCase {

    /**
     * Tests the setBaseCalcTds142() method.
     *
     * @return void
     */
    public function testSetBaseCalcTds142() {

        $obj = new EmpTdsCalcul();

        $obj->setBaseCalcTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseCalcTds142());
    }

    /**
     * Tests the setCodeAtPer() method.
     *
     * @return void
     */
    public function testSetCodeAtPer() {

        $obj = new EmpTdsCalcul();

        $obj->setCodeAtPer(10);
        $this->assertEquals(10, $obj->getCodeAtPer());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpTdsCalcul();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCumNetImpos() method.
     *
     * @return void
     */
    public function testSetCumNetImpos() {

        $obj = new EmpTdsCalcul();

        $obj->setCumNetImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImpos());
    }

    /**
     * Tests the setDebutPeriodeDecl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeDecl() {

        // Set a Date/time mock.
        $debutPeriodeDecl = new DateTime("2018-09-10");

        $obj = new EmpTdsCalcul();

        $obj->setDebutPeriodeDecl($debutPeriodeDecl);
        $this->assertSame($debutPeriodeDecl, $obj->getDebutPeriodeDecl());
    }

    /**
     * Tests the setDernierePeriodeAnnee() method.
     *
     * @return void
     */
    public function testSetDernierePeriodeAnnee() {

        $obj = new EmpTdsCalcul();

        $obj->setDernierePeriodeAnnee(true);
        $this->assertEquals(true, $obj->getDernierePeriodeAnnee());
    }

    /**
     * Tests the setFinPeriodeDecl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeDecl() {

        // Set a Date/time mock.
        $finPeriodeDecl = new DateTime("2018-09-10");

        $obj = new EmpTdsCalcul();

        $obj->setFinPeriodeDecl($finPeriodeDecl);
        $this->assertSame($finPeriodeDecl, $obj->getFinPeriodeDecl());
    }

    /**
     * Tests the setIndemnImpat() method.
     *
     * @return void
     */
    public function testSetIndemnImpat() {

        $obj = new EmpTdsCalcul();

        $obj->setIndemnImpat(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnImpat());
    }

    /**
     * Tests the setMontantHSupComplExo() method.
     *
     * @return void
     */
    public function testSetMontantHSupComplExo() {

        $obj = new EmpTdsCalcul();

        $obj->setMontantHSupComplExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHSupComplExo());
    }

    /**
     * Tests the setNbHeureSal() method.
     *
     * @return void
     */
    public function testSetNbHeureSal() {

        $obj = new EmpTdsCalcul();

        $obj->setNbHeureSal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSal());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav() {

        $obj = new EmpTdsCalcul();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNbPerPaie() method.
     *
     * @return void
     */
    public function testSetNbPerPaie() {

        $obj = new EmpTdsCalcul();

        $obj->setNbPerPaie(10);
        $this->assertEquals(10, $obj->getNbPerPaie());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpTdsCalcul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpTdsCalcul();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setParticipServPers() method.
     *
     * @return void
     */
    public function testSetParticipServPers() {

        $obj = new EmpTdsCalcul();

        $obj->setParticipServPers(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipServPers());
    }

    /**
     * Tests the setPremierePeriodeAnnee() method.
     *
     * @return void
     */
    public function testSetPremierePeriodeAnnee() {

        $obj = new EmpTdsCalcul();

        $obj->setPremierePeriodeAnnee(true);
        $this->assertEquals(true, $obj->getPremierePeriodeAnnee());
    }

    /**
     * Tests the setTds100() method.
     *
     * @return void
     */
    public function testSetTds100() {

        $obj = new EmpTdsCalcul();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Tests the setTds102() method.
     *
     * @return void
     */
    public function testSetTds102() {

        $obj = new EmpTdsCalcul();

        $obj->setTds102(10.092018);
        $this->assertEquals(10.092018, $obj->getTds102());
    }

    /**
     * Tests the setTds103() method.
     *
     * @return void
     */
    public function testSetTds103() {

        $obj = new EmpTdsCalcul();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Tests the setTds105() method.
     *
     * @return void
     */
    public function testSetTds105() {

        $obj = new EmpTdsCalcul();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Tests the setTds107() method.
     *
     * @return void
     */
    public function testSetTds107() {

        $obj = new EmpTdsCalcul();

        $obj->setTds107(true);
        $this->assertEquals(true, $obj->getTds107());
    }

    /**
     * Tests the setTds108() method.
     *
     * @return void
     */
    public function testSetTds108() {

        $obj = new EmpTdsCalcul();

        $obj->setTds108(true);
        $this->assertEquals(true, $obj->getTds108());
    }

    /**
     * Tests the setTds109() method.
     *
     * @return void
     */
    public function testSetTds109() {

        $obj = new EmpTdsCalcul();

        $obj->setTds109(true);
        $this->assertEquals(true, $obj->getTds109());
    }

    /**
     * Tests the setTds110() method.
     *
     * @return void
     */
    public function testSetTds110() {

        $obj = new EmpTdsCalcul();

        $obj->setTds110(true);
        $this->assertEquals(true, $obj->getTds110());
    }

    /**
     * Tests the setTds111() method.
     *
     * @return void
     */
    public function testSetTds111() {

        $obj = new EmpTdsCalcul();

        $obj->setTds111(true);
        $this->assertEquals(true, $obj->getTds111());
    }

    /**
     * Tests the setTds112() method.
     *
     * @return void
     */
    public function testSetTds112() {

        $obj = new EmpTdsCalcul();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Tests the setTds113() method.
     *
     * @return void
     */
    public function testSetTds113() {

        $obj = new EmpTdsCalcul();

        $obj->setTds113(true);
        $this->assertEquals(true, $obj->getTds113());
    }

    /**
     * Tests the setTds117() method.
     *
     * @return void
     */
    public function testSetTds117() {

        $obj = new EmpTdsCalcul();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Tests the setTds119() method.
     *
     * @return void
     */
    public function testSetTds119() {

        $obj = new EmpTdsCalcul();

        $obj->setTds119(true);
        $this->assertEquals(true, $obj->getTds119());
    }

    /**
     * Tests the setTds120() method.
     *
     * @return void
     */
    public function testSetTds120() {

        $obj = new EmpTdsCalcul();

        $obj->setTds120(true);
        $this->assertEquals(true, $obj->getTds120());
    }

    /**
     * Tests the setTds121() method.
     *
     * @return void
     */
    public function testSetTds121() {

        $obj = new EmpTdsCalcul();

        $obj->setTds121(true);
        $this->assertEquals(true, $obj->getTds121());
    }

    /**
     * Tests the setTds122() method.
     *
     * @return void
     */
    public function testSetTds122() {

        $obj = new EmpTdsCalcul();

        $obj->setTds122(true);
        $this->assertEquals(true, $obj->getTds122());
    }

    /**
     * Tests the setTds125() method.
     *
     * @return void
     */
    public function testSetTds125() {

        $obj = new EmpTdsCalcul();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Tests the setTds127() method.
     *
     * @return void
     */
    public function testSetTds127() {

        $obj = new EmpTdsCalcul();

        $obj->setTds127(10.092018);
        $this->assertEquals(10.092018, $obj->getTds127());
    }

    /**
     * Tests the setTds128() method.
     *
     * @return void
     */
    public function testSetTds128() {

        $obj = new EmpTdsCalcul();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Tests the setTds132() method.
     *
     * @return void
     */
    public function testSetTds132() {

        $obj = new EmpTdsCalcul();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Tests the setTds133() method.
     *
     * @return void
     */
    public function testSetTds133() {

        $obj = new EmpTdsCalcul();

        $obj->setTds133("tds133");
        $this->assertEquals("tds133", $obj->getTds133());
    }

    /**
     * Tests the setTds134() method.
     *
     * @return void
     */
    public function testSetTds134() {

        $obj = new EmpTdsCalcul();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Tests the setTds135() method.
     *
     * @return void
     */
    public function testSetTds135() {

        $obj = new EmpTdsCalcul();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Tests the setTds136() method.
     *
     * @return void
     */
    public function testSetTds136() {

        $obj = new EmpTdsCalcul();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Tests the setTds137() method.
     *
     * @return void
     */
    public function testSetTds137() {

        $obj = new EmpTdsCalcul();

        $obj->setTds137(10.092018);
        $this->assertEquals(10.092018, $obj->getTds137());
    }

    /**
     * Tests the setTds139() method.
     *
     * @return void
     */
    public function testSetTds139() {

        $obj = new EmpTdsCalcul();

        $obj->setTds139("tds139");
        $this->assertEquals("tds139", $obj->getTds139());
    }

    /**
     * Tests the setTds141() method.
     *
     * @return void
     */
    public function testSetTds141() {

        $obj = new EmpTdsCalcul();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Tests the setTds142() method.
     *
     * @return void
     */
    public function testSetTds142() {

        $obj = new EmpTdsCalcul();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Tests the setTds142DejaCalcule() method.
     *
     * @return void
     */
    public function testSetTds142DejaCalcule() {

        $obj = new EmpTdsCalcul();

        $obj->setTds142DejaCalcule(true);
        $this->assertEquals(true, $obj->getTds142DejaCalcule());
    }

    /**
     * Tests the setTds75() method.
     *
     * @return void
     */
    public function testSetTds75() {

        $obj = new EmpTdsCalcul();

        $obj->setTds75(10);
        $this->assertEquals(10, $obj->getTds75());
    }

    /**
     * Tests the setTds77() method.
     *
     * @return void
     */
    public function testSetTds77() {

        $obj = new EmpTdsCalcul();

        $obj->setTds77("tds77");
        $this->assertEquals("tds77", $obj->getTds77());
    }

    /**
     * Tests the setTds78() method.
     *
     * @return void
     */
    public function testSetTds78() {

        $obj = new EmpTdsCalcul();

        $obj->setTds78(true);
        $this->assertEquals(true, $obj->getTds78());
    }

    /**
     * Tests the setTds81() method.
     *
     * @return void
     */
    public function testSetTds81() {

        $obj = new EmpTdsCalcul();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Tests the setTds82() method.
     *
     * @return void
     */
    public function testSetTds82() {

        $obj = new EmpTdsCalcul();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Tests the setTds84() method.
     *
     * @return void
     */
    public function testSetTds84() {

        $obj = new EmpTdsCalcul();

        $obj->setTds84(10.092018);
        $this->assertEquals(10.092018, $obj->getTds84());
    }

    /**
     * Tests the setTds85() method.
     *
     * @return void
     */
    public function testSetTds85() {

        $obj = new EmpTdsCalcul();

        $obj->setTds85(10.092018);
        $this->assertEquals(10.092018, $obj->getTds85());
    }

    /**
     * Tests the setTds86() method.
     *
     * @return void
     */
    public function testSetTds86() {

        $obj = new EmpTdsCalcul();

        $obj->setTds86(10.092018);
        $this->assertEquals(10.092018, $obj->getTds86());
    }

    /**
     * Tests the setTds87() method.
     *
     * @return void
     */
    public function testSetTds87() {

        $obj = new EmpTdsCalcul();

        $obj->setTds87(10.092018);
        $this->assertEquals(10.092018, $obj->getTds87());
    }

    /**
     * Tests the setTds88() method.
     *
     * @return void
     */
    public function testSetTds88() {

        $obj = new EmpTdsCalcul();

        $obj->setTds88(10.092018);
        $this->assertEquals(10.092018, $obj->getTds88());
    }

    /**
     * Tests the setTds89() method.
     *
     * @return void
     */
    public function testSetTds89() {

        $obj = new EmpTdsCalcul();

        $obj->setTds89(10.092018);
        $this->assertEquals(10.092018, $obj->getTds89());
    }

    /**
     * Tests the setTds90() method.
     *
     * @return void
     */
    public function testSetTds90() {

        $obj = new EmpTdsCalcul();

        $obj->setTds90(10.092018);
        $this->assertEquals(10.092018, $obj->getTds90());
    }

    /**
     * Tests the setTds91() method.
     *
     * @return void
     */
    public function testSetTds91() {

        $obj = new EmpTdsCalcul();

        $obj->setTds91(10.092018);
        $this->assertEquals(10.092018, $obj->getTds91());
    }

    /**
     * Tests the setTds92() method.
     *
     * @return void
     */
    public function testSetTds92() {

        $obj = new EmpTdsCalcul();

        $obj->setTds92(10.092018);
        $this->assertEquals(10.092018, $obj->getTds92());
    }

    /**
     * Tests the setTds93() method.
     *
     * @return void
     */
    public function testSetTds93() {

        $obj = new EmpTdsCalcul();

        $obj->setTds93(10.092018);
        $this->assertEquals(10.092018, $obj->getTds93());
    }

    /**
     * Tests the setTds94() method.
     *
     * @return void
     */
    public function testSetTds94() {

        $obj = new EmpTdsCalcul();

        $obj->setTds94(10.092018);
        $this->assertEquals(10.092018, $obj->getTds94());
    }

    /**
     * Tests the setTds95() method.
     *
     * @return void
     */
    public function testSetTds95() {

        $obj = new EmpTdsCalcul();

        $obj->setTds95(10.092018);
        $this->assertEquals(10.092018, $obj->getTds95());
    }

    /**
     * Tests the setTdsAbattFraisPro() method.
     *
     * @return void
     */
    public function testSetTdsAbattFraisPro() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAbattFraisPro(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAbattFraisPro());
    }

    /**
     * Tests the setTdsAllocChom() method.
     *
     * @return void
     */
    public function testSetTdsAllocChom() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAllocChom(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocChom());
    }

    /**
     * Tests the setTdsAllocComplIjss() method.
     *
     * @return void
     */
    public function testSetTdsAllocComplIjss() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAllocComplIjss(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocComplIjss());
    }

    /**
     * Tests the setTdsAllocRetraite() method.
     *
     * @return void
     */
    public function testSetTdsAllocRetraite() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Tests the setTdsContribCeChequesVac() method.
     *
     * @return void
     */
    public function testSetTdsContribCeChequesVac() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsContribCeChequesVac(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsContribCeChequesVac());
    }

    /**
     * Tests the setTdsCumulN() method.
     *
     * @return void
     */
    public function testSetTdsCumulN() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsCumulN(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsCumulN());
    }

    /**
     * Tests the setTdsFlagRaz() method.
     *
     * @return void
     */
    public function testSetTdsFlagRaz() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsFlagRaz(10);
        $this->assertEquals(10, $obj->getTdsFlagRaz());
    }

    /**
     * Tests the setTdsIndemnDepartRetraite() method.
     *
     * @return void
     */
    public function testSetTdsIndemnDepartRetraite() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsIndemnDepartRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsIndemnDepartRetraite());
    }

    /**
     * Tests the setTdsIndemnImposables() method.
     *
     * @return void
     */
    public function testSetTdsIndemnImposables() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsIndemnImposables(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsIndemnImposables());
    }

    /**
     * Tests the setTdsRembFraisPro() method.
     *
     * @return void
     */
    public function testSetTdsRembFraisPro() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsRembFraisPro(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsRembFraisPro());
    }

    /**
     * Tests the setTdsSommeExoTaxeSal() method.
     *
     * @return void
     */
    public function testSetTdsSommeExoTaxeSal() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsSommeExoTaxeSal(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsSommeExoTaxeSal());
    }

    /**
     * Tests the setTdsSup120() method.
     *
     * @return void
     */
    public function testSetTdsSup120() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsSup120("tdsSup120");
        $this->assertEquals("tdsSup120", $obj->getTdsSup120());
    }

    /**
     * Tests the setTdsSup1200() method.
     *
     * @return void
     */
    public function testSetTdsSup1200() {

        $obj = new EmpTdsCalcul();

        $obj->setTdsSup1200("tdsSup1200");
        $this->assertEquals("tdsSup1200", $obj->getTdsSup1200());
    }

    /**
     * Tests the setTotalPlaf() method.
     *
     * @return void
     */
    public function testSetTotalPlaf() {

        $obj = new EmpTdsCalcul();

        $obj->setTotalPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalPlaf());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EmpTdsCalcul();

        $this->assertNull($obj->getBaseCalcTds142());
        $this->assertNull($obj->getCodeAtPer());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCumNetImpos());
        $this->assertNull($obj->getDebutPeriodeDecl());
        $this->assertNull($obj->getDernierePeriodeAnnee());
        $this->assertNull($obj->getFinPeriodeDecl());
        $this->assertNull($obj->getIndemnImpat());
        $this->assertNull($obj->getMontantHSupComplExo());
        $this->assertNull($obj->getNbHeureSal());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbPerPaie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getParticipServPers());
        $this->assertNull($obj->getPremierePeriodeAnnee());
        $this->assertNull($obj->getTds100());
        $this->assertNull($obj->getTds102());
        $this->assertNull($obj->getTds103());
        $this->assertNull($obj->getTds105());
        $this->assertNull($obj->getTds107());
        $this->assertNull($obj->getTds108());
        $this->assertNull($obj->getTds109());
        $this->assertNull($obj->getTds110());
        $this->assertNull($obj->getTds111());
        $this->assertNull($obj->getTds112());
        $this->assertNull($obj->getTds113());
        $this->assertNull($obj->getTds117());
        $this->assertNull($obj->getTds119());
        $this->assertNull($obj->getTds120());
        $this->assertNull($obj->getTds121());
        $this->assertNull($obj->getTds122());
        $this->assertNull($obj->getTds125());
        $this->assertNull($obj->getTds127());
        $this->assertNull($obj->getTds128());
        $this->assertNull($obj->getTds132());
        $this->assertNull($obj->getTds133());
        $this->assertNull($obj->getTds134());
        $this->assertNull($obj->getTds135());
        $this->assertNull($obj->getTds136());
        $this->assertNull($obj->getTds137());
        $this->assertNull($obj->getTds139());
        $this->assertNull($obj->getTds141());
        $this->assertNull($obj->getTds75());
        $this->assertNull($obj->getTds77());
        $this->assertNull($obj->getTds78());
        $this->assertNull($obj->getTds81());
        $this->assertNull($obj->getTds82());
        $this->assertNull($obj->getTds84());
        $this->assertNull($obj->getTds85());
        $this->assertNull($obj->getTds86());
        $this->assertNull($obj->getTds87());
        $this->assertNull($obj->getTds88());
        $this->assertNull($obj->getTds89());
        $this->assertNull($obj->getTds90());
        $this->assertNull($obj->getTds91());
        $this->assertNull($obj->getTds92());
        $this->assertNull($obj->getTds93());
        $this->assertNull($obj->getTds94());
        $this->assertNull($obj->getTds95());
        $this->assertNull($obj->getTdsSup120());
        $this->assertNull($obj->getTdsSup1200());
        $this->assertNull($obj->getTds142());
        $this->assertNull($obj->getTds142DejaCalcule());
        $this->assertNull($obj->getTdsAbattFraisPro());
        $this->assertNull($obj->getTdsAllocChom());
        $this->assertNull($obj->getTdsAllocComplIjss());
        $this->assertNull($obj->getTdsAllocRetraite());
        $this->assertNull($obj->getTdsContribCeChequesVac());
        $this->assertNull($obj->getTdsCumulN());
        $this->assertNull($obj->getTdsFlagRaz());
        $this->assertNull($obj->getTdsIndemnDepartRetraite());
        $this->assertNull($obj->getTdsIndemnImposables());
        $this->assertNull($obj->getTdsRembFraisPro());
        $this->assertNull($obj->getTdsSommeExoTaxeSal());
        $this->assertNull($obj->getTotalPlaf());
    }
}
