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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\EmpTdsCalcul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp tds calcul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpTdsCalculTest extends AbstractTestCase {

    /**
     * Test setBaseCalcTds142()
     *
     * @return void
     */
    public function testSetBaseCalcTds142(): void {

        $obj = new EmpTdsCalcul();

        $obj->setBaseCalcTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseCalcTds142());
    }

    /**
     * Test setCodeAtPer()
     *
     * @return void
     */
    public function testSetCodeAtPer(): void {

        $obj = new EmpTdsCalcul();

        $obj->setCodeAtPer(10);
        $this->assertEquals(10, $obj->getCodeAtPer());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpTdsCalcul();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCumNetImpos()
     *
     * @return void
     */
    public function testSetCumNetImpos(): void {

        $obj = new EmpTdsCalcul();

        $obj->setCumNetImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImpos());
    }

    /**
     * Test setDebutPeriodeDecl()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeDecl(): void {

        // Set a Date/time mock.
        $debutPeriodeDecl = new DateTime("2018-09-10");

        $obj = new EmpTdsCalcul();

        $obj->setDebutPeriodeDecl($debutPeriodeDecl);
        $this->assertSame($debutPeriodeDecl, $obj->getDebutPeriodeDecl());
    }

    /**
     * Test setDernierePeriodeAnnee()
     *
     * @return void
     */
    public function testSetDernierePeriodeAnnee(): void {

        $obj = new EmpTdsCalcul();

        $obj->setDernierePeriodeAnnee(true);
        $this->assertTrue($obj->getDernierePeriodeAnnee());
    }

    /**
     * Test setFinPeriodeDecl()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeDecl(): void {

        // Set a Date/time mock.
        $finPeriodeDecl = new DateTime("2018-09-10");

        $obj = new EmpTdsCalcul();

        $obj->setFinPeriodeDecl($finPeriodeDecl);
        $this->assertSame($finPeriodeDecl, $obj->getFinPeriodeDecl());
    }

    /**
     * Test setIndemnImpat()
     *
     * @return void
     */
    public function testSetIndemnImpat(): void {

        $obj = new EmpTdsCalcul();

        $obj->setIndemnImpat(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnImpat());
    }

    /**
     * Test setMontantHSupComplExo()
     *
     * @return void
     */
    public function testSetMontantHSupComplExo(): void {

        $obj = new EmpTdsCalcul();

        $obj->setMontantHSupComplExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHSupComplExo());
    }

    /**
     * Test setNbHeureSal()
     *
     * @return void
     */
    public function testSetNbHeureSal(): void {

        $obj = new EmpTdsCalcul();

        $obj->setNbHeureSal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSal());
    }

    /**
     * Test setNbHeureTrav()
     *
     * @return void
     */
    public function testSetNbHeureTrav(): void {

        $obj = new EmpTdsCalcul();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Test setNbPerPaie()
     *
     * @return void
     */
    public function testSetNbPerPaie(): void {

        $obj = new EmpTdsCalcul();

        $obj->setNbPerPaie(10);
        $this->assertEquals(10, $obj->getNbPerPaie());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpTdsCalcul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpTdsCalcul();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Test setParticipServPers()
     *
     * @return void
     */
    public function testSetParticipServPers(): void {

        $obj = new EmpTdsCalcul();

        $obj->setParticipServPers(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipServPers());
    }

    /**
     * Test setPremierePeriodeAnnee()
     *
     * @return void
     */
    public function testSetPremierePeriodeAnnee(): void {

        $obj = new EmpTdsCalcul();

        $obj->setPremierePeriodeAnnee(true);
        $this->assertTrue($obj->getPremierePeriodeAnnee());
    }

    /**
     * Test setTds100()
     *
     * @return void
     */
    public function testSetTds100(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Test setTds102()
     *
     * @return void
     */
    public function testSetTds102(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds102(10.092018);
        $this->assertEquals(10.092018, $obj->getTds102());
    }

    /**
     * Test setTds103()
     *
     * @return void
     */
    public function testSetTds103(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Test setTds105()
     *
     * @return void
     */
    public function testSetTds105(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Test setTds107()
     *
     * @return void
     */
    public function testSetTds107(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds107(true);
        $this->assertTrue($obj->getTds107());
    }

    /**
     * Test setTds108()
     *
     * @return void
     */
    public function testSetTds108(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds108(true);
        $this->assertTrue($obj->getTds108());
    }

    /**
     * Test setTds109()
     *
     * @return void
     */
    public function testSetTds109(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds109(true);
        $this->assertTrue($obj->getTds109());
    }

    /**
     * Test setTds110()
     *
     * @return void
     */
    public function testSetTds110(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds110(true);
        $this->assertTrue($obj->getTds110());
    }

    /**
     * Test setTds111()
     *
     * @return void
     */
    public function testSetTds111(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds111(true);
        $this->assertTrue($obj->getTds111());
    }

    /**
     * Test setTds112()
     *
     * @return void
     */
    public function testSetTds112(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Test setTds113()
     *
     * @return void
     */
    public function testSetTds113(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds113(true);
        $this->assertTrue($obj->getTds113());
    }

    /**
     * Test setTds117()
     *
     * @return void
     */
    public function testSetTds117(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Test setTds119()
     *
     * @return void
     */
    public function testSetTds119(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds119(true);
        $this->assertTrue($obj->getTds119());
    }

    /**
     * Test setTds120()
     *
     * @return void
     */
    public function testSetTds120(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds120(true);
        $this->assertTrue($obj->getTds120());
    }

    /**
     * Test setTds121()
     *
     * @return void
     */
    public function testSetTds121(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds121(true);
        $this->assertTrue($obj->getTds121());
    }

    /**
     * Test setTds122()
     *
     * @return void
     */
    public function testSetTds122(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds122(true);
        $this->assertTrue($obj->getTds122());
    }

    /**
     * Test setTds125()
     *
     * @return void
     */
    public function testSetTds125(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Test setTds127()
     *
     * @return void
     */
    public function testSetTds127(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds127(10.092018);
        $this->assertEquals(10.092018, $obj->getTds127());
    }

    /**
     * Test setTds128()
     *
     * @return void
     */
    public function testSetTds128(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Test setTds132()
     *
     * @return void
     */
    public function testSetTds132(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Test setTds133()
     *
     * @return void
     */
    public function testSetTds133(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds133("tds133");
        $this->assertEquals("tds133", $obj->getTds133());
    }

    /**
     * Test setTds134()
     *
     * @return void
     */
    public function testSetTds134(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Test setTds135()
     *
     * @return void
     */
    public function testSetTds135(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Test setTds136()
     *
     * @return void
     */
    public function testSetTds136(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Test setTds137()
     *
     * @return void
     */
    public function testSetTds137(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds137(10.092018);
        $this->assertEquals(10.092018, $obj->getTds137());
    }

    /**
     * Test setTds139()
     *
     * @return void
     */
    public function testSetTds139(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds139("tds139");
        $this->assertEquals("tds139", $obj->getTds139());
    }

    /**
     * Test setTds141()
     *
     * @return void
     */
    public function testSetTds141(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Test setTds142()
     *
     * @return void
     */
    public function testSetTds142(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Test setTds142DejaCalcule()
     *
     * @return void
     */
    public function testSetTds142DejaCalcule(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds142DejaCalcule(true);
        $this->assertTrue($obj->getTds142DejaCalcule());
    }

    /**
     * Test setTds75()
     *
     * @return void
     */
    public function testSetTds75(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds75(10);
        $this->assertEquals(10, $obj->getTds75());
    }

    /**
     * Test setTds77()
     *
     * @return void
     */
    public function testSetTds77(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds77("tds77");
        $this->assertEquals("tds77", $obj->getTds77());
    }

    /**
     * Test setTds78()
     *
     * @return void
     */
    public function testSetTds78(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds78(true);
        $this->assertTrue($obj->getTds78());
    }

    /**
     * Test setTds81()
     *
     * @return void
     */
    public function testSetTds81(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Test setTds82()
     *
     * @return void
     */
    public function testSetTds82(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Test setTds84()
     *
     * @return void
     */
    public function testSetTds84(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds84(10.092018);
        $this->assertEquals(10.092018, $obj->getTds84());
    }

    /**
     * Test setTds85()
     *
     * @return void
     */
    public function testSetTds85(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds85(10.092018);
        $this->assertEquals(10.092018, $obj->getTds85());
    }

    /**
     * Test setTds86()
     *
     * @return void
     */
    public function testSetTds86(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds86(10.092018);
        $this->assertEquals(10.092018, $obj->getTds86());
    }

    /**
     * Test setTds87()
     *
     * @return void
     */
    public function testSetTds87(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds87(10.092018);
        $this->assertEquals(10.092018, $obj->getTds87());
    }

    /**
     * Test setTds88()
     *
     * @return void
     */
    public function testSetTds88(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds88(10.092018);
        $this->assertEquals(10.092018, $obj->getTds88());
    }

    /**
     * Test setTds89()
     *
     * @return void
     */
    public function testSetTds89(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds89(10.092018);
        $this->assertEquals(10.092018, $obj->getTds89());
    }

    /**
     * Test setTds90()
     *
     * @return void
     */
    public function testSetTds90(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds90(10.092018);
        $this->assertEquals(10.092018, $obj->getTds90());
    }

    /**
     * Test setTds91()
     *
     * @return void
     */
    public function testSetTds91(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds91(10.092018);
        $this->assertEquals(10.092018, $obj->getTds91());
    }

    /**
     * Test setTds92()
     *
     * @return void
     */
    public function testSetTds92(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds92(10.092018);
        $this->assertEquals(10.092018, $obj->getTds92());
    }

    /**
     * Test setTds93()
     *
     * @return void
     */
    public function testSetTds93(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds93(10.092018);
        $this->assertEquals(10.092018, $obj->getTds93());
    }

    /**
     * Test setTds94()
     *
     * @return void
     */
    public function testSetTds94(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds94(10.092018);
        $this->assertEquals(10.092018, $obj->getTds94());
    }

    /**
     * Test setTds95()
     *
     * @return void
     */
    public function testSetTds95(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTds95(10.092018);
        $this->assertEquals(10.092018, $obj->getTds95());
    }

    /**
     * Test setTdsAbattFraisPro()
     *
     * @return void
     */
    public function testSetTdsAbattFraisPro(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAbattFraisPro(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAbattFraisPro());
    }

    /**
     * Test setTdsAllocChom()
     *
     * @return void
     */
    public function testSetTdsAllocChom(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAllocChom(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocChom());
    }

    /**
     * Test setTdsAllocComplIjss()
     *
     * @return void
     */
    public function testSetTdsAllocComplIjss(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAllocComplIjss(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocComplIjss());
    }

    /**
     * Test setTdsAllocRetraite()
     *
     * @return void
     */
    public function testSetTdsAllocRetraite(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Test setTdsContribCeChequesVac()
     *
     * @return void
     */
    public function testSetTdsContribCeChequesVac(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsContribCeChequesVac(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsContribCeChequesVac());
    }

    /**
     * Test setTdsCumulN()
     *
     * @return void
     */
    public function testSetTdsCumulN(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsCumulN(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsCumulN());
    }

    /**
     * Test setTdsFlagRaz()
     *
     * @return void
     */
    public function testSetTdsFlagRaz(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsFlagRaz(10);
        $this->assertEquals(10, $obj->getTdsFlagRaz());
    }

    /**
     * Test setTdsIndemnDepartRetraite()
     *
     * @return void
     */
    public function testSetTdsIndemnDepartRetraite(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsIndemnDepartRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsIndemnDepartRetraite());
    }

    /**
     * Test setTdsIndemnImposables()
     *
     * @return void
     */
    public function testSetTdsIndemnImposables(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsIndemnImposables(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsIndemnImposables());
    }

    /**
     * Test setTdsRembFraisPro()
     *
     * @return void
     */
    public function testSetTdsRembFraisPro(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsRembFraisPro(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsRembFraisPro());
    }

    /**
     * Test setTdsSommeExoTaxeSal()
     *
     * @return void
     */
    public function testSetTdsSommeExoTaxeSal(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsSommeExoTaxeSal(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsSommeExoTaxeSal());
    }

    /**
     * Test setTdsSup120()
     *
     * @return void
     */
    public function testSetTdsSup120(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsSup120("tdsSup120");
        $this->assertEquals("tdsSup120", $obj->getTdsSup120());
    }

    /**
     * Test setTdsSup1200()
     *
     * @return void
     */
    public function testSetTdsSup1200(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTdsSup1200("tdsSup1200");
        $this->assertEquals("tdsSup1200", $obj->getTdsSup1200());
    }

    /**
     * Test setTotalPlaf()
     *
     * @return void
     */
    public function testSetTotalPlaf(): void {

        $obj = new EmpTdsCalcul();

        $obj->setTotalPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalPlaf());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
