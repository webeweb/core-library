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
use WBW\Library\Quadratus\Model\QPaie\Bulletins;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bulletins test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class BulletinsTest extends AbstractTestCase {

    /**
     * Tests setAbatTheo()
     *
     * @return void
     */
    public function testSetAbatTheo(): void {

        $obj = new Bulletins();

        $obj->setAbatTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getAbatTheo());
    }

    /**
     * Tests setAbattementMax()
     *
     * @return void
     */
    public function testSetAbattementMax(): void {

        $obj = new Bulletins();

        $obj->setAbattementMax(10.092018);
        $this->assertEquals(10.092018, $obj->getAbattementMax());
    }

    /**
     * Tests setAllegement()
     *
     * @return void
     */
    public function testSetAllegement(): void {

        $obj = new Bulletins();

        $obj->setAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getAllegement());
    }

    /**
     * Tests setAllegementNonProratise()
     *
     * @return void
     */
    public function testSetAllegementNonProratise(): void {

        $obj = new Bulletins();

        $obj->setAllegementNonProratise(10.092018);
        $this->assertEquals(10.092018, $obj->getAllegementNonProratise());
    }

    /**
     * Tests setAvantageNature()
     *
     * @return void
     */
    public function testSetAvantageNature(): void {

        $obj = new Bulletins();

        $obj->setAvantageNature(10.092018);
        $this->assertEquals(10.092018, $obj->getAvantageNature());
    }

    /**
     * Tests setBaseGmp()
     *
     * @return void
     */
    public function testSetBaseGmp(): void {

        $obj = new Bulletins();

        $obj->setBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseGmp());
    }

    /**
     * Tests setBaseSecu()
     *
     * @return void
     */
    public function testSetBaseSecu(): void {

        $obj = new Bulletins();

        $obj->setBaseSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSecu());
    }

    /**
     * Tests setBaseSsPlafModif()
     *
     * @return void
     */
    public function testSetBaseSsPlafModif(): void {

        $obj = new Bulletins();

        $obj->setBaseSsPlafModif(true);
        $this->assertEquals(true, $obj->getBaseSsPlafModif());
    }

    /**
     * Tests setBornePerModifie()
     *
     * @return void
     */
    public function testSetBornePerModifie(): void {

        $obj = new Bulletins();

        $obj->setBornePerModifie(true);
        $this->assertEquals(true, $obj->getBornePerModifie());
    }

    /**
     * Tests setBrut()
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new Bulletins();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests setBrutAl()
     *
     * @return void
     */
    public function testSetBrutAl(): void {

        $obj = new Bulletins();

        $obj->setBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAl());
    }

    /**
     * Tests setBrutAlLimiteSmic()
     *
     * @return void
     */
    public function testSetBrutAlLimiteSmic(): void {

        $obj = new Bulletins();

        $obj->setBrutAlLimiteSmic(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlLimiteSmic());
    }

    /**
     * Tests setBrutAlModifie()
     *
     * @return void
     */
    public function testSetBrutAlModifie(): void {

        $obj = new Bulletins();

        $obj->setBrutAlModifie(true);
        $this->assertEquals(true, $obj->getBrutAlModifie());
    }

    /**
     * Tests setBrutAnl()
     *
     * @return void
     */
    public function testSetBrutAnl(): void {

        $obj = new Bulletins();

        $obj->setBrutAnl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAnl());
    }

    /**
     * Tests setBrutCaisse1()
     *
     * @return void
     */
    public function testSetBrutCaisse1(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse1());
    }

    /**
     * Tests setBrutCaisse2()
     *
     * @return void
     */
    public function testSetBrutCaisse2(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse2());
    }

    /**
     * Tests setBrutCaisse3()
     *
     * @return void
     */
    public function testSetBrutCaisse3(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse3());
    }

    /**
     * Tests setBrutCaisseCp()
     *
     * @return void
     */
    public function testSetBrutCaisseCp(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisseCp());
    }

    /**
     * Tests setBrutCp()
     *
     * @return void
     */
    public function testSetBrutCp(): void {

        $obj = new Bulletins();

        $obj->setBrutCp(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCp());
    }

    /**
     * Tests setBrutCsg()
     *
     * @return void
     */
    public function testSetBrutCsg(): void {

        $obj = new Bulletins();

        $obj->setBrutCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCsg());
    }

    /**
     * Tests setBrutSoumisAbat()
     *
     * @return void
     */
    public function testSetBrutSoumisAbat(): void {

        $obj = new Bulletins();

        $obj->setBrutSoumisAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutSoumisAbat());
    }

    /**
     * Tests setBrutSoumisCrds()
     *
     * @return void
     */
    public function testSetBrutSoumisCrds(): void {

        $obj = new Bulletins();

        $obj->setBrutSoumisCrds(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutSoumisCrds());
    }

    /**
     * Tests setBulletinPublie()
     *
     * @return void
     */
    public function testSetBulletinPublie(): void {

        $obj = new Bulletins();

        $obj->setBulletinPublie(true);
        $this->assertEquals(true, $obj->getBulletinPublie());
    }

    /**
     * Tests setCategTds()
     *
     * @return void
     */
    public function testSetCategTds(): void {

        $obj = new Bulletins();

        $obj->setCategTds("categTds");
        $this->assertEquals("categTds", $obj->getCategTds());
    }

    /**
     * Tests setChequeEdite()
     *
     * @return void
     */
    public function testSetChequeEdite(): void {

        $obj = new Bulletins();

        $obj->setChequeEdite(true);
        $this->assertEquals(true, $obj->getChequeEdite());
    }

    /**
     * Tests setChomPartielCoeffIndem()
     *
     * @return void
     */
    public function testSetChomPartielCoeffIndem(): void {

        $obj = new Bulletins();

        $obj->setChomPartielCoeffIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielCoeffIndem());
    }

    /**
     * Tests setChomPartielCp()
     *
     * @return void
     */
    public function testSetChomPartielCp(): void {

        $obj = new Bulletins();

        $obj->setChomPartielCp(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielCp());
    }

    /**
     * Tests setChomPartielMinIndem()
     *
     * @return void
     */
    public function testSetChomPartielMinIndem(): void {

        $obj = new Bulletins();

        $obj->setChomPartielMinIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielMinIndem());
    }

    /**
     * Tests setCodeAtPer()
     *
     * @return void
     */
    public function testSetCodeAtPer(): void {

        $obj = new Bulletins();

        $obj->setCodeAtPer(10);
        $this->assertEquals(10, $obj->getCodeAtPer());
    }

    /**
     * Tests setCodeCentreUrssaf()
     *
     * @return void
     */
    public function testSetCodeCentreUrssaf(): void {

        $obj = new Bulletins();

        $obj->setCodeCentreUrssaf("codeCentreUrssaf");
        $this->assertEquals("codeCentreUrssaf", $obj->getCodeCentreUrssaf());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Bulletins();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeTypeSal()
     *
     * @return void
     */
    public function testSetCodeTypeSal(): void {

        $obj = new Bulletins();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }

    /**
     * Tests setCoeffIntemperie()
     *
     * @return void
     */
    public function testSetCoeffIntemperie(): void {

        $obj = new Bulletins();

        $obj->setCoeffIntemperie(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffIntemperie());
    }

    /**
     * Tests setContHSupReposComp()
     *
     * @return void
     */
    public function testSetContHSupReposComp(): void {

        $obj = new Bulletins();

        $obj->setContHSupReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getContHSupReposComp());
    }

    /**
     * Tests setCoutGlobalMois()
     *
     * @return void
     */
    public function testSetCoutGlobalMois(): void {

        $obj = new Bulletins();

        $obj->setCoutGlobalMois(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutGlobalMois());
    }

    /**
     * Tests setCum30Ss()
     *
     * @return void
     */
    public function testSetCum30Ss(): void {

        $obj = new Bulletins();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Tests setCumAntHSup()
     *
     * @return void
     */
    public function testSetCumAntHSup(): void {

        $obj = new Bulletins();

        $obj->setCumAntHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumAntHSup());
    }

    /**
     * Tests setCumBaseGmp()
     *
     * @return void
     */
    public function testSetCumBaseGmp(): void {

        $obj = new Bulletins();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Tests setCumBaseSs()
     *
     * @return void
     */
    public function testSetCumBaseSs(): void {

        $obj = new Bulletins();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Tests setCumBrut()
     *
     * @return void
     */
    public function testSetCumBrut(): void {

        $obj = new Bulletins();

        $obj->setCumBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrut());
    }

    /**
     * Tests setCumBrutAl()
     *
     * @return void
     */
    public function testSetCumBrutAl(): void {

        $obj = new Bulletins();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Tests setCumBrutAnl()
     *
     * @return void
     */
    public function testSetCumBrutAnl(): void {

        $obj = new Bulletins();

        $obj->setCumBrutAnl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAnl());
    }

    /**
     * Tests setCumBrutCaisse1()
     *
     * @return void
     */
    public function testSetCumBrutCaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Tests setCumBrutCaisse2()
     *
     * @return void
     */
    public function testSetCumBrutCaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Tests setCumBrutCaisse3()
     *
     * @return void
     */
    public function testSetCumBrutCaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Tests setCumDifDus()
     *
     * @return void
     */
    public function testSetCumDifDus(): void {

        $obj = new Bulletins();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Tests setCumDifDus1()
     *
     * @return void
     */
    public function testSetCumDifDus1(): void {

        $obj = new Bulletins();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }

    /**
     * Tests setCumHBonifie()
     *
     * @return void
     */
    public function testSetCumHBonifie(): void {

        $obj = new Bulletins();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Tests setCumHReposComp()
     *
     * @return void
     */
    public function testSetCumHReposComp(): void {

        $obj = new Bulletins();

        $obj->setCumHReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposComp());
    }

    /**
     * Tests setCumHReposRemplace()
     *
     * @return void
     */
    public function testSetCumHReposRemplace(): void {

        $obj = new Bulletins();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Tests setCumHService()
     *
     * @return void
     */
    public function testSetCumHService(): void {

        $obj = new Bulletins();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Tests setCumImpos()
     *
     * @return void
     */
    public function testSetCumImpos(): void {

        $obj = new Bulletins();

        $obj->setCumImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getCumImpos());
    }

    /**
     * Tests setCumJReposRecup()
     *
     * @return void
     */
    public function testSetCumJReposRecup(): void {

        $obj = new Bulletins();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Tests setCumMtCpPris()
     *
     * @return void
     */
    public function testSetCumMtCpPris(): void {

        $obj = new Bulletins();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Tests setCumMtCpPris1()
     *
     * @return void
     */
    public function testSetCumMtCpPris1(): void {

        $obj = new Bulletins();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Tests setCumNetAPayer()
     *
     * @return void
     */
    public function testSetCumNetAPayer(): void {

        $obj = new Bulletins();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Tests setCumPlaf1Caisse1()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Tests setCumPlaf1Caisse2()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Tests setCumPlaf1Caisse3()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Tests setCumPlaf2Caisse1()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Tests setCumPlaf2Caisse2()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Tests setCumPlaf2Caisse3()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Tests setCumPlafondGmp()
     *
     * @return void
     */
    public function testSetCumPlafondGmp(): void {

        $obj = new Bulletins();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Tests setCumPss1()
     *
     * @return void
     */
    public function testSetCumPss1(): void {

        $obj = new Bulletins();

        $obj->setCumPss1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPss1());
    }

    /**
     * Tests setCumPss2()
     *
     * @return void
     */
    public function testSetCumPss2(): void {

        $obj = new Bulletins();

        $obj->setCumPss2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPss2());
    }

    /**
     * Tests setCumRttDus()
     *
     * @return void
     */
    public function testSetCumRttDus(): void {

        $obj = new Bulletins();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Tests setCumRttPris()
     *
     * @return void
     */
    public function testSetCumRttPris(): void {

        $obj = new Bulletins();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Tests setCumTrACaisse1()
     *
     * @return void
     */
    public function testSetCumTrACaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse1());
    }

    /**
     * Tests setCumTrACaisse2()
     *
     * @return void
     */
    public function testSetCumTrACaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse2());
    }

    /**
     * Tests setCumTrACaisse3()
     *
     * @return void
     */
    public function testSetCumTrACaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse3());
    }

    /**
     * Tests setCumTrBCaisse1()
     *
     * @return void
     */
    public function testSetCumTrBCaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse1());
    }

    /**
     * Tests setCumTrBCaisse2()
     *
     * @return void
     */
    public function testSetCumTrBCaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse2());
    }

    /**
     * Tests setCumTrBCaisse3()
     *
     * @return void
     */
    public function testSetCumTrBCaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse3());
    }

    /**
     * Tests setCumTrCCaisse1()
     *
     * @return void
     */
    public function testSetCumTrCCaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse1());
    }

    /**
     * Tests setCumTrCCaisse2()
     *
     * @return void
     */
    public function testSetCumTrCCaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse2());
    }

    /**
     * Tests setCumTrCCaisse3()
     *
     * @return void
     */
    public function testSetCumTrCCaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse3());
    }

    /**
     * Tests setCumTranche2()
     *
     * @return void
     */
    public function testSetCumTranche2(): void {

        $obj = new Bulletins();

        $obj->setCumTranche2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2());
    }

    /**
     * Tests setCumTrancheA()
     *
     * @return void
     */
    public function testSetCumTrancheA(): void {

        $obj = new Bulletins();

        $obj->setCumTrancheA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheA());
    }

    /**
     * Tests setCumTrancheB()
     *
     * @return void
     */
    public function testSetCumTrancheB(): void {

        $obj = new Bulletins();

        $obj->setCumTrancheB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheB());
    }

    /**
     * Tests setCumTrancheC()
     *
     * @return void
     */
    public function testSetCumTrancheC(): void {

        $obj = new Bulletins();

        $obj->setCumTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheC());
    }

    /**
     * Tests setDelta()
     *
     * @return void
     */
    public function testSetDelta(): void {

        $obj = new Bulletins();

        $obj->setDelta(10.092018);
        $this->assertEquals(10.092018, $obj->getDelta());
    }

    /**
     * Tests setDroitCp()
     *
     * @return void
     */
    public function testSetDroitCp(): void {

        $obj = new Bulletins();

        $obj->setDroitCp(10.092018);
        $this->assertEquals(10.092018, $obj->getDroitCp());
    }

    /**
     * Tests setDtDebutPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutPeriode(): void {

        // Set a Date/time mock.
        $dtDebutPeriode = new DateTime("2018-09-10");

        $obj = new Bulletins();

        $obj->setDtDebutPeriode($dtDebutPeriode);
        $this->assertSame($dtDebutPeriode, $obj->getDtDebutPeriode());
    }

    /**
     * Tests setDtFinPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPeriode(): void {

        // Set a Date/time mock.
        $dtFinPeriode = new DateTime("2018-09-10");

        $obj = new Bulletins();

        $obj->setDtFinPeriode($dtFinPeriode);
        $this->assertSame($dtFinPeriode, $obj->getDtFinPeriode());
    }

    /**
     * Tests setEcartCumule()
     *
     * @return void
     */
    public function testSetEcartCumule(): void {

        $obj = new Bulletins();

        $obj->setEcartCumule(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartCumule());
    }

    /**
     * Tests setEtatBul()
     *
     * @return void
     */
    public function testSetEtatBul(): void {

        $obj = new Bulletins();

        $obj->setEtatBul("etatBul");
        $this->assertEquals("etatBul", $obj->getEtatBul());
    }

    /**
     * Tests setEtatEdition()
     *
     * @return void
     */
    public function testSetEtatEdition(): void {

        $obj = new Bulletins();

        $obj->setEtatEdition("etatEdition");
        $this->assertEquals("etatEdition", $obj->getEtatEdition());
    }

    /**
     * Tests setForfaitJour()
     *
     * @return void
     */
    public function testSetForfaitJour(): void {

        $obj = new Bulletins();

        $obj->setForfaitJour(true);
        $this->assertEquals(true, $obj->getForfaitJour());
    }

    /**
     * Tests setGestCalcNetPaye()
     *
     * @return void
     */
    public function testSetGestCalcNetPaye(): void {

        $obj = new Bulletins();

        $obj->setGestCalcNetPaye(true);
        $this->assertEquals(true, $obj->getGestCalcNetPaye());
    }

    /**
     * Tests setGestionCoeff()
     *
     * @return void
     */
    public function testSetGestionCoeff(): void {

        $obj = new Bulletins();

        $obj->setGestionCoeff(true);
        $this->assertEquals(true, $obj->getGestionCoeff());
    }

    /**
     * Tests setHReelTrav()
     *
     * @return void
     */
    public function testSetHReelTrav(): void {

        $obj = new Bulletins();

        $obj->setHReelTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHReelTrav());
    }

    /**
     * Tests setHTheoTrav()
     *
     * @return void
     */
    public function testSetHTheoTrav(): void {

        $obj = new Bulletins();

        $obj->setHTheoTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHTheoTrav());
    }

    /**
     * Tests setHeureAbsence()
     *
     * @return void
     */
    public function testSetHeureAbsence(): void {

        $obj = new Bulletins();

        $obj->setHeureAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getHeureAbsence());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new Bulletins();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Bulletins();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Bulletins();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLienJustificatif()
     *
     * @return void
     */
    public function testSetLienJustificatif(): void {

        $obj = new Bulletins();

        $obj->setLienJustificatif("lienJustificatif");
        $this->assertEquals("lienJustificatif", $obj->getLienJustificatif());
    }

    /**
     * Tests setMaxAbat()
     *
     * @return void
     */
    public function testSetMaxAbat(): void {

        $obj = new Bulletins();

        $obj->setMaxAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getMaxAbat());
    }

    /**
     * Tests setMensuelJournalier()
     *
     * @return void
     */
    public function testSetMensuelJournalier(): void {

        $obj = new Bulletins();

        $obj->setMensuelJournalier(true);
        $this->assertEquals(true, $obj->getMensuelJournalier());
    }

    /**
     * Tests setMethodeIndemCp()
     *
     * @return void
     */
    public function testSetMethodeIndemCp(): void {

        $obj = new Bulletins();

        $obj->setMethodeIndemCp("methodeIndemCp");
        $this->assertEquals("methodeIndemCp", $obj->getMethodeIndemCp());
    }

    /**
     * Tests setMig()
     *
     * @return void
     */
    public function testSetMig(): void {

        $obj = new Bulletins();

        $obj->setMig(10.092018);
        $this->assertEquals(10.092018, $obj->getMig());
    }

    /**
     * Tests setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new Bulletins();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new Bulletins();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new Bulletins();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests setMontant4()
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new Bulletins();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests setMontant5()
     *
     * @return void
     */
    public function testSetMontant5(): void {

        $obj = new Bulletins();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Tests setMtHSupBonif()
     *
     * @return void
     */
    public function testSetMtHSupBonif(): void {

        $obj = new Bulletins();

        $obj->setMtHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getMtHSupBonif());
    }

    /**
     * Tests setMtICpCp()
     *
     * @return void
     */
    public function testSetMtICpCp(): void {

        $obj = new Bulletins();

        $obj->setMtICpCp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtICpCp());
    }

    /**
     * Tests setMtICpt()
     *
     * @return void
     */
    public function testSetMtICpt(): void {

        $obj = new Bulletins();

        $obj->setMtICpt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtICpt());
    }

    /**
     * Tests setMtIInt()
     *
     * @return void
     */
    public function testSetMtIInt(): void {

        $obj = new Bulletins();

        $obj->setMtIInt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIInt());
    }

    /**
     * Tests setMtJcpArbitrage()
     *
     * @return void
     */
    public function testSetMtJcpArbitrage(): void {

        $obj = new Bulletins();

        $obj->setMtJcpArbitrage(true);
        $this->assertEquals(true, $obj->getMtJcpArbitrage());
    }

    /**
     * Tests setMtJourneeCp()
     *
     * @return void
     */
    public function testSetMtJourneeCp(): void {

        $obj = new Bulletins();

        $obj->setMtJourneeCp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCp());
    }

    /**
     * Tests setMtNetPayeTheo()
     *
     * @return void
     */
    public function testSetMtNetPayeTheo(): void {

        $obj = new Bulletins();

        $obj->setMtNetPayeTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtNetPayeTheo());
    }

    /**
     * Tests setMtTauxLigSalBase()
     *
     * @return void
     */
    public function testSetMtTauxLigSalBase(): void {

        $obj = new Bulletins();

        $obj->setMtTauxLigSalBase(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTauxLigSalBase());
    }

    /**
     * Tests setNb30()
     *
     * @return void
     */
    public function testSetNb30(): void {

        $obj = new Bulletins();

        $obj->setNb30(10.092018);
        $this->assertEquals(10.092018, $obj->getNb30());
    }

    /**
     * Tests setNbHAbCp()
     *
     * @return void
     */
    public function testSetNbHAbCp(): void {

        $obj = new Bulletins();

        $obj->setNbHAbCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCp());
    }

    /**
     * Tests setNbHAbsenceIntemp()
     *
     * @return void
     */
    public function testSetNbHAbsenceIntemp(): void {

        $obj = new Bulletins();

        $obj->setNbHAbsenceIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsenceIntemp());
    }

    /**
     * Tests setNbHAttente()
     *
     * @return void
     */
    public function testSetNbHAttente(): void {

        $obj = new Bulletins();

        $obj->setNbHAttente(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAttente());
    }

    /**
     * Tests setNbHBonifieDues()
     *
     * @return void
     */
    public function testSetNbHBonifieDues(): void {

        $obj = new Bulletins();

        $obj->setNbHBonifieDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifieDues());
    }

    /**
     * Tests setNbHBonifiePrises()
     *
     * @return void
     */
    public function testSetNbHBonifiePrises(): void {

        $obj = new Bulletins();

        $obj->setNbHBonifiePrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifiePrises());
    }

    /**
     * Tests setNbHCarenceIntemp()
     *
     * @return void
     */
    public function testSetNbHCarenceIntemp(): void {

        $obj = new Bulletins();

        $obj->setNbHCarenceIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHCarenceIntemp());
    }

    /**
     * Tests setNbHChomPartCp()
     *
     * @return void
     */
    public function testSetNbHChomPartCp(): void {

        $obj = new Bulletins();

        $obj->setNbHChomPartCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartCp());
    }

    /**
     * Tests setNbHChomPartTech()
     *
     * @return void
     */
    public function testSetNbHChomPartTech(): void {

        $obj = new Bulletins();

        $obj->setNbHChomPartTech(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartTech());
    }

    /**
     * Tests setNbHConduite()
     *
     * @return void
     */
    public function testSetNbHConduite(): void {

        $obj = new Bulletins();

        $obj->setNbHConduite(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHConduite());
    }

    /**
     * Tests setNbHConting()
     *
     * @return void
     */
    public function testSetNbHConting(): void {

        $obj = new Bulletins();

        $obj->setNbHConting(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHConting());
    }

    /**
     * Tests setNbHDble()
     *
     * @return void
     */
    public function testSetNbHDble(): void {

        $obj = new Bulletins();

        $obj->setNbHDble(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDble());
    }

    /**
     * Tests setNbHDifDus()
     *
     * @return void
     */
    public function testSetNbHDifDus(): void {

        $obj = new Bulletins();

        $obj->setNbHDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDifDus());
    }

    /**
     * Tests setNbHIntempIndem()
     *
     * @return void
     */
    public function testSetNbHIntempIndem(): void {

        $obj = new Bulletins();

        $obj->setNbHIntempIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHIntempIndem());
    }

    /**
     * Tests setNbHLigSalBase()
     *
     * @return void
     */
    public function testSetNbHLigSalBase(): void {

        $obj = new Bulletins();

        $obj->setNbHLigSalBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHLigSalBase());
    }

    /**
     * Tests setNbHNormal()
     *
     * @return void
     */
    public function testSetNbHNormal(): void {

        $obj = new Bulletins();

        $obj->setNbHNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNormal());
    }

    /**
     * Tests setNbHPasDroitFillon()
     *
     * @return void
     */
    public function testSetNbHPasDroitFillon(): void {

        $obj = new Bulletins();

        $obj->setNbHPasDroitFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHPasDroitFillon());
    }

    /**
     * Tests setNbHRemplace()
     *
     * @return void
     */
    public function testSetNbHRemplace(): void {

        $obj = new Bulletins();

        $obj->setNbHRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRemplace());
    }

    /**
     * Tests setNbHRepoCompDues()
     *
     * @return void
     */
    public function testSetNbHRepoCompDues(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoCompDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoCompDues());
    }

    /**
     * Tests setNbHRepoCompPrises()
     *
     * @return void
     */
    public function testSetNbHRepoCompPrises(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoCompPrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoCompPrises());
    }

    /**
     * Tests setNbHRepoRDues()
     *
     * @return void
     */
    public function testSetNbHRepoRDues(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoRDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoRDues());
    }

    /**
     * Tests setNbHRepoRPrises()
     *
     * @return void
     */
    public function testSetNbHRepoRPrises(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoRPrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoRPrises());
    }

    /**
     * Tests setNbHSup1()
     *
     * @return void
     */
    public function testSetNbHSup1(): void {

        $obj = new Bulletins();

        $obj->setNbHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup1());
    }

    /**
     * Tests setNbHSup2()
     *
     * @return void
     */
    public function testSetNbHSup2(): void {

        $obj = new Bulletins();

        $obj->setNbHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup2());
    }

    /**
     * Tests setNbHSup3()
     *
     * @return void
     */
    public function testSetNbHSup3(): void {

        $obj = new Bulletins();

        $obj->setNbHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup3());
    }

    /**
     * Tests setNbHSup4()
     *
     * @return void
     */
    public function testSetNbHSup4(): void {

        $obj = new Bulletins();

        $obj->setNbHSup4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup4());
    }

    /**
     * Tests setNbHSup5()
     *
     * @return void
     */
    public function testSetNbHSup5(): void {

        $obj = new Bulletins();

        $obj->setNbHSup5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup5());
    }

    /**
     * Tests setNbHSupBonif()
     *
     * @return void
     */
    public function testSetNbHSupBonif(): void {

        $obj = new Bulletins();

        $obj->setNbHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupBonif());
    }

    /**
     * Tests setNbHSupBonifAbs()
     *
     * @return void
     */
    public function testSetNbHSupBonifAbs(): void {

        $obj = new Bulletins();

        $obj->setNbHSupBonifAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupBonifAbs());
    }

    /**
     * Tests setNbHTrav()
     *
     * @return void
     */
    public function testSetNbHTrav(): void {

        $obj = new Bulletins();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests setNbHTravail()
     *
     * @return void
     */
    public function testSetNbHTravail(): void {

        $obj = new Bulletins();

        $obj->setNbHTravail(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTravail());
    }

    /**
     * Tests setNbHeurePaye()
     *
     * @return void
     */
    public function testSetNbHeurePaye(): void {

        $obj = new Bulletins();

        $obj->setNbHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeurePaye());
    }

    /**
     * Tests setNbHeureSup()
     *
     * @return void
     */
    public function testSetNbHeureSup(): void {

        $obj = new Bulletins();

        $obj->setNbHeureSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSup());
    }

    /**
     * Tests setNbHeureTrav()
     *
     * @return void
     */
    public function testSetNbHeureTrav(): void {

        $obj = new Bulletins();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests setNbHeureTravMois()
     *
     * @return void
     */
    public function testSetNbHeureTravMois(): void {

        $obj = new Bulletins();

        $obj->setNbHeureTravMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTravMois());
    }

    /**
     * Tests setNbJChomPartCp()
     *
     * @return void
     */
    public function testSetNbJChomPartCp(): void {

        $obj = new Bulletins();

        $obj->setNbJChomPartCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJChomPartCp());
    }

    /**
     * Tests setNbJDus()
     *
     * @return void
     */
    public function testSetNbJDus(): void {

        $obj = new Bulletins();

        $obj->setNbJDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus());
    }

    /**
     * Tests setNbJDus1()
     *
     * @return void
     */
    public function testSetNbJDus1(): void {

        $obj = new Bulletins();

        $obj->setNbJDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus1());
    }

    /**
     * Tests setNbJPris()
     *
     * @return void
     */
    public function testSetNbJPris(): void {

        $obj = new Bulletins();

        $obj->setNbJPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris());
    }

    /**
     * Tests setNbJPris1()
     *
     * @return void
     */
    public function testSetNbJPris1(): void {

        $obj = new Bulletins();

        $obj->setNbJPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris1());
    }

    /**
     * Tests setNbJRepoRecupDus()
     *
     * @return void
     */
    public function testSetNbJRepoRecupDus(): void {

        $obj = new Bulletins();

        $obj->setNbJRepoRecupDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRepoRecupDus());
    }

    /**
     * Tests setNbJRepoRecupPris()
     *
     * @return void
     */
    public function testSetNbJRepoRecupPris(): void {

        $obj = new Bulletins();

        $obj->setNbJRepoRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRepoRecupPris());
    }

    /**
     * Tests setNbJTravForce()
     *
     * @return void
     */
    public function testSetNbJTravForce(): void {

        $obj = new Bulletins();

        $obj->setNbJTravForce(true);
        $this->assertEquals(true, $obj->getNbJTravForce());
    }

    /**
     * Tests setNbJTravMoisEs()
     *
     * @return void
     */
    public function testSetNbJTravMoisEs(): void {

        $obj = new Bulletins();

        $obj->setNbJTravMoisEs(10);
        $this->assertEquals(10, $obj->getNbJTravMoisEs());
    }

    /**
     * Tests setNbJourBase()
     *
     * @return void
     */
    public function testSetNbJourBase(): void {

        $obj = new Bulletins();

        $obj->setNbJourBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBase());
    }

    /**
     * Tests setNbJourBaseCp()
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Bulletins();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Tests setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Bulletins();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests setNbJourCpPris()
     *
     * @return void
     */
    public function testSetNbJourCpPris(): void {

        $obj = new Bulletins();

        $obj->setNbJourCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpPris());
    }

    /**
     * Tests setNbJourNormaux()
     *
     * @return void
     */
    public function testSetNbJourNormaux(): void {

        $obj = new Bulletins();

        $obj->setNbJourNormaux(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourNormaux());
    }

    /**
     * Tests setNbJourTrav()
     *
     * @return void
     */
    public function testSetNbJourTrav(): void {

        $obj = new Bulletins();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests setNbJrttDus()
     *
     * @return void
     */
    public function testSetNbJrttDus(): void {

        $obj = new Bulletins();

        $obj->setNbJrttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJrttDus());
    }

    /**
     * Tests setNbJrttPris()
     *
     * @return void
     */
    public function testSetNbJrttPris(): void {

        $obj = new Bulletins();

        $obj->setNbJrttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJrttPris());
    }

    /**
     * Tests setNetAPayer()
     *
     * @return void
     */
    public function testSetNetAPayer(): void {

        $obj = new Bulletins();

        $obj->setNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getNetAPayer());
    }

    /**
     * Tests setNetImpos()
     *
     * @return void
     */
    public function testSetNetImpos(): void {

        $obj = new Bulletins();

        $obj->setNetImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getNetImpos());
    }

    /**
     * Tests setNote1()
     *
     * @return void
     */
    public function testSetNote1(): void {

        $obj = new Bulletins();

        $obj->setNote1("note1");
        $this->assertEquals("note1", $obj->getNote1());
    }

    /**
     * Tests setNote2()
     *
     * @return void
     */
    public function testSetNote2(): void {

        $obj = new Bulletins();

        $obj->setNote2("note2");
        $this->assertEquals("note2", $obj->getNote2());
    }

    /**
     * Tests setNote3()
     *
     * @return void
     */
    public function testSetNote3(): void {

        $obj = new Bulletins();

        $obj->setNote3("note3");
        $this->assertEquals("note3", $obj->getNote3());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Bulletins();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPaieEuro()
     *
     * @return void
     */
    public function testSetPaieEuro(): void {

        $obj = new Bulletins();

        $obj->setPaieEuro(true);
        $this->assertEquals(true, $obj->getPaieEuro());
    }

    /**
     * Tests setPaiementCpNonPris()
     *
     * @return void
     */
    public function testSetPaiementCpNonPris(): void {

        $obj = new Bulletins();

        $obj->setPaiementCpNonPris(true);
        $this->assertEquals(true, $obj->getPaiementCpNonPris());
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

        $obj = new Bulletins();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Bulletins();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests setPeriodiciteModifie()
     *
     * @return void
     */
    public function testSetPeriodiciteModifie(): void {

        $obj = new Bulletins();

        $obj->setPeriodiciteModifie(true);
        $this->assertEquals(true, $obj->getPeriodiciteModifie());
    }

    /**
     * Tests setPlafond1Caisse1()
     *
     * @return void
     */
    public function testSetPlafond1Caisse1(): void {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse1());
    }

    /**
     * Tests setPlafond1Caisse2()
     *
     * @return void
     */
    public function testSetPlafond1Caisse2(): void {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse2());
    }

    /**
     * Tests setPlafond1Caisse3()
     *
     * @return void
     */
    public function testSetPlafond1Caisse3(): void {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse3());
    }

    /**
     * Tests setPlafond2Caisse1()
     *
     * @return void
     */
    public function testSetPlafond2Caisse1(): void {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }

    /**
     * Tests setPlafond2Caisse2()
     *
     * @return void
     */
    public function testSetPlafond2Caisse2(): void {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse2());
    }

    /**
     * Tests setPlafond2Caisse3()
     *
     * @return void
     */
    public function testSetPlafond2Caisse3(): void {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse3());
    }

    /**
     * Tests setPlafondGmp()
     *
     * @return void
     */
    public function testSetPlafondGmp(): void {

        $obj = new Bulletins();

        $obj->setPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondGmp());
    }

    /**
     * Tests setPlafondGmpModifie()
     *
     * @return void
     */
    public function testSetPlafondGmpModifie(): void {

        $obj = new Bulletins();

        $obj->setPlafondGmpModifie(true);
        $this->assertEquals(true, $obj->getPlafondGmpModifie());
    }

    /**
     * Tests setPlafondHeure()
     *
     * @return void
     */
    public function testSetPlafondHeure(): void {

        $obj = new Bulletins();

        $obj->setPlafondHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondHeure());
    }

    /**
     * Tests setPlafondJour()
     *
     * @return void
     */
    public function testSetPlafondJour(): void {

        $obj = new Bulletins();

        $obj->setPlafondJour(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondJour());
    }

    /**
     * Tests setPlafondSemaine()
     *
     * @return void
     */
    public function testSetPlafondSemaine(): void {

        $obj = new Bulletins();

        $obj->setPlafondSemaine(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSemaine());
    }

    /**
     * Tests setPourcentAbat()
     *
     * @return void
     */
    public function testSetPourcentAbat(): void {

        $obj = new Bulletins();

        $obj->setPourcentAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAbat());
    }

    /**
     * Tests setPourcentActForce()
     *
     * @return void
     */
    public function testSetPourcentActForce(): void {

        $obj = new Bulletins();

        $obj->setPourcentActForce(10);
        $this->assertEquals(10, $obj->getPourcentActForce());
    }

    /**
     * Tests setPourcentActivite()
     *
     * @return void
     */
    public function testSetPourcentActivite(): void {

        $obj = new Bulletins();

        $obj->setPourcentActivite(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentActivite());
    }

    /**
     * Tests setPourcentRemuHor()
     *
     * @return void
     */
    public function testSetPourcentRemuHor(): void {

        $obj = new Bulletins();

        $obj->setPourcentRemuHor(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRemuHor());
    }

    /**
     * Tests setPpSoumisTaxe()
     *
     * @return void
     */
    public function testSetPpSoumisTaxe(): void {

        $obj = new Bulletins();

        $obj->setPpSoumisTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getPpSoumisTaxe());
    }

    /**
     * Tests setProvCp()
     *
     * @return void
     */
    public function testSetProvCp(): void {

        $obj = new Bulletins();

        $obj->setProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCp());
    }

    /**
     * Tests setProvCp1()
     *
     * @return void
     */
    public function testSetProvCp1(): void {

        $obj = new Bulletins();

        $obj->setProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCp1());
    }

    /**
     * Tests setPss1()
     *
     * @return void
     */
    public function testSetPss1(): void {

        $obj = new Bulletins();

        $obj->setPss1(10.092018);
        $this->assertEquals(10.092018, $obj->getPss1());
    }

    /**
     * Tests setPss2()
     *
     * @return void
     */
    public function testSetPss2(): void {

        $obj = new Bulletins();

        $obj->setPss2(10.092018);
        $this->assertEquals(10.092018, $obj->getPss2());
    }

    /**
     * Tests setPss30()
     *
     * @return void
     */
    public function testSetPss30(): void {

        $obj = new Bulletins();

        $obj->setPss30(true);
        $this->assertEquals(true, $obj->getPss30());
    }

    /**
     * Tests setPssMod()
     *
     * @return void
     */
    public function testSetPssMod(): void {

        $obj = new Bulletins();

        $obj->setPssMod(true);
        $this->assertEquals(true, $obj->getPssMod());
    }

    /**
     * Tests setRemunMens()
     *
     * @return void
     */
    public function testSetRemunMens(): void {

        $obj = new Bulletins();

        $obj->setRemunMens(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunMens());
    }

    /**
     * Tests setSBase()
     *
     * @return void
     */
    public function testSetSBase(): void {

        $obj = new Bulletins();

        $obj->setSBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSBase());
    }

    /**
     * Tests setSmic1()
     *
     * @return void
     */
    public function testSetSmic1(): void {

        $obj = new Bulletins();

        $obj->setSmic1(10.092018);
        $this->assertEquals(10.092018, $obj->getSmic1());
    }

    /**
     * Tests setSmicH()
     *
     * @return void
     */
    public function testSetSmicH(): void {

        $obj = new Bulletins();

        $obj->setSmicH(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH());
    }

    /**
     * Tests setSmicH35()
     *
     * @return void
     */
    public function testSetSmicH35(): void {

        $obj = new Bulletins();

        $obj->setSmicH35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH35());
    }

    /**
     * Tests setSmicH39()
     *
     * @return void
     */
    public function testSetSmicH39(): void {

        $obj = new Bulletins();

        $obj->setSmicH39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH39());
    }

    /**
     * Tests setSmicM()
     *
     * @return void
     */
    public function testSetSmicM(): void {

        $obj = new Bulletins();

        $obj->setSmicM(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM());
    }

    /**
     * Tests setSmicM35()
     *
     * @return void
     */
    public function testSetSmicM35(): void {

        $obj = new Bulletins();

        $obj->setSmicM35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM35());
    }

    /**
     * Tests setSmicM39()
     *
     * @return void
     */
    public function testSetSmicM39(): void {

        $obj = new Bulletins();

        $obj->setSmicM39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM39());
    }

    /**
     * Tests setSortieMois()
     *
     * @return void
     */
    public function testSetSortieMois(): void {

        $obj = new Bulletins();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }

    /**
     * Tests setTauxHAbCp()
     *
     * @return void
     */
    public function testSetTauxHAbCp(): void {

        $obj = new Bulletins();

        $obj->setTauxHAbCp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHAbCp());
    }

    /**
     * Tests setTauxHAbsence()
     *
     * @return void
     */
    public function testSetTauxHAbsence(): void {

        $obj = new Bulletins();

        $obj->setTauxHAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHAbsence());
    }

    /**
     * Tests setTauxHNormal()
     *
     * @return void
     */
    public function testSetTauxHNormal(): void {

        $obj = new Bulletins();

        $obj->setTauxHNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHNormal());
    }

    /**
     * Tests setTauxJournalier()
     *
     * @return void
     */
    public function testSetTauxJournalier(): void {

        $obj = new Bulletins();

        $obj->setTauxJournalier(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxJournalier());
    }

    /**
     * Tests setTotAcompte()
     *
     * @return void
     */
    public function testSetTotAcompte(): void {

        $obj = new Bulletins();

        $obj->setTotAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTotAcompte());
    }

    /**
     * Tests setTotAcompteCp()
     *
     * @return void
     */
    public function testSetTotAcompteCp(): void {

        $obj = new Bulletins();

        $obj->setTotAcompteCp(10.092018);
        $this->assertEquals(10.092018, $obj->getTotAcompteCp());
    }

    /**
     * Tests setTotCotisPatron()
     *
     * @return void
     */
    public function testSetTotCotisPatron(): void {

        $obj = new Bulletins();

        $obj->setTotCotisPatron(10.092018);
        $this->assertEquals(10.092018, $obj->getTotCotisPatron());
    }

    /**
     * Tests setTotPrimeNi()
     *
     * @return void
     */
    public function testSetTotPrimeNi(): void {

        $obj = new Bulletins();

        $obj->setTotPrimeNi(10.092018);
        $this->assertEquals(10.092018, $obj->getTotPrimeNi());
    }

    /**
     * Tests setTotPrimeNs()
     *
     * @return void
     */
    public function testSetTotPrimeNs(): void {

        $obj = new Bulletins();

        $obj->setTotPrimeNs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotPrimeNs());
    }

    /**
     * Tests setTotRetenue()
     *
     * @return void
     */
    public function testSetTotRetenue(): void {

        $obj = new Bulletins();

        $obj->setTotRetenue(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRetenue());
    }

    /**
     * Tests setTrACaisse1()
     *
     * @return void
     */
    public function testSetTrACaisse1(): void {

        $obj = new Bulletins();

        $obj->setTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse1());
    }

    /**
     * Tests setTrACaisse2()
     *
     * @return void
     */
    public function testSetTrACaisse2(): void {

        $obj = new Bulletins();

        $obj->setTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse2());
    }

    /**
     * Tests setTrACaisse3()
     *
     * @return void
     */
    public function testSetTrACaisse3(): void {

        $obj = new Bulletins();

        $obj->setTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse3());
    }

    /**
     * Tests setTrBCaisse1()
     *
     * @return void
     */
    public function testSetTrBCaisse1(): void {

        $obj = new Bulletins();

        $obj->setTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse1());
    }

    /**
     * Tests setTrBCaisse2()
     *
     * @return void
     */
    public function testSetTrBCaisse2(): void {

        $obj = new Bulletins();

        $obj->setTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse2());
    }

    /**
     * Tests setTrBCaisse3()
     *
     * @return void
     */
    public function testSetTrBCaisse3(): void {

        $obj = new Bulletins();

        $obj->setTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse3());
    }

    /**
     * Tests setTrCCaisse1()
     *
     * @return void
     */
    public function testSetTrCCaisse1(): void {

        $obj = new Bulletins();

        $obj->setTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse1());
    }

    /**
     * Tests setTrCCaisse2()
     *
     * @return void
     */
    public function testSetTrCCaisse2(): void {

        $obj = new Bulletins();

        $obj->setTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse2());
    }

    /**
     * Tests setTrCCaisse3()
     *
     * @return void
     */
    public function testSetTrCCaisse3(): void {

        $obj = new Bulletins();

        $obj->setTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse3());
    }

    /**
     * Tests setTranche2()
     *
     * @return void
     */
    public function testSetTranche2(): void {

        $obj = new Bulletins();

        $obj->setTranche2(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2());
    }

    /**
     * Tests setTrancheA()
     *
     * @return void
     */
    public function testSetTrancheA(): void {

        $obj = new Bulletins();

        $obj->setTrancheA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheA());
    }

    /**
     * Tests setTrancheAbal()
     *
     * @return void
     */
    public function testSetTrancheAbal(): void {

        $obj = new Bulletins();

        $obj->setTrancheAbal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAbal());
    }

    /**
     * Tests setTrancheAbanl()
     *
     * @return void
     */
    public function testSetTrancheAbanl(): void {

        $obj = new Bulletins();

        $obj->setTrancheAbanl(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAbanl());
    }

    /**
     * Tests setTrancheAbna()
     *
     * @return void
     */
    public function testSetTrancheAbna(): void {

        $obj = new Bulletins();

        $obj->setTrancheAbna(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAbna());
    }

    /**
     * Tests setTrancheB()
     *
     * @return void
     */
    public function testSetTrancheB(): void {

        $obj = new Bulletins();

        $obj->setTrancheB(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheB());
    }

    /**
     * Tests setTrancheBbal()
     *
     * @return void
     */
    public function testSetTrancheBbal(): void {

        $obj = new Bulletins();

        $obj->setTrancheBbal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBbal());
    }

    /**
     * Tests setTrancheBbanl()
     *
     * @return void
     */
    public function testSetTrancheBbanl(): void {

        $obj = new Bulletins();

        $obj->setTrancheBbanl(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBbanl());
    }

    /**
     * Tests setTrancheBbna()
     *
     * @return void
     */
    public function testSetTrancheBbna(): void {

        $obj = new Bulletins();

        $obj->setTrancheBbna(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBbna());
    }

    /**
     * Tests setTrancheC()
     *
     * @return void
     */
    public function testSetTrancheC(): void {

        $obj = new Bulletins();

        $obj->setTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheC());
    }

    /**
     * Tests setTrancheCPlaf()
     *
     * @return void
     */
    public function testSetTrancheCPlaf(): void {

        $obj = new Bulletins();

        $obj->setTrancheCPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCPlaf());
    }

    /**
     * Tests setTrancheCbal()
     *
     * @return void
     */
    public function testSetTrancheCbal(): void {

        $obj = new Bulletins();

        $obj->setTrancheCbal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCbal());
    }

    /**
     * Tests setTrancheCbanl()
     *
     * @return void
     */
    public function testSetTrancheCbanl(): void {

        $obj = new Bulletins();

        $obj->setTrancheCbanl(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCbanl());
    }

    /**
     * Tests setTrancheCbna()
     *
     * @return void
     */
    public function testSetTrancheCbna(): void {

        $obj = new Bulletins();

        $obj->setTrancheCbna(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCbna());
    }

    /**
     * Tests setTxtNoteRtf()
     *
     * @return void
     */
    public function testSetTxtNoteRtf(): void {

        $obj = new Bulletins();

        $obj->setTxtNoteRtf("txtNoteRtf");
        $this->assertEquals("txtNoteRtf", $obj->getTxtNoteRtf());
    }

    /**
     * Tests setTypeBaseCaisse1()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1(): void {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }

    /**
     * Tests setTypeBaseCaisse2()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse2(): void {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse2("typeBaseCaisse2");
        $this->assertEquals("typeBaseCaisse2", $obj->getTypeBaseCaisse2());
    }

    /**
     * Tests setTypeBaseCaisse3()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3(): void {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }

    /**
     * Tests setTypeGestionBal()
     *
     * @return void
     */
    public function testSetTypeGestionBal(): void {

        $obj = new Bulletins();

        $obj->setTypeGestionBal("typeGestionBal");
        $this->assertEquals("typeGestionBal", $obj->getTypeGestionBal());
    }

    /**
     * Tests setTypePaiementBul()
     *
     * @return void
     */
    public function testSetTypePaiementBul(): void {

        $obj = new Bulletins();

        $obj->setTypePaiementBul("typePaiementBul");
        $this->assertEquals("typePaiementBul", $obj->getTypePaiementBul());
    }

    /**
     * Tests setTypePaimentModifie()
     *
     * @return void
     */
    public function testSetTypePaimentModifie(): void {

        $obj = new Bulletins();

        $obj->setTypePaimentModifie(true);
        $this->assertEquals(true, $obj->getTypePaimentModifie());
    }

    /**
     * Tests setTypeSaisieAbs()
     *
     * @return void
     */
    public function testSetTypeSaisieAbs(): void {

        $obj = new Bulletins();

        $obj->setTypeSaisieAbs("typeSaisieAbs");
        $this->assertEquals("typeSaisieAbs", $obj->getTypeSaisieAbs());
    }

    /**
     * Tests setTypeSaisieAbsence()
     *
     * @return void
     */
    public function testSetTypeSaisieAbsence(): void {

        $obj = new Bulletins();

        $obj->setTypeSaisieAbsence("typeSaisieAbsence");
        $this->assertEquals("typeSaisieAbsence", $obj->getTypeSaisieAbsence());
    }

    /**
     * Tests setValoriseCp()
     *
     * @return void
     */
    public function testSetValoriseCp(): void {

        $obj = new Bulletins();

        $obj->setValoriseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getValoriseCp());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Bulletins();

        $this->assertNull($obj->getAbatTheo());
        $this->assertNull($obj->getAbattementMax());
        $this->assertNull($obj->getAllegement());
        $this->assertNull($obj->getAllegementNonProratise());
        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getBaseGmp());
        $this->assertNull($obj->getBaseSsPlafModif());
        $this->assertNull($obj->getBaseSecu());
        $this->assertNull($obj->getBornePerModifie());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAl());
        $this->assertNull($obj->getBrutAnl());
        $this->assertNull($obj->getBrutCp());
        $this->assertNull($obj->getBrutCaisse1());
        $this->assertNull($obj->getBrutCaisse2());
        $this->assertNull($obj->getBrutCaisse3());
        $this->assertNull($obj->getBrutCaisseCp());
        $this->assertNull($obj->getBrutCsg());
        $this->assertNull($obj->getBrutSoumisAbat());
        $this->assertNull($obj->getBrutSoumisCrds());
        $this->assertNull($obj->getBrutAlLimiteSmic());
        $this->assertNull($obj->getBrutAlModifie());
        $this->assertNull($obj->getBulletinPublie());
        $this->assertNull($obj->getCategTds());
        $this->assertNull($obj->getChequeEdite());
        $this->assertNull($obj->getChomPartielCp());
        $this->assertNull($obj->getChomPartielCoeffIndem());
        $this->assertNull($obj->getChomPartielMinIndem());
        $this->assertNull($obj->getCodeAtPer());
        $this->assertNull($obj->getCodeCentreUrssaf());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeTypeSal());
        $this->assertNull($obj->getCoeffIntemperie());
        $this->assertNull($obj->getContHSupReposComp());
        $this->assertNull($obj->getCoutGlobalMois());
        $this->assertNull($obj->getCum30Ss());
        $this->assertNull($obj->getCumAntHSup());
        $this->assertNull($obj->getCumBaseGmp());
        $this->assertNull($obj->getCumBaseSs());
        $this->assertNull($obj->getCumBrut());
        $this->assertNull($obj->getCumBrutAl());
        $this->assertNull($obj->getCumBrutAnl());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumDifDus());
        $this->assertNull($obj->getCumDifDus1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumHReposComp());
        $this->assertNull($obj->getCumHReposRemplace());
        $this->assertNull($obj->getCumHService());
        $this->assertNull($obj->getCumImpos());
        $this->assertNull($obj->getCumJReposRecup());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumPss1());
        $this->assertNull($obj->getCumPss2());
        $this->assertNull($obj->getCumPlaf1Caisse1());
        $this->assertNull($obj->getCumPlaf1Caisse2());
        $this->assertNull($obj->getCumPlaf1Caisse3());
        $this->assertNull($obj->getCumPlaf2Caisse1());
        $this->assertNull($obj->getCumPlaf2Caisse2());
        $this->assertNull($obj->getCumPlaf2Caisse3());
        $this->assertNull($obj->getCumPlafondGmp());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTrACaisse1());
        $this->assertNull($obj->getCumTrACaisse2());
        $this->assertNull($obj->getCumTrACaisse3());
        $this->assertNull($obj->getCumTrBCaisse1());
        $this->assertNull($obj->getCumTrBCaisse2());
        $this->assertNull($obj->getCumTrBCaisse3());
        $this->assertNull($obj->getCumTrCCaisse1());
        $this->assertNull($obj->getCumTrCCaisse2());
        $this->assertNull($obj->getCumTrCCaisse3());
        $this->assertNull($obj->getCumTranche2());
        $this->assertNull($obj->getCumTrancheA());
        $this->assertNull($obj->getCumTrancheB());
        $this->assertNull($obj->getCumTrancheC());
        $this->assertNull($obj->getDelta());
        $this->assertNull($obj->getDroitCp());
        $this->assertNull($obj->getDtDebutPeriode());
        $this->assertNull($obj->getDtFinPeriode());
        $this->assertNull($obj->getEcartCumule());
        $this->assertNull($obj->getEtatBul());
        $this->assertNull($obj->getEtatEdition());
        $this->assertNull($obj->getForfaitJour());
        $this->assertNull($obj->getGestCalcNetPaye());
        $this->assertNull($obj->getGestionCoeff());
        $this->assertNull($obj->getHReelTrav());
        $this->assertNull($obj->getHTheoTrav());
        $this->assertNull($obj->getHeureAbsence());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienJustificatif());
        $this->assertNull($obj->getMig());
        $this->assertNull($obj->getMaxAbat());
        $this->assertNull($obj->getMensuelJournalier());
        $this->assertNull($obj->getMethodeIndemCp());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMtHSupBonif());
        $this->assertNull($obj->getMtICpCp());
        $this->assertNull($obj->getMtICpt());
        $this->assertNull($obj->getMtIInt());
        $this->assertNull($obj->getMtJcpArbitrage());
        $this->assertNull($obj->getMtJourneeCp());
        $this->assertNull($obj->getMtNetPayeTheo());
        $this->assertNull($obj->getMtTauxLigSalBase());
        $this->assertNull($obj->getNb30());
        $this->assertNull($obj->getNbHAbCp());
        $this->assertNull($obj->getNbHAbsenceIntemp());
        $this->assertNull($obj->getNbHAttente());
        $this->assertNull($obj->getNbHBonifieDues());
        $this->assertNull($obj->getNbHBonifiePrises());
        $this->assertNull($obj->getNbHCarenceIntemp());
        $this->assertNull($obj->getNbHChomPartCp());
        $this->assertNull($obj->getNbHChomPartTech());
        $this->assertNull($obj->getNbHConduite());
        $this->assertNull($obj->getNbHConting());
        $this->assertNull($obj->getNbHDble());
        $this->assertNull($obj->getNbHDifDus());
        $this->assertNull($obj->getNbHIntempIndem());
        $this->assertNull($obj->getNbHLigSalBase());
        $this->assertNull($obj->getNbHNormal());
        $this->assertNull($obj->getNbHPasDroitFillon());
        $this->assertNull($obj->getNbHRemplace());
        $this->assertNull($obj->getNbHRepoCompDues());
        $this->assertNull($obj->getNbHRepoCompPrises());
        $this->assertNull($obj->getNbHRepoRDues());
        $this->assertNull($obj->getNbHRepoRPrises());
        $this->assertNull($obj->getNbHSup1());
        $this->assertNull($obj->getNbHSup2());
        $this->assertNull($obj->getNbHSup3());
        $this->assertNull($obj->getNbHSup4());
        $this->assertNull($obj->getNbHSup5());
        $this->assertNull($obj->getNbHSupBonif());
        $this->assertNull($obj->getNbHSupBonifAbs());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNbHTravail());
        $this->assertNull($obj->getNbHeurePaye());
        $this->assertNull($obj->getNbHeureSup());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbHeureTravMois());
        $this->assertNull($obj->getNbJChomPartCp());
        $this->assertNull($obj->getNbJDus());
        $this->assertNull($obj->getNbJDus1());
        $this->assertNull($obj->getNbJPris());
        $this->assertNull($obj->getNbJPris1());
        $this->assertNull($obj->getNbJrttDus());
        $this->assertNull($obj->getNbJrttPris());
        $this->assertNull($obj->getNbJRepoRecupDus());
        $this->assertNull($obj->getNbJRepoRecupPris());
        $this->assertNull($obj->getNbJTravForce());
        $this->assertNull($obj->getNbJTravMoisEs());
        $this->assertNull($obj->getNbJourBase());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbJourCpPris());
        $this->assertNull($obj->getNbJourNormaux());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNetAPayer());
        $this->assertNull($obj->getNetImpos());
        $this->assertNull($obj->getNote1());
        $this->assertNull($obj->getNote2());
        $this->assertNull($obj->getNote3());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPpSoumisTaxe());
        $this->assertNull($obj->getPss1());
        $this->assertNull($obj->getPss2());
        $this->assertNull($obj->getPss30());
        $this->assertNull($obj->getPssMod());
        $this->assertNull($obj->getPaieEuro());
        $this->assertNull($obj->getPaiementCpNonPris());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPeriodiciteModifie());
        $this->assertNull($obj->getPlafond1Caisse1());
        $this->assertNull($obj->getPlafond1Caisse2());
        $this->assertNull($obj->getPlafond1Caisse3());
        $this->assertNull($obj->getPlafond2Caisse1());
        $this->assertNull($obj->getPlafond2Caisse2());
        $this->assertNull($obj->getPlafond2Caisse3());
        $this->assertNull($obj->getPlafondGmp());
        $this->assertNull($obj->getPlafondGmpModifie());
        $this->assertNull($obj->getPlafondHeure());
        $this->assertNull($obj->getPlafondJour());
        $this->assertNull($obj->getPlafondSemaine());
        $this->assertNull($obj->getPourcentAbat());
        $this->assertNull($obj->getPourcentActForce());
        $this->assertNull($obj->getPourcentActivite());
        $this->assertNull($obj->getPourcentRemuHor());
        $this->assertNull($obj->getProvCp1());
        $this->assertNull($obj->getProvCp());
        $this->assertNull($obj->getRemunMens());
        $this->assertNull($obj->getSBase());
        $this->assertNull($obj->getSmic1());
        $this->assertNull($obj->getSmicH());
        $this->assertNull($obj->getSmicH35());
        $this->assertNull($obj->getSmicH39());
        $this->assertNull($obj->getSmicM());
        $this->assertNull($obj->getSmicM35());
        $this->assertNull($obj->getSmicM39());
        $this->assertNull($obj->getSortieMois());
        $this->assertNull($obj->getTauxHAbCp());
        $this->assertNull($obj->getTauxHAbsence());
        $this->assertNull($obj->getTauxHNormal());
        $this->assertNull($obj->getTauxJournalier());
        $this->assertNull($obj->getTotAcompte());
        $this->assertNull($obj->getTotAcompteCp());
        $this->assertNull($obj->getTotCotisPatron());
        $this->assertNull($obj->getTotPrimeNi());
        $this->assertNull($obj->getTotPrimeNs());
        $this->assertNull($obj->getTotRetenue());
        $this->assertNull($obj->getTrACaisse1());
        $this->assertNull($obj->getTrACaisse2());
        $this->assertNull($obj->getTrACaisse3());
        $this->assertNull($obj->getTrBCaisse1());
        $this->assertNull($obj->getTrBCaisse2());
        $this->assertNull($obj->getTrBCaisse3());
        $this->assertNull($obj->getTrCCaisse1());
        $this->assertNull($obj->getTrCCaisse2());
        $this->assertNull($obj->getTrCCaisse3());
        $this->assertNull($obj->getTranche2());
        $this->assertNull($obj->getTrancheA());
        $this->assertNull($obj->getTrancheAbal());
        $this->assertNull($obj->getTrancheAbanl());
        $this->assertNull($obj->getTrancheAbna());
        $this->assertNull($obj->getTrancheB());
        $this->assertNull($obj->getTrancheBbal());
        $this->assertNull($obj->getTrancheBbanl());
        $this->assertNull($obj->getTrancheBbna());
        $this->assertNull($obj->getTrancheC());
        $this->assertNull($obj->getTrancheCbal());
        $this->assertNull($obj->getTrancheCbanl());
        $this->assertNull($obj->getTrancheCbna());
        $this->assertNull($obj->getTrancheCPlaf());
        $this->assertNull($obj->getTxtNoteRtf());
        $this->assertNull($obj->getTypeBaseCaisse1());
        $this->assertNull($obj->getTypeBaseCaisse2());
        $this->assertNull($obj->getTypeBaseCaisse3());
        $this->assertNull($obj->getTypeGestionBal());
        $this->assertNull($obj->getTypePaiementBul());
        $this->assertNull($obj->getTypePaimentModifie());
        $this->assertNull($obj->getTypeSaisieAbs());
        $this->assertNull($obj->getTypeSaisieAbsence());
        $this->assertNull($obj->getValoriseCp());
    }
}
