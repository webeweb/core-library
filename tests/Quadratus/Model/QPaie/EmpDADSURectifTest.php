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

use WBW\Library\Core\Quadratus\Model\QPaie\EmpDADSURectif;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp d a d s u rectif model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmpDADSURectifTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpDADSURectif();

		$this->assertNull($obj->getActif());
		$this->assertNull($obj->getActionsGratuites_Nbre());
		$this->assertNull($obj->getActionsGratuites_ValeurU());
		$this->assertNull($obj->getAutresSommesExo_Mnt1());
		$this->assertNull($obj->getAutresSommesExo_Mnt2());
		$this->assertNull($obj->getAutresSommesExo_Mnt3());
		$this->assertNull($obj->getAutresSommesExo_Mnt4());
		$this->assertNull($obj->getBaseExoBrut1());
		$this->assertNull($obj->getBaseExoBrut2());
		$this->assertNull($obj->getBaseExoBrut3());
		$this->assertNull($obj->getBaseExoPlaf1());
		$this->assertNull($obj->getBaseExoPlaf2());
		$this->assertNull($obj->getBaseExoPlaf3());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCsgSpecif());
		$this->assertNull($obj->getEpargneSal_Mnt1());
		$this->assertNull($obj->getEpargneSal_Mnt2());
		$this->assertNull($obj->getEpargneSal_Mnt3());
		$this->assertNull($obj->getEpargneSal_Mnt4());
		$this->assertNull($obj->getGPEC_MntExoCSGCRDS());
		$this->assertNull($obj->getGPEC_MntExoCotSecu());
		$this->assertNull($obj->getIndCp());
		$this->assertNull($obj->getIndemnCpPlaf());
		$this->assertNull($obj->getIndemnImpat());
		$this->assertNull($obj->getIndemnRupture_Mnt1());
		$this->assertNull($obj->getIndemnRupture_Mnt2());
		$this->assertNull($obj->getIndiceRectif());
		$this->assertNull($obj->getMontantBPlaf());
		$this->assertNull($obj->getMontantBPlaf2());
		$this->assertNull($obj->getMontantBPlaf3());
		$this->assertNull($obj->getMontantBPlaf4());
		$this->assertNull($obj->getMontantBPlaf5());
		$this->assertNull($obj->getMontantBrut());
		$this->assertNull($obj->getMontantBrut2());
		$this->assertNull($obj->getMontantBrut3());
		$this->assertNull($obj->getMontantBrut4());
		$this->assertNull($obj->getMontantBrut5());
		$this->assertNull($obj->getMontantSommeIsolBrut());
		$this->assertNull($obj->getMontantSommeIsolBrut2());
		$this->assertNull($obj->getMontantSommeIsolBrut3());
		$this->assertNull($obj->getMontantSommeIsolBrut4());
		$this->assertNull($obj->getMontantSommeIsolBrut5());
		$this->assertNull($obj->getMontantSommeIsolPlaf());
		$this->assertNull($obj->getMontantSommeIsolPlaf2());
		$this->assertNull($obj->getMontantSommeIsolPlaf3());
		$this->assertNull($obj->getMontantSommeIsolPlaf4());
		$this->assertNull($obj->getMontantSommeIsolPlaf5());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getNumeroOrdre());
		$this->assertNull($obj->getParticipPatronAvtge_Mnt1());
		$this->assertNull($obj->getParticipPatronAvtge_Mnt2());
		$this->assertNull($obj->getParticipServPers());
		$this->assertNull($obj->getTDS100());
		$this->assertNull($obj->getTDS103());
		$this->assertNull($obj->getTDS105());
		$this->assertNull($obj->getTDS107());
		$this->assertNull($obj->getTDS108());
		$this->assertNull($obj->getTDS109());
		$this->assertNull($obj->getTDS110());
		$this->assertNull($obj->getTDS111());
		$this->assertNull($obj->getTDS112());
		$this->assertNull($obj->getTDS113());
		$this->assertNull($obj->getTDS117());
		$this->assertNull($obj->getTDS119());
		$this->assertNull($obj->getTDS120());
		$this->assertNull($obj->getTDS121());
		$this->assertNull($obj->getTDS122());
		$this->assertNull($obj->getTDS125());
		$this->assertNull($obj->getTDS132());
		$this->assertNull($obj->getTDS134());
		$this->assertNull($obj->getTDS135());
		$this->assertNull($obj->getTDS136());
		$this->assertNull($obj->getTDS141());
		$this->assertNull($obj->getTDS81());
		$this->assertNull($obj->getTDS82());
		$this->assertNull($obj->getTaxeSalaire());
		$this->assertNull($obj->getTds137());
		$this->assertNull($obj->getTds142());
		$this->assertNull($obj->getTdsAllocRetraite());
		$this->assertNull($obj->getTotalPlaf());
	}

	/**
	 * Tests the setActif() method.
	 *
	 * @return void
	 */
	public function testSetActif() {

		$obj = new EmpDADSURectif();

		$obj->setActif(true);
		$this->assertEquals(true, $obj->getActif());
	}

	/**
	 * Tests the setActionsGratuites_Nbre() method.
	 *
	 * @return void
	 */
	public function testSetActionsGratuites_Nbre() {

		$obj = new EmpDADSURectif();

		$obj->setActionsGratuites_Nbre(10.092018);
		$this->assertEquals(10.092018, $obj->getActionsGratuites_Nbre());
	}

	/**
	 * Tests the setActionsGratuites_ValeurU() method.
	 *
	 * @return void
	 */
	public function testSetActionsGratuites_ValeurU() {

		$obj = new EmpDADSURectif();

		$obj->setActionsGratuites_ValeurU(10.092018);
		$this->assertEquals(10.092018, $obj->getActionsGratuites_ValeurU());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt1() {

		$obj = new EmpDADSURectif();

		$obj->setAutresSommesExo_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt1());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt2() {

		$obj = new EmpDADSURectif();

		$obj->setAutresSommesExo_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt2());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt3() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt3() {

		$obj = new EmpDADSURectif();

		$obj->setAutresSommesExo_Mnt3(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt3());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt4() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt4() {

		$obj = new EmpDADSURectif();

		$obj->setAutresSommesExo_Mnt4(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt4());
	}

	/**
	 * Tests the setBaseExoBrut1() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoBrut1() {

		$obj = new EmpDADSURectif();

		$obj->setBaseExoBrut1(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoBrut1());
	}

	/**
	 * Tests the setBaseExoBrut2() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoBrut2() {

		$obj = new EmpDADSURectif();

		$obj->setBaseExoBrut2(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoBrut2());
	}

	/**
	 * Tests the setBaseExoBrut3() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoBrut3() {

		$obj = new EmpDADSURectif();

		$obj->setBaseExoBrut3(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoBrut3());
	}

	/**
	 * Tests the setBaseExoPlaf1() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoPlaf1() {

		$obj = new EmpDADSURectif();

		$obj->setBaseExoPlaf1(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoPlaf1());
	}

	/**
	 * Tests the setBaseExoPlaf2() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoPlaf2() {

		$obj = new EmpDADSURectif();

		$obj->setBaseExoPlaf2(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoPlaf2());
	}

	/**
	 * Tests the setBaseExoPlaf3() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoPlaf3() {

		$obj = new EmpDADSURectif();

		$obj->setBaseExoPlaf3(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoPlaf3());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new EmpDADSURectif();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCsgSpecif() method.
	 *
	 * @return void
	 */
	public function testSetCsgSpecif() {

		$obj = new EmpDADSURectif();

		$obj->setCsgSpecif(10.092018);
		$this->assertEquals(10.092018, $obj->getCsgSpecif());
	}

	/**
	 * Tests the setEpargneSal_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt1() {

		$obj = new EmpDADSURectif();

		$obj->setEpargneSal_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt1());
	}

	/**
	 * Tests the setEpargneSal_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt2() {

		$obj = new EmpDADSURectif();

		$obj->setEpargneSal_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt2());
	}

	/**
	 * Tests the setEpargneSal_Mnt3() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt3() {

		$obj = new EmpDADSURectif();

		$obj->setEpargneSal_Mnt3(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt3());
	}

	/**
	 * Tests the setEpargneSal_Mnt4() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt4() {

		$obj = new EmpDADSURectif();

		$obj->setEpargneSal_Mnt4(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt4());
	}

	/**
	 * Tests the setGPEC_MntExoCSGCRDS() method.
	 *
	 * @return void
	 */
	public function testSetGPEC_MntExoCSGCRDS() {

		$obj = new EmpDADSURectif();

		$obj->setGPEC_MntExoCSGCRDS(10.092018);
		$this->assertEquals(10.092018, $obj->getGPEC_MntExoCSGCRDS());
	}

	/**
	 * Tests the setGPEC_MntExoCotSecu() method.
	 *
	 * @return void
	 */
	public function testSetGPEC_MntExoCotSecu() {

		$obj = new EmpDADSURectif();

		$obj->setGPEC_MntExoCotSecu(10.092018);
		$this->assertEquals(10.092018, $obj->getGPEC_MntExoCotSecu());
	}

	/**
	 * Tests the setIndCp() method.
	 *
	 * @return void
	 */
	public function testSetIndCp() {

		$obj = new EmpDADSURectif();

		$obj->setIndCp(10.092018);
		$this->assertEquals(10.092018, $obj->getIndCp());
	}

	/**
	 * Tests the setIndemnCpPlaf() method.
	 *
	 * @return void
	 */
	public function testSetIndemnCpPlaf() {

		$obj = new EmpDADSURectif();

		$obj->setIndemnCpPlaf(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnCpPlaf());
	}

	/**
	 * Tests the setIndemnImpat() method.
	 *
	 * @return void
	 */
	public function testSetIndemnImpat() {

		$obj = new EmpDADSURectif();

		$obj->setIndemnImpat(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnImpat());
	}

	/**
	 * Tests the setIndemnRupture_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetIndemnRupture_Mnt1() {

		$obj = new EmpDADSURectif();

		$obj->setIndemnRupture_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnRupture_Mnt1());
	}

	/**
	 * Tests the setIndemnRupture_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetIndemnRupture_Mnt2() {

		$obj = new EmpDADSURectif();

		$obj->setIndemnRupture_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnRupture_Mnt2());
	}

	/**
	 * Tests the setIndiceRectif() method.
	 *
	 * @return void
	 */
	public function testSetIndiceRectif() {

		$obj = new EmpDADSURectif();

		$obj->setIndiceRectif(10);
		$this->assertEquals(10, $obj->getIndiceRectif());
	}

	/**
	 * Tests the setMontantBPlaf() method.
	 *
	 * @return void
	 */
	public function testSetMontantBPlaf() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBPlaf(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBPlaf());
	}

	/**
	 * Tests the setMontantBPlaf2() method.
	 *
	 * @return void
	 */
	public function testSetMontantBPlaf2() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBPlaf2(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBPlaf2());
	}

	/**
	 * Tests the setMontantBPlaf3() method.
	 *
	 * @return void
	 */
	public function testSetMontantBPlaf3() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBPlaf3(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBPlaf3());
	}

	/**
	 * Tests the setMontantBPlaf4() method.
	 *
	 * @return void
	 */
	public function testSetMontantBPlaf4() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBPlaf4(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBPlaf4());
	}

	/**
	 * Tests the setMontantBPlaf5() method.
	 *
	 * @return void
	 */
	public function testSetMontantBPlaf5() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBPlaf5(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBPlaf5());
	}

	/**
	 * Tests the setMontantBrut() method.
	 *
	 * @return void
	 */
	public function testSetMontantBrut() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBrut(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBrut());
	}

	/**
	 * Tests the setMontantBrut2() method.
	 *
	 * @return void
	 */
	public function testSetMontantBrut2() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBrut2(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBrut2());
	}

	/**
	 * Tests the setMontantBrut3() method.
	 *
	 * @return void
	 */
	public function testSetMontantBrut3() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBrut3(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBrut3());
	}

	/**
	 * Tests the setMontantBrut4() method.
	 *
	 * @return void
	 */
	public function testSetMontantBrut4() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBrut4(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBrut4());
	}

	/**
	 * Tests the setMontantBrut5() method.
	 *
	 * @return void
	 */
	public function testSetMontantBrut5() {

		$obj = new EmpDADSURectif();

		$obj->setMontantBrut5(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBrut5());
	}

	/**
	 * Tests the setMontantSommeIsolBrut() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolBrut() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolBrut(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
	}

	/**
	 * Tests the setMontantSommeIsolBrut2() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolBrut2() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolBrut2(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
	}

	/**
	 * Tests the setMontantSommeIsolBrut3() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolBrut3() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolBrut3(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
	}

	/**
	 * Tests the setMontantSommeIsolBrut4() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolBrut4() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolBrut4(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
	}

	/**
	 * Tests the setMontantSommeIsolBrut5() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolBrut5() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolBrut5(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
	}

	/**
	 * Tests the setMontantSommeIsolPlaf() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolPlaf() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolPlaf(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
	}

	/**
	 * Tests the setMontantSommeIsolPlaf2() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolPlaf2() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolPlaf2(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
	}

	/**
	 * Tests the setMontantSommeIsolPlaf3() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolPlaf3() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolPlaf3(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
	}

	/**
	 * Tests the setMontantSommeIsolPlaf4() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolPlaf4() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolPlaf4(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
	}

	/**
	 * Tests the setMontantSommeIsolPlaf5() method.
	 *
	 * @return void
	 */
	public function testSetMontantSommeIsolPlaf5() {

		$obj = new EmpDADSURectif();

		$obj->setMontantSommeIsolPlaf5(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new EmpDADSURectif();

		$obj->setNumero("numero");
		$this->assertEquals("numero", $obj->getNumero());
	}

	/**
	 * Tests the setNumeroOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroOrdre() {

		$obj = new EmpDADSURectif();

		$obj->setNumeroOrdre(10);
		$this->assertEquals(10, $obj->getNumeroOrdre());
	}

	/**
	 * Tests the setParticipPatronAvtge_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetParticipPatronAvtge_Mnt1() {

		$obj = new EmpDADSURectif();

		$obj->setParticipPatronAvtge_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getParticipPatronAvtge_Mnt1());
	}

	/**
	 * Tests the setParticipPatronAvtge_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetParticipPatronAvtge_Mnt2() {

		$obj = new EmpDADSURectif();

		$obj->setParticipPatronAvtge_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getParticipPatronAvtge_Mnt2());
	}

	/**
	 * Tests the setParticipServPers() method.
	 *
	 * @return void
	 */
	public function testSetParticipServPers() {

		$obj = new EmpDADSURectif();

		$obj->setParticipServPers(10.092018);
		$this->assertEquals(10.092018, $obj->getParticipServPers());
	}

	/**
	 * Tests the setTDS100() method.
	 *
	 * @return void
	 */
	public function testSetTDS100() {

		$obj = new EmpDADSURectif();

		$obj->setTDS100(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS100());
	}

	/**
	 * Tests the setTDS103() method.
	 *
	 * @return void
	 */
	public function testSetTDS103() {

		$obj = new EmpDADSURectif();

		$obj->setTDS103(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS103());
	}

	/**
	 * Tests the setTDS105() method.
	 *
	 * @return void
	 */
	public function testSetTDS105() {

		$obj = new EmpDADSURectif();

		$obj->setTDS105(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS105());
	}

	/**
	 * Tests the setTDS107() method.
	 *
	 * @return void
	 */
	public function testSetTDS107() {

		$obj = new EmpDADSURectif();

		$obj->setTDS107(true);
		$this->assertEquals(true, $obj->getTDS107());
	}

	/**
	 * Tests the setTDS108() method.
	 *
	 * @return void
	 */
	public function testSetTDS108() {

		$obj = new EmpDADSURectif();

		$obj->setTDS108(true);
		$this->assertEquals(true, $obj->getTDS108());
	}

	/**
	 * Tests the setTDS109() method.
	 *
	 * @return void
	 */
	public function testSetTDS109() {

		$obj = new EmpDADSURectif();

		$obj->setTDS109(true);
		$this->assertEquals(true, $obj->getTDS109());
	}

	/**
	 * Tests the setTDS110() method.
	 *
	 * @return void
	 */
	public function testSetTDS110() {

		$obj = new EmpDADSURectif();

		$obj->setTDS110(true);
		$this->assertEquals(true, $obj->getTDS110());
	}

	/**
	 * Tests the setTDS111() method.
	 *
	 * @return void
	 */
	public function testSetTDS111() {

		$obj = new EmpDADSURectif();

		$obj->setTDS111(true);
		$this->assertEquals(true, $obj->getTDS111());
	}

	/**
	 * Tests the setTDS112() method.
	 *
	 * @return void
	 */
	public function testSetTDS112() {

		$obj = new EmpDADSURectif();

		$obj->setTDS112(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS112());
	}

	/**
	 * Tests the setTDS113() method.
	 *
	 * @return void
	 */
	public function testSetTDS113() {

		$obj = new EmpDADSURectif();

		$obj->setTDS113(true);
		$this->assertEquals(true, $obj->getTDS113());
	}

	/**
	 * Tests the setTDS117() method.
	 *
	 * @return void
	 */
	public function testSetTDS117() {

		$obj = new EmpDADSURectif();

		$obj->setTDS117(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS117());
	}

	/**
	 * Tests the setTDS119() method.
	 *
	 * @return void
	 */
	public function testSetTDS119() {

		$obj = new EmpDADSURectif();

		$obj->setTDS119(true);
		$this->assertEquals(true, $obj->getTDS119());
	}

	/**
	 * Tests the setTDS120() method.
	 *
	 * @return void
	 */
	public function testSetTDS120() {

		$obj = new EmpDADSURectif();

		$obj->setTDS120(true);
		$this->assertEquals(true, $obj->getTDS120());
	}

	/**
	 * Tests the setTDS121() method.
	 *
	 * @return void
	 */
	public function testSetTDS121() {

		$obj = new EmpDADSURectif();

		$obj->setTDS121(true);
		$this->assertEquals(true, $obj->getTDS121());
	}

	/**
	 * Tests the setTDS122() method.
	 *
	 * @return void
	 */
	public function testSetTDS122() {

		$obj = new EmpDADSURectif();

		$obj->setTDS122(true);
		$this->assertEquals(true, $obj->getTDS122());
	}

	/**
	 * Tests the setTDS125() method.
	 *
	 * @return void
	 */
	public function testSetTDS125() {

		$obj = new EmpDADSURectif();

		$obj->setTDS125(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS125());
	}

	/**
	 * Tests the setTDS132() method.
	 *
	 * @return void
	 */
	public function testSetTDS132() {

		$obj = new EmpDADSURectif();

		$obj->setTDS132(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS132());
	}

	/**
	 * Tests the setTDS134() method.
	 *
	 * @return void
	 */
	public function testSetTDS134() {

		$obj = new EmpDADSURectif();

		$obj->setTDS134(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS134());
	}

	/**
	 * Tests the setTDS135() method.
	 *
	 * @return void
	 */
	public function testSetTDS135() {

		$obj = new EmpDADSURectif();

		$obj->setTDS135(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS135());
	}

	/**
	 * Tests the setTDS136() method.
	 *
	 * @return void
	 */
	public function testSetTDS136() {

		$obj = new EmpDADSURectif();

		$obj->setTDS136(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS136());
	}

	/**
	 * Tests the setTDS141() method.
	 *
	 * @return void
	 */
	public function testSetTDS141() {

		$obj = new EmpDADSURectif();

		$obj->setTDS141(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS141());
	}

	/**
	 * Tests the setTDS81() method.
	 *
	 * @return void
	 */
	public function testSetTDS81() {

		$obj = new EmpDADSURectif();

		$obj->setTDS81(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS81());
	}

	/**
	 * Tests the setTDS82() method.
	 *
	 * @return void
	 */
	public function testSetTDS82() {

		$obj = new EmpDADSURectif();

		$obj->setTDS82(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS82());
	}

	/**
	 * Tests the setTaxeSalaire() method.
	 *
	 * @return void
	 */
	public function testSetTaxeSalaire() {

		$obj = new EmpDADSURectif();

		$obj->setTaxeSalaire(10.092018);
		$this->assertEquals(10.092018, $obj->getTaxeSalaire());
	}

	/**
	 * Tests the setTds137() method.
	 *
	 * @return void
	 */
	public function testSetTds137() {

		$obj = new EmpDADSURectif();

		$obj->setTds137(10.092018);
		$this->assertEquals(10.092018, $obj->getTds137());
	}

	/**
	 * Tests the setTds142() method.
	 *
	 * @return void
	 */
	public function testSetTds142() {

		$obj = new EmpDADSURectif();

		$obj->setTds142(10.092018);
		$this->assertEquals(10.092018, $obj->getTds142());
	}

	/**
	 * Tests the setTdsAllocRetraite() method.
	 *
	 * @return void
	 */
	public function testSetTdsAllocRetraite() {

		$obj = new EmpDADSURectif();

		$obj->setTdsAllocRetraite(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
	}

	/**
	 * Tests the setTotalPlaf() method.
	 *
	 * @return void
	 */
	public function testSetTotalPlaf() {

		$obj = new EmpDADSURectif();

		$obj->setTotalPlaf(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalPlaf());
	}

}
