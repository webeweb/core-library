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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CumulsAnneePrec;

/**
 * Cumuls annee prec test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CumulsAnneePrecTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CumulsAnneePrec();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCum30Ss());
        $this->assertNull($obj->getCumBaseCsg());
        $this->assertNull($obj->getCumBaseGmp());
        $this->assertNull($obj->getCumBaseSs());
        $this->assertNull($obj->getCumBaseTr2());
        $this->assertNull($obj->getCumBaseTrA());
        $this->assertNull($obj->getCumBaseTrACaisse1());
        $this->assertNull($obj->getCumBaseTrACaisse2());
        $this->assertNull($obj->getCumBaseTrACaisse3());
        $this->assertNull($obj->getCumBaseTrB());
        $this->assertNull($obj->getCumBaseTrBCaisse1());
        $this->assertNull($obj->getCumBaseTrBCaisse2());
        $this->assertNull($obj->getCumBaseTrBCaisse3());
        $this->assertNull($obj->getCumBaseTrC());
        $this->assertNull($obj->getCumBaseTrCCaisse1());
        $this->assertNull($obj->getCumBaseTrCCaisse2());
        $this->assertNull($obj->getCumBaseTrCCaisse3());
        $this->assertNull($obj->getCumBaseTrD());
        $this->assertNull($obj->getCumBaseTrD1());
        $this->assertNull($obj->getCumBaseTrD1Caisse1());
        $this->assertNull($obj->getCumBaseTrD1Caisse2());
        $this->assertNull($obj->getCumBaseTrD1Caisse3());
        $this->assertNull($obj->getCumBaseTrDCaisse1());
        $this->assertNull($obj->getCumBaseTrDCaisse2());
        $this->assertNull($obj->getCumBaseTrDCaisse3());
        $this->assertNull($obj->getCumBrutAbatNonLim());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumBrutNonAbattu());
        $this->assertNull($obj->getCumBrutAl());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumCpDus());
        $this->assertNull($obj->getCumCpDus1());
        $this->assertNull($obj->getCumCpPris());
        $this->assertNull($obj->getCumCpPris1());
        $this->assertNull($obj->getCumDifDus());
        $this->assertNull($obj->getCumDifDus1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumHReposRemplace());
        $this->assertNull($obj->getCumHService());
        $this->assertNull($obj->getCumHSup());
        $this->assertNull($obj->getCumHSupRcit());
        $this->assertNull($obj->getCumHeurePaye());
        $this->assertNull($obj->getCumHeureTrav());
        $this->assertNull($obj->getCumJReposRecup());
        $this->assertNull($obj->getCumJourPaye());
        $this->assertNull($obj->getCumJourTrav());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumNetImposable());
        $this->assertNull($obj->getCumPlaf1Caisse1());
        $this->assertNull($obj->getCumPlaf1Caisse2());
        $this->assertNull($obj->getCumPlaf1Caisse3());
        $this->assertNull($obj->getCumPlaf2Caisse1());
        $this->assertNull($obj->getCumPlaf2Caisse2());
        $this->assertNull($obj->getCumPlaf2Caisse3());
        $this->assertNull($obj->getCumPlafondGmp());
        $this->assertNull($obj->getCumPlafondSs1());
        $this->assertNull($obj->getCumPlafondSs2());
        $this->assertNull($obj->getCumProvCp());
        $this->assertNull($obj->getCumProvCp1());
        $this->assertNull($obj->getCumReposComp());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getNumeroEmploye());
    }

    /**
     * Tests the setAnnee() method.
     *
     * @return void
     */
    public function testSetAnnee() {

        $obj = new CumulsAnneePrec();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Tests the setCum30Ss() method.
     *
     * @return void
     */
    public function testSetCum30Ss() {

        $obj = new CumulsAnneePrec();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Tests the setCumBaseCsg() method.
     *
     * @return void
     */
    public function testSetCumBaseCsg() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseCsg());
    }

    /**
     * Tests the setCumBaseGmp() method.
     *
     * @return void
     */
    public function testSetCumBaseGmp() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Tests the setCumBaseSs() method.
     *
     * @return void
     */
    public function testSetCumBaseSs() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Tests the setCumBaseTr2() method.
     *
     * @return void
     */
    public function testSetCumBaseTr2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTr2());
    }

    /**
     * Tests the setCumBaseTrA() method.
     *
     * @return void
     */
    public function testSetCumBaseTrA() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrA());
    }

    /**
     * Tests the setCumBaseTrACaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse1());
    }

    /**
     * Tests the setCumBaseTrACaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse2());
    }

    /**
     * Tests the setCumBaseTrACaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse3());
    }

    /**
     * Tests the setCumBaseTrB() method.
     *
     * @return void
     */
    public function testSetCumBaseTrB() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrB());
    }

    /**
     * Tests the setCumBaseTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse1());
    }

    /**
     * Tests the setCumBaseTrBCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse2());
    }

    /**
     * Tests the setCumBaseTrBCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse3());
    }

    /**
     * Tests the setCumBaseTrC() method.
     *
     * @return void
     */
    public function testSetCumBaseTrC() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrC());
    }

    /**
     * Tests the setCumBaseTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse1());
    }

    /**
     * Tests the setCumBaseTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse2());
    }

    /**
     * Tests the setCumBaseTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse3());
    }

    /**
     * Tests the setCumBaseTrD() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD());
    }

    /**
     * Tests the setCumBaseTrD1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1());
    }

    /**
     * Tests the setCumBaseTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse1());
    }

    /**
     * Tests the setCumBaseTrD1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse2());
    }

    /**
     * Tests the setCumBaseTrD1Caisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse3());
    }

    /**
     * Tests the setCumBaseTrDCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse1());
    }

    /**
     * Tests the setCumBaseTrDCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrDCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse2());
    }

    /**
     * Tests the setCumBaseTrDCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrDCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse3());
    }

    /**
     * Tests the setCumBrutAbatNonLim() method.
     *
     * @return void
     */
    public function testSetCumBrutAbatNonLim() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutAbatNonLim(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAbatNonLim());
    }

    /**
     * Tests the setCumBrutAl() method.
     *
     * @return void
     */
    public function testSetCumBrutAl() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Tests the setCumBrutAlSansSi() method.
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
    }

    /**
     * Tests the setCumBrutCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Tests the setCumBrutCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Tests the setCumBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Tests the setCumBrutNonAbattu() method.
     *
     * @return void
     */
    public function testSetCumBrutNonAbattu() {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutNonAbattu(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutNonAbattu());
    }

    /**
     * Tests the setCumCpDus() method.
     *
     * @return void
     */
    public function testSetCumCpDus() {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus());
    }

    /**
     * Tests the setCumCpDus1() method.
     *
     * @return void
     */
    public function testSetCumCpDus1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus1());
    }

    /**
     * Tests the setCumCpPris() method.
     *
     * @return void
     */
    public function testSetCumCpPris() {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris());
    }

    /**
     * Tests the setCumCpPris1() method.
     *
     * @return void
     */
    public function testSetCumCpPris1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris1());
    }

    /**
     * Tests the setCumDifDus() method.
     *
     * @return void
     */
    public function testSetCumDifDus() {

        $obj = new CumulsAnneePrec();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Tests the setCumDifDus1() method.
     *
     * @return void
     */
    public function testSetCumDifDus1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }

    /**
     * Tests the setCumHBonifie() method.
     *
     * @return void
     */
    public function testSetCumHBonifie() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Tests the setCumHReposRemplace() method.
     *
     * @return void
     */
    public function testSetCumHReposRemplace() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Tests the setCumHService() method.
     *
     * @return void
     */
    public function testSetCumHService() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Tests the setCumHSup() method.
     *
     * @return void
     */
    public function testSetCumHSup() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSup());
    }

    /**
     * Tests the setCumHSupRcit() method.
     *
     * @return void
     */
    public function testSetCumHSupRcit() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHSupRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSupRcit());
    }

    /**
     * Tests the setCumHeurePaye() method.
     *
     * @return void
     */
    public function testSetCumHeurePaye() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeurePaye());
    }

    /**
     * Tests the setCumHeureTrav() method.
     *
     * @return void
     */
    public function testSetCumHeureTrav() {

        $obj = new CumulsAnneePrec();

        $obj->setCumHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeureTrav());
    }

    /**
     * Tests the setCumJReposRecup() method.
     *
     * @return void
     */
    public function testSetCumJReposRecup() {

        $obj = new CumulsAnneePrec();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Tests the setCumJourPaye() method.
     *
     * @return void
     */
    public function testSetCumJourPaye() {

        $obj = new CumulsAnneePrec();

        $obj->setCumJourPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourPaye());
    }

    /**
     * Tests the setCumJourTrav() method.
     *
     * @return void
     */
    public function testSetCumJourTrav() {

        $obj = new CumulsAnneePrec();

        $obj->setCumJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourTrav());
    }

    /**
     * Tests the setCumMtCpPris() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris() {

        $obj = new CumulsAnneePrec();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Tests the setCumMtCpPris1() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Tests the setCumNetAPayer() method.
     *
     * @return void
     */
    public function testSetCumNetAPayer() {

        $obj = new CumulsAnneePrec();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Tests the setCumNetImposable() method.
     *
     * @return void
     */
    public function testSetCumNetImposable() {

        $obj = new CumulsAnneePrec();

        $obj->setCumNetImposable(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImposable());
    }

    /**
     * Tests the setCumPlaf1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Tests the setCumPlaf1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Tests the setCumPlaf1Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Tests the setCumPlaf2Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Tests the setCumPlaf2Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Tests the setCumPlaf2Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Tests the setCumPlafondGmp() method.
     *
     * @return void
     */
    public function testSetCumPlafondGmp() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Tests the setCumPlafondSs1() method.
     *
     * @return void
     */
    public function testSetCumPlafondSs1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs1());
    }

    /**
     * Tests the setCumPlafondSs2() method.
     *
     * @return void
     */
    public function testSetCumPlafondSs2() {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs2());
    }

    /**
     * Tests the setCumProvCp() method.
     *
     * @return void
     */
    public function testSetCumProvCp() {

        $obj = new CumulsAnneePrec();

        $obj->setCumProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp());
    }

    /**
     * Tests the setCumProvCp1() method.
     *
     * @return void
     */
    public function testSetCumProvCp1() {

        $obj = new CumulsAnneePrec();

        $obj->setCumProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp1());
    }

    /**
     * Tests the setCumReposComp() method.
     *
     * @return void
     */
    public function testSetCumReposComp() {

        $obj = new CumulsAnneePrec();

        $obj->setCumReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumReposComp());
    }

    /**
     * Tests the setCumRttDus() method.
     *
     * @return void
     */
    public function testSetCumRttDus() {

        $obj = new CumulsAnneePrec();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Tests the setCumRttPris() method.
     *
     * @return void
     */
    public function testSetCumRttPris() {

        $obj = new CumulsAnneePrec();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Tests the setCumTotSi() method.
     *
     * @return void
     */
    public function testSetCumTotSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Tests the setCumTranche2SansSi() method.
     *
     * @return void
     */
    public function testSetCumTranche2SansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Tests the setCumTranche2Si() method.
     *
     * @return void
     */
    public function testSetCumTranche2Si() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Tests the setCumTrancheASansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheASansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Tests the setCumTrancheAsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheAsi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Tests the setCumTrancheBSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Tests the setCumTrancheBsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheBsi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Tests the setCumTrancheCSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Tests the setCumTrancheCsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheCsi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Tests the setCumTrancheD1SansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Tests the setCumTrancheDSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi() {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new CumulsAnneePrec();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }
}
