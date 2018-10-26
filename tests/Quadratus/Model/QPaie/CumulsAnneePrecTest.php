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

use WBW\Library\Core\Quadratus\Model\QPaie\CumulsAnneePrec;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Cumuls annee prec model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class CumulsAnneePrecTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CumulsAnneePrec();

		$this->assertNull($obj->getAnnee());
		$this->assertNull($obj->getCum30SS());
		$this->assertNull($obj->getCumBaseCsg());
		$this->assertNull($obj->getCumBaseGMP());
		$this->assertNull($obj->getCumBaseSS());
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
		$this->assertNull($obj->getCumBrutal());
		$this->assertNull($obj->getCumBrutalSansSI());
		$this->assertNull($obj->getCumCpDus());
		$this->assertNull($obj->getCumCpDus_1());
		$this->assertNull($obj->getCumCpPris());
		$this->assertNull($obj->getCumCpPris_1());
		$this->assertNull($obj->getCumDIFDus());
		$this->assertNull($obj->getCumDIFDus_1());
		$this->assertNull($obj->getCumHBonifie());
		$this->assertNull($obj->getCumHReposRemplace());
		$this->assertNull($obj->getCumHService());
		$this->assertNull($obj->getCumHSup());
		$this->assertNull($obj->getCumHSupRCIT());
		$this->assertNull($obj->getCumHeurePaye());
		$this->assertNull($obj->getCumHeureTrav());
		$this->assertNull($obj->getCumJReposRecup());
		$this->assertNull($obj->getCumJourPaye());
		$this->assertNull($obj->getCumJourTrav());
		$this->assertNull($obj->getCumMtCpPris());
		$this->assertNull($obj->getCumMtCpPris_1());
		$this->assertNull($obj->getCumNetAPayer());
		$this->assertNull($obj->getCumNetImposable());
		$this->assertNull($obj->getCumPlaf1Caisse1());
		$this->assertNull($obj->getCumPlaf1Caisse2());
		$this->assertNull($obj->getCumPlaf1Caisse3());
		$this->assertNull($obj->getCumPlaf2Caisse1());
		$this->assertNull($obj->getCumPlaf2Caisse2());
		$this->assertNull($obj->getCumPlaf2Caisse3());
		$this->assertNull($obj->getCumPlafondGMP());
		$this->assertNull($obj->getCumPlafondSS1());
		$this->assertNull($obj->getCumPlafondSS2());
		$this->assertNull($obj->getCumProvCp());
		$this->assertNull($obj->getCumProvCp_1());
		$this->assertNull($obj->getCumReposComp());
		$this->assertNull($obj->getCumRttDus());
		$this->assertNull($obj->getCumRttPris());
		$this->assertNull($obj->getCumTotSI());
		$this->assertNull($obj->getCumTranche2SI());
		$this->assertNull($obj->getCumTranche2SansSI());
		$this->assertNull($obj->getCumTrancheASI());
		$this->assertNull($obj->getCumTrancheASansSI());
		$this->assertNull($obj->getCumTrancheBSI());
		$this->assertNull($obj->getCumTrancheBSansSI());
		$this->assertNull($obj->getCumTrancheCSI());
		$this->assertNull($obj->getCumTrancheCSansSI());
		$this->assertNull($obj->getCumTrancheD1SansSI());
		$this->assertNull($obj->getCumTrancheDSansSI());
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
	 * Tests the setCum30SS() method.
	 *
	 * @return void
	 */
	public function testSetCum30SS() {

		$obj = new CumulsAnneePrec();

		$obj->setCum30SS(10.092018);
		$this->assertEquals(10.092018, $obj->getCum30SS());
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
	 * Tests the setCumBaseGMP() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseGMP() {

		$obj = new CumulsAnneePrec();

		$obj->setCumBaseGMP(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseGMP());
	}

	/**
	 * Tests the setCumBaseSS() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseSS() {

		$obj = new CumulsAnneePrec();

		$obj->setCumBaseSS(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseSS());
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
	 * Tests the setCumBrutal() method.
	 *
	 * @return void
	 */
	public function testSetCumBrutal() {

		$obj = new CumulsAnneePrec();

		$obj->setCumBrutal(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBrutal());
	}

	/**
	 * Tests the setCumBrutalSansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumBrutalSansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumBrutalSansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBrutalSansSI());
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
	 * Tests the setCumCpDus_1() method.
	 *
	 * @return void
	 */
	public function testSetCumCpDus_1() {

		$obj = new CumulsAnneePrec();

		$obj->setCumCpDus_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumCpDus_1());
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
	 * Tests the setCumCpPris_1() method.
	 *
	 * @return void
	 */
	public function testSetCumCpPris_1() {

		$obj = new CumulsAnneePrec();

		$obj->setCumCpPris_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumCpPris_1());
	}

	/**
	 * Tests the setCumDIFDus() method.
	 *
	 * @return void
	 */
	public function testSetCumDIFDus() {

		$obj = new CumulsAnneePrec();

		$obj->setCumDIFDus(10.092018);
		$this->assertEquals(10.092018, $obj->getCumDIFDus());
	}

	/**
	 * Tests the setCumDIFDus_1() method.
	 *
	 * @return void
	 */
	public function testSetCumDIFDus_1() {

		$obj = new CumulsAnneePrec();

		$obj->setCumDIFDus_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumDIFDus_1());
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
	 * Tests the setCumHSupRCIT() method.
	 *
	 * @return void
	 */
	public function testSetCumHSupRCIT() {

		$obj = new CumulsAnneePrec();

		$obj->setCumHSupRCIT(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHSupRCIT());
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
	 * Tests the setCumMtCpPris_1() method.
	 *
	 * @return void
	 */
	public function testSetCumMtCpPris_1() {

		$obj = new CumulsAnneePrec();

		$obj->setCumMtCpPris_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumMtCpPris_1());
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
	 * Tests the setCumPlafondGMP() method.
	 *
	 * @return void
	 */
	public function testSetCumPlafondGMP() {

		$obj = new CumulsAnneePrec();

		$obj->setCumPlafondGMP(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlafondGMP());
	}

	/**
	 * Tests the setCumPlafondSS1() method.
	 *
	 * @return void
	 */
	public function testSetCumPlafondSS1() {

		$obj = new CumulsAnneePrec();

		$obj->setCumPlafondSS1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlafondSS1());
	}

	/**
	 * Tests the setCumPlafondSS2() method.
	 *
	 * @return void
	 */
	public function testSetCumPlafondSS2() {

		$obj = new CumulsAnneePrec();

		$obj->setCumPlafondSS2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlafondSS2());
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
	 * Tests the setCumProvCp_1() method.
	 *
	 * @return void
	 */
	public function testSetCumProvCp_1() {

		$obj = new CumulsAnneePrec();

		$obj->setCumProvCp_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumProvCp_1());
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
	 * Tests the setCumTotSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTotSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTotSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTotSI());
	}

	/**
	 * Tests the setCumTranche2SI() method.
	 *
	 * @return void
	 */
	public function testSetCumTranche2SI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTranche2SI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTranche2SI());
	}

	/**
	 * Tests the setCumTranche2SansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTranche2SansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTranche2SansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTranche2SansSI());
	}

	/**
	 * Tests the setCumTrancheASI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheASI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheASI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheASI());
	}

	/**
	 * Tests the setCumTrancheASansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheASansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheASansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheASansSI());
	}

	/**
	 * Tests the setCumTrancheBSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheBSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheBSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheBSI());
	}

	/**
	 * Tests the setCumTrancheBSansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheBSansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheBSansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheBSansSI());
	}

	/**
	 * Tests the setCumTrancheCSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheCSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheCSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheCSI());
	}

	/**
	 * Tests the setCumTrancheCSansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheCSansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheCSansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheCSansSI());
	}

	/**
	 * Tests the setCumTrancheD1SansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheD1SansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheD1SansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheD1SansSI());
	}

	/**
	 * Tests the setCumTrancheDSansSI() method.
	 *
	 * @return void
	 */
	public function testSetCumTrancheDSansSI() {

		$obj = new CumulsAnneePrec();

		$obj->setCumTrancheDSansSI(10.092018);
		$this->assertEquals(10.092018, $obj->getCumTrancheDSansSI());
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
