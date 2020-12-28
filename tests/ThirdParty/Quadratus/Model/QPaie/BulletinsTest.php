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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Bulletins;

/**
 * Bulletins test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class BulletinsTest extends AbstractTestCase {

    /**
     * Tests the setAbatTheo() method.
     *
     * @return void
     */
    public function testSetAbatTheo(): void {

        $obj = new Bulletins();

        $obj->setAbatTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getAbatTheo());
    }

    /**
     * Tests the setAbattementMax() method.
     *
     * @return void
     */
    public function testSetAbattementMax(): void {

        $obj = new Bulletins();

        $obj->setAbattementMax(10.092018);
        $this->assertEquals(10.092018, $obj->getAbattementMax());
    }

    /**
     * Tests the setAllegement() method.
     *
     * @return void
     */
    public function testSetAllegement(): void {

        $obj = new Bulletins();

        $obj->setAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getAllegement());
    }

    /**
     * Tests the setAllegementNonProratise() method.
     *
     * @return void
     */
    public function testSetAllegementNonProratise(): void {

        $obj = new Bulletins();

        $obj->setAllegementNonProratise(10.092018);
        $this->assertEquals(10.092018, $obj->getAllegementNonProratise());
    }

    /**
     * Tests the setAvantageNature() method.
     *
     * @return void
     */
    public function testSetAvantageNature(): void {

        $obj = new Bulletins();

        $obj->setAvantageNature(10.092018);
        $this->assertEquals(10.092018, $obj->getAvantageNature());
    }

    /**
     * Tests the setBaseGmp() method.
     *
     * @return void
     */
    public function testSetBaseGmp(): void {

        $obj = new Bulletins();

        $obj->setBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseGmp());
    }

    /**
     * Tests the setBaseSecu() method.
     *
     * @return void
     */
    public function testSetBaseSecu(): void {

        $obj = new Bulletins();

        $obj->setBaseSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSecu());
    }

    /**
     * Tests the setBaseSsPlafModif() method.
     *
     * @return void
     */
    public function testSetBaseSsPlafModif(): void {

        $obj = new Bulletins();

        $obj->setBaseSsPlafModif(true);
        $this->assertEquals(true, $obj->getBaseSsPlafModif());
    }

    /**
     * Tests the setBornePerModifie() method.
     *
     * @return void
     */
    public function testSetBornePerModifie(): void {

        $obj = new Bulletins();

        $obj->setBornePerModifie(true);
        $this->assertEquals(true, $obj->getBornePerModifie());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new Bulletins();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setBrutAl() method.
     *
     * @return void
     */
    public function testSetBrutAl(): void {

        $obj = new Bulletins();

        $obj->setBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAl());
    }

    /**
     * Tests the setBrutAlLimiteSmic() method.
     *
     * @return void
     */
    public function testSetBrutAlLimiteSmic(): void {

        $obj = new Bulletins();

        $obj->setBrutAlLimiteSmic(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlLimiteSmic());
    }

    /**
     * Tests the setBrutAlModifie() method.
     *
     * @return void
     */
    public function testSetBrutAlModifie(): void {

        $obj = new Bulletins();

        $obj->setBrutAlModifie(true);
        $this->assertEquals(true, $obj->getBrutAlModifie());
    }

    /**
     * Tests the setBrutAnl() method.
     *
     * @return void
     */
    public function testSetBrutAnl(): void {

        $obj = new Bulletins();

        $obj->setBrutAnl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAnl());
    }

    /**
     * Tests the setBrutCaisse1() method.
     *
     * @return void
     */
    public function testSetBrutCaisse1(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse1());
    }

    /**
     * Tests the setBrutCaisse2() method.
     *
     * @return void
     */
    public function testSetBrutCaisse2(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse2());
    }

    /**
     * Tests the setBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetBrutCaisse3(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse3());
    }

    /**
     * Tests the setBrutCaisseCp() method.
     *
     * @return void
     */
    public function testSetBrutCaisseCp(): void {

        $obj = new Bulletins();

        $obj->setBrutCaisseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisseCp());
    }

    /**
     * Tests the setBrutCp() method.
     *
     * @return void
     */
    public function testSetBrutCp(): void {

        $obj = new Bulletins();

        $obj->setBrutCp(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCp());
    }

    /**
     * Tests the setBrutCsg() method.
     *
     * @return void
     */
    public function testSetBrutCsg(): void {

        $obj = new Bulletins();

        $obj->setBrutCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCsg());
    }

    /**
     * Tests the setBrutSoumisAbat() method.
     *
     * @return void
     */
    public function testSetBrutSoumisAbat(): void {

        $obj = new Bulletins();

        $obj->setBrutSoumisAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutSoumisAbat());
    }

    /**
     * Tests the setBrutSoumisCrds() method.
     *
     * @return void
     */
    public function testSetBrutSoumisCrds(): void {

        $obj = new Bulletins();

        $obj->setBrutSoumisCrds(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutSoumisCrds());
    }

    /**
     * Tests the setBulletinPublie() method.
     *
     * @return void
     */
    public function testSetBulletinPublie(): void {

        $obj = new Bulletins();

        $obj->setBulletinPublie(true);
        $this->assertEquals(true, $obj->getBulletinPublie());
    }

    /**
     * Tests the setCategTds() method.
     *
     * @return void
     */
    public function testSetCategTds(): void {

        $obj = new Bulletins();

        $obj->setCategTds("categTds");
        $this->assertEquals("categTds", $obj->getCategTds());
    }

    /**
     * Tests the setChequeEdite() method.
     *
     * @return void
     */
    public function testSetChequeEdite(): void {

        $obj = new Bulletins();

        $obj->setChequeEdite(true);
        $this->assertEquals(true, $obj->getChequeEdite());
    }

    /**
     * Tests the setChomPartielCoeffIndem() method.
     *
     * @return void
     */
    public function testSetChomPartielCoeffIndem(): void {

        $obj = new Bulletins();

        $obj->setChomPartielCoeffIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielCoeffIndem());
    }

    /**
     * Tests the setChomPartielCp() method.
     *
     * @return void
     */
    public function testSetChomPartielCp(): void {

        $obj = new Bulletins();

        $obj->setChomPartielCp(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielCp());
    }

    /**
     * Tests the setChomPartielMinIndem() method.
     *
     * @return void
     */
    public function testSetChomPartielMinIndem(): void {

        $obj = new Bulletins();

        $obj->setChomPartielMinIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielMinIndem());
    }

    /**
     * Tests the setCodeAtPer() method.
     *
     * @return void
     */
    public function testSetCodeAtPer(): void {

        $obj = new Bulletins();

        $obj->setCodeAtPer(10);
        $this->assertEquals(10, $obj->getCodeAtPer());
    }

    /**
     * Tests the setCodeCentreUrssaf() method.
     *
     * @return void
     */
    public function testSetCodeCentreUrssaf(): void {

        $obj = new Bulletins();

        $obj->setCodeCentreUrssaf("codeCentreUrssaf");
        $this->assertEquals("codeCentreUrssaf", $obj->getCodeCentreUrssaf());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Bulletins();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeTypeSal() method.
     *
     * @return void
     */
    public function testSetCodeTypeSal(): void {

        $obj = new Bulletins();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }

    /**
     * Tests the setCoeffIntemperie() method.
     *
     * @return void
     */
    public function testSetCoeffIntemperie(): void {

        $obj = new Bulletins();

        $obj->setCoeffIntemperie(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffIntemperie());
    }

    /**
     * Tests the setContHSupReposComp() method.
     *
     * @return void
     */
    public function testSetContHSupReposComp(): void {

        $obj = new Bulletins();

        $obj->setContHSupReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getContHSupReposComp());
    }

    /**
     * Tests the setCoutGlobalMois() method.
     *
     * @return void
     */
    public function testSetCoutGlobalMois(): void {

        $obj = new Bulletins();

        $obj->setCoutGlobalMois(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutGlobalMois());
    }

    /**
     * Tests the setCum30Ss() method.
     *
     * @return void
     */
    public function testSetCum30Ss(): void {

        $obj = new Bulletins();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Tests the setCumAntHSup() method.
     *
     * @return void
     */
    public function testSetCumAntHSup(): void {

        $obj = new Bulletins();

        $obj->setCumAntHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumAntHSup());
    }

    /**
     * Tests the setCumBaseGmp() method.
     *
     * @return void
     */
    public function testSetCumBaseGmp(): void {

        $obj = new Bulletins();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Tests the setCumBaseSs() method.
     *
     * @return void
     */
    public function testSetCumBaseSs(): void {

        $obj = new Bulletins();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Tests the setCumBrut() method.
     *
     * @return void
     */
    public function testSetCumBrut(): void {

        $obj = new Bulletins();

        $obj->setCumBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrut());
    }

    /**
     * Tests the setCumBrutAl() method.
     *
     * @return void
     */
    public function testSetCumBrutAl(): void {

        $obj = new Bulletins();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Tests the setCumBrutAnl() method.
     *
     * @return void
     */
    public function testSetCumBrutAnl(): void {

        $obj = new Bulletins();

        $obj->setCumBrutAnl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAnl());
    }

    /**
     * Tests the setCumBrutCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Tests the setCumBrutCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Tests the setCumBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Tests the setCumDifDus() method.
     *
     * @return void
     */
    public function testSetCumDifDus(): void {

        $obj = new Bulletins();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Tests the setCumDifDus1() method.
     *
     * @return void
     */
    public function testSetCumDifDus1(): void {

        $obj = new Bulletins();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }

    /**
     * Tests the setCumHBonifie() method.
     *
     * @return void
     */
    public function testSetCumHBonifie(): void {

        $obj = new Bulletins();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Tests the setCumHReposComp() method.
     *
     * @return void
     */
    public function testSetCumHReposComp(): void {

        $obj = new Bulletins();

        $obj->setCumHReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposComp());
    }

    /**
     * Tests the setCumHReposRemplace() method.
     *
     * @return void
     */
    public function testSetCumHReposRemplace(): void {

        $obj = new Bulletins();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Tests the setCumHService() method.
     *
     * @return void
     */
    public function testSetCumHService(): void {

        $obj = new Bulletins();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Tests the setCumImpos() method.
     *
     * @return void
     */
    public function testSetCumImpos(): void {

        $obj = new Bulletins();

        $obj->setCumImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getCumImpos());
    }

    /**
     * Tests the setCumJReposRecup() method.
     *
     * @return void
     */
    public function testSetCumJReposRecup(): void {

        $obj = new Bulletins();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Tests the setCumMtCpPris() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris(): void {

        $obj = new Bulletins();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Tests the setCumMtCpPris1() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris1(): void {

        $obj = new Bulletins();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Tests the setCumNetAPayer() method.
     *
     * @return void
     */
    public function testSetCumNetAPayer(): void {

        $obj = new Bulletins();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Tests the setCumPlaf1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Tests the setCumPlaf1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Tests the setCumPlaf1Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Tests the setCumPlaf2Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Tests the setCumPlaf2Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Tests the setCumPlaf2Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3(): void {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Tests the setCumPlafondGmp() method.
     *
     * @return void
     */
    public function testSetCumPlafondGmp(): void {

        $obj = new Bulletins();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Tests the setCumPss1() method.
     *
     * @return void
     */
    public function testSetCumPss1(): void {

        $obj = new Bulletins();

        $obj->setCumPss1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPss1());
    }

    /**
     * Tests the setCumPss2() method.
     *
     * @return void
     */
    public function testSetCumPss2(): void {

        $obj = new Bulletins();

        $obj->setCumPss2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPss2());
    }

    /**
     * Tests the setCumRttDus() method.
     *
     * @return void
     */
    public function testSetCumRttDus(): void {

        $obj = new Bulletins();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Tests the setCumRttPris() method.
     *
     * @return void
     */
    public function testSetCumRttPris(): void {

        $obj = new Bulletins();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Tests the setCumTrACaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrACaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse1());
    }

    /**
     * Tests the setCumTrACaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrACaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse2());
    }

    /**
     * Tests the setCumTrACaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrACaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse3());
    }

    /**
     * Tests the setCumTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrBCaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse1());
    }

    /**
     * Tests the setCumTrBCaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrBCaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse2());
    }

    /**
     * Tests the setCumTrBCaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrBCaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse3());
    }

    /**
     * Tests the setCumTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse1(): void {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse1());
    }

    /**
     * Tests the setCumTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse2(): void {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse2());
    }

    /**
     * Tests the setCumTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse3(): void {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse3());
    }

    /**
     * Tests the setCumTranche2() method.
     *
     * @return void
     */
    public function testSetCumTranche2(): void {

        $obj = new Bulletins();

        $obj->setCumTranche2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2());
    }

    /**
     * Tests the setCumTrancheA() method.
     *
     * @return void
     */
    public function testSetCumTrancheA(): void {

        $obj = new Bulletins();

        $obj->setCumTrancheA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheA());
    }

    /**
     * Tests the setCumTrancheB() method.
     *
     * @return void
     */
    public function testSetCumTrancheB(): void {

        $obj = new Bulletins();

        $obj->setCumTrancheB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheB());
    }

    /**
     * Tests the setCumTrancheC() method.
     *
     * @return void
     */
    public function testSetCumTrancheC(): void {

        $obj = new Bulletins();

        $obj->setCumTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheC());
    }

    /**
     * Tests the setDelta() method.
     *
     * @return void
     */
    public function testSetDelta(): void {

        $obj = new Bulletins();

        $obj->setDelta(10.092018);
        $this->assertEquals(10.092018, $obj->getDelta());
    }

    /**
     * Tests the setDroitCp() method.
     *
     * @return void
     */
    public function testSetDroitCp(): void {

        $obj = new Bulletins();

        $obj->setDroitCp(10.092018);
        $this->assertEquals(10.092018, $obj->getDroitCp());
    }

    /**
     * Tests the setDtDebutPeriode() method.
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
     * Tests the setDtFinPeriode() method.
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
     * Tests the setEcartCumule() method.
     *
     * @return void
     */
    public function testSetEcartCumule(): void {

        $obj = new Bulletins();

        $obj->setEcartCumule(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartCumule());
    }

    /**
     * Tests the setEtatBul() method.
     *
     * @return void
     */
    public function testSetEtatBul(): void {

        $obj = new Bulletins();

        $obj->setEtatBul("etatBul");
        $this->assertEquals("etatBul", $obj->getEtatBul());
    }

    /**
     * Tests the setEtatEdition() method.
     *
     * @return void
     */
    public function testSetEtatEdition(): void {

        $obj = new Bulletins();

        $obj->setEtatEdition("etatEdition");
        $this->assertEquals("etatEdition", $obj->getEtatEdition());
    }

    /**
     * Tests the setForfaitJour() method.
     *
     * @return void
     */
    public function testSetForfaitJour(): void {

        $obj = new Bulletins();

        $obj->setForfaitJour(true);
        $this->assertEquals(true, $obj->getForfaitJour());
    }

    /**
     * Tests the setGestCalcNetPaye() method.
     *
     * @return void
     */
    public function testSetGestCalcNetPaye(): void {

        $obj = new Bulletins();

        $obj->setGestCalcNetPaye(true);
        $this->assertEquals(true, $obj->getGestCalcNetPaye());
    }

    /**
     * Tests the setGestionCoeff() method.
     *
     * @return void
     */
    public function testSetGestionCoeff(): void {

        $obj = new Bulletins();

        $obj->setGestionCoeff(true);
        $this->assertEquals(true, $obj->getGestionCoeff());
    }

    /**
     * Tests the setHReelTrav() method.
     *
     * @return void
     */
    public function testSetHReelTrav(): void {

        $obj = new Bulletins();

        $obj->setHReelTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHReelTrav());
    }

    /**
     * Tests the setHTheoTrav() method.
     *
     * @return void
     */
    public function testSetHTheoTrav(): void {

        $obj = new Bulletins();

        $obj->setHTheoTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHTheoTrav());
    }

    /**
     * Tests the setHeureAbsence() method.
     *
     * @return void
     */
    public function testSetHeureAbsence(): void {

        $obj = new Bulletins();

        $obj->setHeureAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getHeureAbsence());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new Bulletins();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Bulletins();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Bulletins();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLienJustificatif() method.
     *
     * @return void
     */
    public function testSetLienJustificatif(): void {

        $obj = new Bulletins();

        $obj->setLienJustificatif("lienJustificatif");
        $this->assertEquals("lienJustificatif", $obj->getLienJustificatif());
    }

    /**
     * Tests the setMaxAbat() method.
     *
     * @return void
     */
    public function testSetMaxAbat(): void {

        $obj = new Bulletins();

        $obj->setMaxAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getMaxAbat());
    }

    /**
     * Tests the setMensuelJournalier() method.
     *
     * @return void
     */
    public function testSetMensuelJournalier(): void {

        $obj = new Bulletins();

        $obj->setMensuelJournalier(true);
        $this->assertEquals(true, $obj->getMensuelJournalier());
    }

    /**
     * Tests the setMethodeIndemCp() method.
     *
     * @return void
     */
    public function testSetMethodeIndemCp(): void {

        $obj = new Bulletins();

        $obj->setMethodeIndemCp("methodeIndemCp");
        $this->assertEquals("methodeIndemCp", $obj->getMethodeIndemCp());
    }

    /**
     * Tests the setMig() method.
     *
     * @return void
     */
    public function testSetMig(): void {

        $obj = new Bulletins();

        $obj->setMig(10.092018);
        $this->assertEquals(10.092018, $obj->getMig());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new Bulletins();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new Bulletins();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new Bulletins();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontant4() method.
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new Bulletins();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests the setMontant5() method.
     *
     * @return void
     */
    public function testSetMontant5(): void {

        $obj = new Bulletins();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Tests the setMtHSupBonif() method.
     *
     * @return void
     */
    public function testSetMtHSupBonif(): void {

        $obj = new Bulletins();

        $obj->setMtHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getMtHSupBonif());
    }

    /**
     * Tests the setMtICpCp() method.
     *
     * @return void
     */
    public function testSetMtICpCp(): void {

        $obj = new Bulletins();

        $obj->setMtICpCp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtICpCp());
    }

    /**
     * Tests the setMtICpt() method.
     *
     * @return void
     */
    public function testSetMtICpt(): void {

        $obj = new Bulletins();

        $obj->setMtICpt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtICpt());
    }

    /**
     * Tests the setMtIInt() method.
     *
     * @return void
     */
    public function testSetMtIInt(): void {

        $obj = new Bulletins();

        $obj->setMtIInt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIInt());
    }

    /**
     * Tests the setMtJcpArbitrage() method.
     *
     * @return void
     */
    public function testSetMtJcpArbitrage(): void {

        $obj = new Bulletins();

        $obj->setMtJcpArbitrage(true);
        $this->assertEquals(true, $obj->getMtJcpArbitrage());
    }

    /**
     * Tests the setMtJourneeCp() method.
     *
     * @return void
     */
    public function testSetMtJourneeCp(): void {

        $obj = new Bulletins();

        $obj->setMtJourneeCp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCp());
    }

    /**
     * Tests the setMtNetPayeTheo() method.
     *
     * @return void
     */
    public function testSetMtNetPayeTheo(): void {

        $obj = new Bulletins();

        $obj->setMtNetPayeTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtNetPayeTheo());
    }

    /**
     * Tests the setMtTauxLigSalBase() method.
     *
     * @return void
     */
    public function testSetMtTauxLigSalBase(): void {

        $obj = new Bulletins();

        $obj->setMtTauxLigSalBase(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTauxLigSalBase());
    }

    /**
     * Tests the setNb30() method.
     *
     * @return void
     */
    public function testSetNb30(): void {

        $obj = new Bulletins();

        $obj->setNb30(10.092018);
        $this->assertEquals(10.092018, $obj->getNb30());
    }

    /**
     * Tests the setNbHAbCp() method.
     *
     * @return void
     */
    public function testSetNbHAbCp(): void {

        $obj = new Bulletins();

        $obj->setNbHAbCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCp());
    }

    /**
     * Tests the setNbHAbsenceIntemp() method.
     *
     * @return void
     */
    public function testSetNbHAbsenceIntemp(): void {

        $obj = new Bulletins();

        $obj->setNbHAbsenceIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsenceIntemp());
    }

    /**
     * Tests the setNbHAttente() method.
     *
     * @return void
     */
    public function testSetNbHAttente(): void {

        $obj = new Bulletins();

        $obj->setNbHAttente(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAttente());
    }

    /**
     * Tests the setNbHBonifieDues() method.
     *
     * @return void
     */
    public function testSetNbHBonifieDues(): void {

        $obj = new Bulletins();

        $obj->setNbHBonifieDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifieDues());
    }

    /**
     * Tests the setNbHBonifiePrises() method.
     *
     * @return void
     */
    public function testSetNbHBonifiePrises(): void {

        $obj = new Bulletins();

        $obj->setNbHBonifiePrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifiePrises());
    }

    /**
     * Tests the setNbHCarenceIntemp() method.
     *
     * @return void
     */
    public function testSetNbHCarenceIntemp(): void {

        $obj = new Bulletins();

        $obj->setNbHCarenceIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHCarenceIntemp());
    }

    /**
     * Tests the setNbHChomPartCp() method.
     *
     * @return void
     */
    public function testSetNbHChomPartCp(): void {

        $obj = new Bulletins();

        $obj->setNbHChomPartCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartCp());
    }

    /**
     * Tests the setNbHChomPartTech() method.
     *
     * @return void
     */
    public function testSetNbHChomPartTech(): void {

        $obj = new Bulletins();

        $obj->setNbHChomPartTech(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartTech());
    }

    /**
     * Tests the setNbHConduite() method.
     *
     * @return void
     */
    public function testSetNbHConduite(): void {

        $obj = new Bulletins();

        $obj->setNbHConduite(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHConduite());
    }

    /**
     * Tests the setNbHConting() method.
     *
     * @return void
     */
    public function testSetNbHConting(): void {

        $obj = new Bulletins();

        $obj->setNbHConting(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHConting());
    }

    /**
     * Tests the setNbHDble() method.
     *
     * @return void
     */
    public function testSetNbHDble(): void {

        $obj = new Bulletins();

        $obj->setNbHDble(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDble());
    }

    /**
     * Tests the setNbHDifDus() method.
     *
     * @return void
     */
    public function testSetNbHDifDus(): void {

        $obj = new Bulletins();

        $obj->setNbHDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDifDus());
    }

    /**
     * Tests the setNbHIntempIndem() method.
     *
     * @return void
     */
    public function testSetNbHIntempIndem(): void {

        $obj = new Bulletins();

        $obj->setNbHIntempIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHIntempIndem());
    }

    /**
     * Tests the setNbHLigSalBase() method.
     *
     * @return void
     */
    public function testSetNbHLigSalBase(): void {

        $obj = new Bulletins();

        $obj->setNbHLigSalBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHLigSalBase());
    }

    /**
     * Tests the setNbHNormal() method.
     *
     * @return void
     */
    public function testSetNbHNormal(): void {

        $obj = new Bulletins();

        $obj->setNbHNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNormal());
    }

    /**
     * Tests the setNbHPasDroitFillon() method.
     *
     * @return void
     */
    public function testSetNbHPasDroitFillon(): void {

        $obj = new Bulletins();

        $obj->setNbHPasDroitFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHPasDroitFillon());
    }

    /**
     * Tests the setNbHRemplace() method.
     *
     * @return void
     */
    public function testSetNbHRemplace(): void {

        $obj = new Bulletins();

        $obj->setNbHRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRemplace());
    }

    /**
     * Tests the setNbHRepoCompDues() method.
     *
     * @return void
     */
    public function testSetNbHRepoCompDues(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoCompDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoCompDues());
    }

    /**
     * Tests the setNbHRepoCompPrises() method.
     *
     * @return void
     */
    public function testSetNbHRepoCompPrises(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoCompPrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoCompPrises());
    }

    /**
     * Tests the setNbHRepoRDues() method.
     *
     * @return void
     */
    public function testSetNbHRepoRDues(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoRDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoRDues());
    }

    /**
     * Tests the setNbHRepoRPrises() method.
     *
     * @return void
     */
    public function testSetNbHRepoRPrises(): void {

        $obj = new Bulletins();

        $obj->setNbHRepoRPrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoRPrises());
    }

    /**
     * Tests the setNbHSup1() method.
     *
     * @return void
     */
    public function testSetNbHSup1(): void {

        $obj = new Bulletins();

        $obj->setNbHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup1());
    }

    /**
     * Tests the setNbHSup2() method.
     *
     * @return void
     */
    public function testSetNbHSup2(): void {

        $obj = new Bulletins();

        $obj->setNbHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup2());
    }

    /**
     * Tests the setNbHSup3() method.
     *
     * @return void
     */
    public function testSetNbHSup3(): void {

        $obj = new Bulletins();

        $obj->setNbHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup3());
    }

    /**
     * Tests the setNbHSup4() method.
     *
     * @return void
     */
    public function testSetNbHSup4(): void {

        $obj = new Bulletins();

        $obj->setNbHSup4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup4());
    }

    /**
     * Tests the setNbHSup5() method.
     *
     * @return void
     */
    public function testSetNbHSup5(): void {

        $obj = new Bulletins();

        $obj->setNbHSup5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup5());
    }

    /**
     * Tests the setNbHSupBonif() method.
     *
     * @return void
     */
    public function testSetNbHSupBonif(): void {

        $obj = new Bulletins();

        $obj->setNbHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupBonif());
    }

    /**
     * Tests the setNbHSupBonifAbs() method.
     *
     * @return void
     */
    public function testSetNbHSupBonifAbs(): void {

        $obj = new Bulletins();

        $obj->setNbHSupBonifAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupBonifAbs());
    }

    /**
     * Tests the setNbHTrav() method.
     *
     * @return void
     */
    public function testSetNbHTrav(): void {

        $obj = new Bulletins();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests the setNbHTravail() method.
     *
     * @return void
     */
    public function testSetNbHTravail(): void {

        $obj = new Bulletins();

        $obj->setNbHTravail(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTravail());
    }

    /**
     * Tests the setNbHeurePaye() method.
     *
     * @return void
     */
    public function testSetNbHeurePaye(): void {

        $obj = new Bulletins();

        $obj->setNbHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeurePaye());
    }

    /**
     * Tests the setNbHeureSup() method.
     *
     * @return void
     */
    public function testSetNbHeureSup(): void {

        $obj = new Bulletins();

        $obj->setNbHeureSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSup());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav(): void {

        $obj = new Bulletins();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNbHeureTravMois() method.
     *
     * @return void
     */
    public function testSetNbHeureTravMois(): void {

        $obj = new Bulletins();

        $obj->setNbHeureTravMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTravMois());
    }

    /**
     * Tests the setNbJChomPartCp() method.
     *
     * @return void
     */
    public function testSetNbJChomPartCp(): void {

        $obj = new Bulletins();

        $obj->setNbJChomPartCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJChomPartCp());
    }

    /**
     * Tests the setNbJDus() method.
     *
     * @return void
     */
    public function testSetNbJDus(): void {

        $obj = new Bulletins();

        $obj->setNbJDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus());
    }

    /**
     * Tests the setNbJDus1() method.
     *
     * @return void
     */
    public function testSetNbJDus1(): void {

        $obj = new Bulletins();

        $obj->setNbJDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus1());
    }

    /**
     * Tests the setNbJPris() method.
     *
     * @return void
     */
    public function testSetNbJPris(): void {

        $obj = new Bulletins();

        $obj->setNbJPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris());
    }

    /**
     * Tests the setNbJPris1() method.
     *
     * @return void
     */
    public function testSetNbJPris1(): void {

        $obj = new Bulletins();

        $obj->setNbJPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris1());
    }

    /**
     * Tests the setNbJRepoRecupDus() method.
     *
     * @return void
     */
    public function testSetNbJRepoRecupDus(): void {

        $obj = new Bulletins();

        $obj->setNbJRepoRecupDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRepoRecupDus());
    }

    /**
     * Tests the setNbJRepoRecupPris() method.
     *
     * @return void
     */
    public function testSetNbJRepoRecupPris(): void {

        $obj = new Bulletins();

        $obj->setNbJRepoRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRepoRecupPris());
    }

    /**
     * Tests the setNbJTravForce() method.
     *
     * @return void
     */
    public function testSetNbJTravForce(): void {

        $obj = new Bulletins();

        $obj->setNbJTravForce(true);
        $this->assertEquals(true, $obj->getNbJTravForce());
    }

    /**
     * Tests the setNbJTravMoisEs() method.
     *
     * @return void
     */
    public function testSetNbJTravMoisEs(): void {

        $obj = new Bulletins();

        $obj->setNbJTravMoisEs(10);
        $this->assertEquals(10, $obj->getNbJTravMoisEs());
    }

    /**
     * Tests the setNbJourBase() method.
     *
     * @return void
     */
    public function testSetNbJourBase(): void {

        $obj = new Bulletins();

        $obj->setNbJourBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBase());
    }

    /**
     * Tests the setNbJourBaseCp() method.
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Bulletins();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Tests the setNbJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Bulletins();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests the setNbJourCpPris() method.
     *
     * @return void
     */
    public function testSetNbJourCpPris(): void {

        $obj = new Bulletins();

        $obj->setNbJourCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpPris());
    }

    /**
     * Tests the setNbJourNormaux() method.
     *
     * @return void
     */
    public function testSetNbJourNormaux(): void {

        $obj = new Bulletins();

        $obj->setNbJourNormaux(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourNormaux());
    }

    /**
     * Tests the setNbJourTrav() method.
     *
     * @return void
     */
    public function testSetNbJourTrav(): void {

        $obj = new Bulletins();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests the setNbJrttDus() method.
     *
     * @return void
     */
    public function testSetNbJrttDus(): void {

        $obj = new Bulletins();

        $obj->setNbJrttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJrttDus());
    }

    /**
     * Tests the setNbJrttPris() method.
     *
     * @return void
     */
    public function testSetNbJrttPris(): void {

        $obj = new Bulletins();

        $obj->setNbJrttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJrttPris());
    }

    /**
     * Tests the setNetAPayer() method.
     *
     * @return void
     */
    public function testSetNetAPayer(): void {

        $obj = new Bulletins();

        $obj->setNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getNetAPayer());
    }

    /**
     * Tests the setNetImpos() method.
     *
     * @return void
     */
    public function testSetNetImpos(): void {

        $obj = new Bulletins();

        $obj->setNetImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getNetImpos());
    }

    /**
     * Tests the setNote1() method.
     *
     * @return void
     */
    public function testSetNote1(): void {

        $obj = new Bulletins();

        $obj->setNote1("note1");
        $this->assertEquals("note1", $obj->getNote1());
    }

    /**
     * Tests the setNote2() method.
     *
     * @return void
     */
    public function testSetNote2(): void {

        $obj = new Bulletins();

        $obj->setNote2("note2");
        $this->assertEquals("note2", $obj->getNote2());
    }

    /**
     * Tests the setNote3() method.
     *
     * @return void
     */
    public function testSetNote3(): void {

        $obj = new Bulletins();

        $obj->setNote3("note3");
        $this->assertEquals("note3", $obj->getNote3());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Bulletins();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPaieEuro() method.
     *
     * @return void
     */
    public function testSetPaieEuro(): void {

        $obj = new Bulletins();

        $obj->setPaieEuro(true);
        $this->assertEquals(true, $obj->getPaieEuro());
    }

    /**
     * Tests the setPaiementCpNonPris() method.
     *
     * @return void
     */
    public function testSetPaiementCpNonPris(): void {

        $obj = new Bulletins();

        $obj->setPaiementCpNonPris(true);
        $this->assertEquals(true, $obj->getPaiementCpNonPris());
    }

    /**
     * Tests the setPeriode() method.
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
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Bulletins();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setPeriodiciteModifie() method.
     *
     * @return void
     */
    public function testSetPeriodiciteModifie(): void {

        $obj = new Bulletins();

        $obj->setPeriodiciteModifie(true);
        $this->assertEquals(true, $obj->getPeriodiciteModifie());
    }

    /**
     * Tests the setPlafond1Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse1(): void {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse1());
    }

    /**
     * Tests the setPlafond1Caisse2() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse2(): void {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse2());
    }

    /**
     * Tests the setPlafond1Caisse3() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse3(): void {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse3());
    }

    /**
     * Tests the setPlafond2Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse1(): void {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }

    /**
     * Tests the setPlafond2Caisse2() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse2(): void {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse2());
    }

    /**
     * Tests the setPlafond2Caisse3() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse3(): void {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse3());
    }

    /**
     * Tests the setPlafondGmp() method.
     *
     * @return void
     */
    public function testSetPlafondGmp(): void {

        $obj = new Bulletins();

        $obj->setPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondGmp());
    }

    /**
     * Tests the setPlafondGmpModifie() method.
     *
     * @return void
     */
    public function testSetPlafondGmpModifie(): void {

        $obj = new Bulletins();

        $obj->setPlafondGmpModifie(true);
        $this->assertEquals(true, $obj->getPlafondGmpModifie());
    }

    /**
     * Tests the setPlafondHeure() method.
     *
     * @return void
     */
    public function testSetPlafondHeure(): void {

        $obj = new Bulletins();

        $obj->setPlafondHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondHeure());
    }

    /**
     * Tests the setPlafondJour() method.
     *
     * @return void
     */
    public function testSetPlafondJour(): void {

        $obj = new Bulletins();

        $obj->setPlafondJour(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondJour());
    }

    /**
     * Tests the setPlafondSemaine() method.
     *
     * @return void
     */
    public function testSetPlafondSemaine(): void {

        $obj = new Bulletins();

        $obj->setPlafondSemaine(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSemaine());
    }

    /**
     * Tests the setPourcentAbat() method.
     *
     * @return void
     */
    public function testSetPourcentAbat(): void {

        $obj = new Bulletins();

        $obj->setPourcentAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAbat());
    }

    /**
     * Tests the setPourcentActForce() method.
     *
     * @return void
     */
    public function testSetPourcentActForce(): void {

        $obj = new Bulletins();

        $obj->setPourcentActForce(10);
        $this->assertEquals(10, $obj->getPourcentActForce());
    }

    /**
     * Tests the setPourcentActivite() method.
     *
     * @return void
     */
    public function testSetPourcentActivite(): void {

        $obj = new Bulletins();

        $obj->setPourcentActivite(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentActivite());
    }

    /**
     * Tests the setPourcentRemuHor() method.
     *
     * @return void
     */
    public function testSetPourcentRemuHor(): void {

        $obj = new Bulletins();

        $obj->setPourcentRemuHor(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRemuHor());
    }

    /**
     * Tests the setPpSoumisTaxe() method.
     *
     * @return void
     */
    public function testSetPpSoumisTaxe(): void {

        $obj = new Bulletins();

        $obj->setPpSoumisTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getPpSoumisTaxe());
    }

    /**
     * Tests the setProvCp() method.
     *
     * @return void
     */
    public function testSetProvCp(): void {

        $obj = new Bulletins();

        $obj->setProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCp());
    }

    /**
     * Tests the setProvCp1() method.
     *
     * @return void
     */
    public function testSetProvCp1(): void {

        $obj = new Bulletins();

        $obj->setProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCp1());
    }

    /**
     * Tests the setPss1() method.
     *
     * @return void
     */
    public function testSetPss1(): void {

        $obj = new Bulletins();

        $obj->setPss1(10.092018);
        $this->assertEquals(10.092018, $obj->getPss1());
    }

    /**
     * Tests the setPss2() method.
     *
     * @return void
     */
    public function testSetPss2(): void {

        $obj = new Bulletins();

        $obj->setPss2(10.092018);
        $this->assertEquals(10.092018, $obj->getPss2());
    }

    /**
     * Tests the setPss30() method.
     *
     * @return void
     */
    public function testSetPss30(): void {

        $obj = new Bulletins();

        $obj->setPss30(true);
        $this->assertEquals(true, $obj->getPss30());
    }

    /**
     * Tests the setPssMod() method.
     *
     * @return void
     */
    public function testSetPssMod(): void {

        $obj = new Bulletins();

        $obj->setPssMod(true);
        $this->assertEquals(true, $obj->getPssMod());
    }

    /**
     * Tests the setRemunMens() method.
     *
     * @return void
     */
    public function testSetRemunMens(): void {

        $obj = new Bulletins();

        $obj->setRemunMens(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunMens());
    }

    /**
     * Tests the setSBase() method.
     *
     * @return void
     */
    public function testSetSBase(): void {

        $obj = new Bulletins();

        $obj->setSBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSBase());
    }

    /**
     * Tests the setSmic1() method.
     *
     * @return void
     */
    public function testSetSmic1(): void {

        $obj = new Bulletins();

        $obj->setSmic1(10.092018);
        $this->assertEquals(10.092018, $obj->getSmic1());
    }

    /**
     * Tests the setSmicH() method.
     *
     * @return void
     */
    public function testSetSmicH(): void {

        $obj = new Bulletins();

        $obj->setSmicH(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH());
    }

    /**
     * Tests the setSmicH35() method.
     *
     * @return void
     */
    public function testSetSmicH35(): void {

        $obj = new Bulletins();

        $obj->setSmicH35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH35());
    }

    /**
     * Tests the setSmicH39() method.
     *
     * @return void
     */
    public function testSetSmicH39(): void {

        $obj = new Bulletins();

        $obj->setSmicH39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH39());
    }

    /**
     * Tests the setSmicM() method.
     *
     * @return void
     */
    public function testSetSmicM(): void {

        $obj = new Bulletins();

        $obj->setSmicM(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM());
    }

    /**
     * Tests the setSmicM35() method.
     *
     * @return void
     */
    public function testSetSmicM35(): void {

        $obj = new Bulletins();

        $obj->setSmicM35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM35());
    }

    /**
     * Tests the setSmicM39() method.
     *
     * @return void
     */
    public function testSetSmicM39(): void {

        $obj = new Bulletins();

        $obj->setSmicM39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM39());
    }

    /**
     * Tests the setSortieMois() method.
     *
     * @return void
     */
    public function testSetSortieMois(): void {

        $obj = new Bulletins();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }

    /**
     * Tests the setTauxHAbCp() method.
     *
     * @return void
     */
    public function testSetTauxHAbCp(): void {

        $obj = new Bulletins();

        $obj->setTauxHAbCp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHAbCp());
    }

    /**
     * Tests the setTauxHAbsence() method.
     *
     * @return void
     */
    public function testSetTauxHAbsence(): void {

        $obj = new Bulletins();

        $obj->setTauxHAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHAbsence());
    }

    /**
     * Tests the setTauxHNormal() method.
     *
     * @return void
     */
    public function testSetTauxHNormal(): void {

        $obj = new Bulletins();

        $obj->setTauxHNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHNormal());
    }

    /**
     * Tests the setTauxJournalier() method.
     *
     * @return void
     */
    public function testSetTauxJournalier(): void {

        $obj = new Bulletins();

        $obj->setTauxJournalier(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxJournalier());
    }

    /**
     * Tests the setTotAcompte() method.
     *
     * @return void
     */
    public function testSetTotAcompte(): void {

        $obj = new Bulletins();

        $obj->setTotAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTotAcompte());
    }

    /**
     * Tests the setTotAcompteCp() method.
     *
     * @return void
     */
    public function testSetTotAcompteCp(): void {

        $obj = new Bulletins();

        $obj->setTotAcompteCp(10.092018);
        $this->assertEquals(10.092018, $obj->getTotAcompteCp());
    }

    /**
     * Tests the setTotCotisPatron() method.
     *
     * @return void
     */
    public function testSetTotCotisPatron(): void {

        $obj = new Bulletins();

        $obj->setTotCotisPatron(10.092018);
        $this->assertEquals(10.092018, $obj->getTotCotisPatron());
    }

    /**
     * Tests the setTotPrimeNi() method.
     *
     * @return void
     */
    public function testSetTotPrimeNi(): void {

        $obj = new Bulletins();

        $obj->setTotPrimeNi(10.092018);
        $this->assertEquals(10.092018, $obj->getTotPrimeNi());
    }

    /**
     * Tests the setTotPrimeNs() method.
     *
     * @return void
     */
    public function testSetTotPrimeNs(): void {

        $obj = new Bulletins();

        $obj->setTotPrimeNs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotPrimeNs());
    }

    /**
     * Tests the setTotRetenue() method.
     *
     * @return void
     */
    public function testSetTotRetenue(): void {

        $obj = new Bulletins();

        $obj->setTotRetenue(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRetenue());
    }

    /**
     * Tests the setTrACaisse1() method.
     *
     * @return void
     */
    public function testSetTrACaisse1(): void {

        $obj = new Bulletins();

        $obj->setTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse1());
    }

    /**
     * Tests the setTrACaisse2() method.
     *
     * @return void
     */
    public function testSetTrACaisse2(): void {

        $obj = new Bulletins();

        $obj->setTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse2());
    }

    /**
     * Tests the setTrACaisse3() method.
     *
     * @return void
     */
    public function testSetTrACaisse3(): void {

        $obj = new Bulletins();

        $obj->setTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse3());
    }

    /**
     * Tests the setTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetTrBCaisse1(): void {

        $obj = new Bulletins();

        $obj->setTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse1());
    }

    /**
     * Tests the setTrBCaisse2() method.
     *
     * @return void
     */
    public function testSetTrBCaisse2(): void {

        $obj = new Bulletins();

        $obj->setTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse2());
    }

    /**
     * Tests the setTrBCaisse3() method.
     *
     * @return void
     */
    public function testSetTrBCaisse3(): void {

        $obj = new Bulletins();

        $obj->setTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse3());
    }

    /**
     * Tests the setTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetTrCCaisse1(): void {

        $obj = new Bulletins();

        $obj->setTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse1());
    }

    /**
     * Tests the setTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetTrCCaisse2(): void {

        $obj = new Bulletins();

        $obj->setTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse2());
    }

    /**
     * Tests the setTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetTrCCaisse3(): void {

        $obj = new Bulletins();

        $obj->setTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse3());
    }

    /**
     * Tests the setTranche2() method.
     *
     * @return void
     */
    public function testSetTranche2(): void {

        $obj = new Bulletins();

        $obj->setTranche2(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2());
    }

    /**
     * Tests the setTrancheA() method.
     *
     * @return void
     */
    public function testSetTrancheA(): void {

        $obj = new Bulletins();

        $obj->setTrancheA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheA());
    }

    /**
     * Tests the setTrancheAbal() method.
     *
     * @return void
     */
    public function testSetTrancheAbal(): void {

        $obj = new Bulletins();

        $obj->setTrancheAbal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAbal());
    }

    /**
     * Tests the setTrancheAbanl() method.
     *
     * @return void
     */
    public function testSetTrancheAbanl(): void {

        $obj = new Bulletins();

        $obj->setTrancheAbanl(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAbanl());
    }

    /**
     * Tests the setTrancheAbna() method.
     *
     * @return void
     */
    public function testSetTrancheAbna(): void {

        $obj = new Bulletins();

        $obj->setTrancheAbna(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAbna());
    }

    /**
     * Tests the setTrancheB() method.
     *
     * @return void
     */
    public function testSetTrancheB(): void {

        $obj = new Bulletins();

        $obj->setTrancheB(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheB());
    }

    /**
     * Tests the setTrancheBbal() method.
     *
     * @return void
     */
    public function testSetTrancheBbal(): void {

        $obj = new Bulletins();

        $obj->setTrancheBbal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBbal());
    }

    /**
     * Tests the setTrancheBbanl() method.
     *
     * @return void
     */
    public function testSetTrancheBbanl(): void {

        $obj = new Bulletins();

        $obj->setTrancheBbanl(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBbanl());
    }

    /**
     * Tests the setTrancheBbna() method.
     *
     * @return void
     */
    public function testSetTrancheBbna(): void {

        $obj = new Bulletins();

        $obj->setTrancheBbna(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBbna());
    }

    /**
     * Tests the setTrancheC() method.
     *
     * @return void
     */
    public function testSetTrancheC(): void {

        $obj = new Bulletins();

        $obj->setTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheC());
    }

    /**
     * Tests the setTrancheCPlaf() method.
     *
     * @return void
     */
    public function testSetTrancheCPlaf(): void {

        $obj = new Bulletins();

        $obj->setTrancheCPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCPlaf());
    }

    /**
     * Tests the setTrancheCbal() method.
     *
     * @return void
     */
    public function testSetTrancheCbal(): void {

        $obj = new Bulletins();

        $obj->setTrancheCbal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCbal());
    }

    /**
     * Tests the setTrancheCbanl() method.
     *
     * @return void
     */
    public function testSetTrancheCbanl(): void {

        $obj = new Bulletins();

        $obj->setTrancheCbanl(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCbanl());
    }

    /**
     * Tests the setTrancheCbna() method.
     *
     * @return void
     */
    public function testSetTrancheCbna(): void {

        $obj = new Bulletins();

        $obj->setTrancheCbna(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCbna());
    }

    /**
     * Tests the setTxtNoteRtf() method.
     *
     * @return void
     */
    public function testSetTxtNoteRtf(): void {

        $obj = new Bulletins();

        $obj->setTxtNoteRtf("txtNoteRtf");
        $this->assertEquals("txtNoteRtf", $obj->getTxtNoteRtf());
    }

    /**
     * Tests the setTypeBaseCaisse1() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1(): void {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }

    /**
     * Tests the setTypeBaseCaisse2() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse2(): void {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse2("typeBaseCaisse2");
        $this->assertEquals("typeBaseCaisse2", $obj->getTypeBaseCaisse2());
    }

    /**
     * Tests the setTypeBaseCaisse3() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3(): void {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }

    /**
     * Tests the setTypeGestionBal() method.
     *
     * @return void
     */
    public function testSetTypeGestionBal(): void {

        $obj = new Bulletins();

        $obj->setTypeGestionBal("typeGestionBal");
        $this->assertEquals("typeGestionBal", $obj->getTypeGestionBal());
    }

    /**
     * Tests the setTypePaiementBul() method.
     *
     * @return void
     */
    public function testSetTypePaiementBul(): void {

        $obj = new Bulletins();

        $obj->setTypePaiementBul("typePaiementBul");
        $this->assertEquals("typePaiementBul", $obj->getTypePaiementBul());
    }

    /**
     * Tests the setTypePaimentModifie() method.
     *
     * @return void
     */
    public function testSetTypePaimentModifie(): void {

        $obj = new Bulletins();

        $obj->setTypePaimentModifie(true);
        $this->assertEquals(true, $obj->getTypePaimentModifie());
    }

    /**
     * Tests the setTypeSaisieAbs() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbs(): void {

        $obj = new Bulletins();

        $obj->setTypeSaisieAbs("typeSaisieAbs");
        $this->assertEquals("typeSaisieAbs", $obj->getTypeSaisieAbs());
    }

    /**
     * Tests the setTypeSaisieAbsence() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbsence(): void {

        $obj = new Bulletins();

        $obj->setTypeSaisieAbsence("typeSaisieAbsence");
        $this->assertEquals("typeSaisieAbsence", $obj->getTypeSaisieAbsence());
    }

    /**
     * Tests the setValoriseCp() method.
     *
     * @return void
     */
    public function testSetValoriseCp(): void {

        $obj = new Bulletins();

        $obj->setValoriseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getValoriseCp());
    }

    /**
     * Tests the __construct() method.
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
