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
use WBW\Library\Core\Quadratus\Model\QPaie\EmpTDSCalcul;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp t d s calcul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmpTDSCalculTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpTDSCalcul();

		$this->assertNull($obj->getBaseCalcTDS142());
		$this->assertNull($obj->getCodeATPer());
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
		$this->assertNull($obj->getTDS100());
		$this->assertNull($obj->getTDS102());
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
		$this->assertNull($obj->getTDS127());
		$this->assertNull($obj->getTDS128());
		$this->assertNull($obj->getTDS132());
		$this->assertNull($obj->getTDS133());
		$this->assertNull($obj->getTDS134());
		$this->assertNull($obj->getTDS135());
		$this->assertNull($obj->getTDS136());
		$this->assertNull($obj->getTDS137());
		$this->assertNull($obj->getTDS139());
		$this->assertNull($obj->getTDS141());
		$this->assertNull($obj->getTDS75());
		$this->assertNull($obj->getTDS77());
		$this->assertNull($obj->getTDS78());
		$this->assertNull($obj->getTDS81());
		$this->assertNull($obj->getTDS82());
		$this->assertNull($obj->getTDS84());
		$this->assertNull($obj->getTDS85());
		$this->assertNull($obj->getTDS86());
		$this->assertNull($obj->getTDS87());
		$this->assertNull($obj->getTDS88());
		$this->assertNull($obj->getTDS89());
		$this->assertNull($obj->getTDS90());
		$this->assertNull($obj->getTDS91());
		$this->assertNull($obj->getTDS92());
		$this->assertNull($obj->getTDS93());
		$this->assertNull($obj->getTDS94());
		$this->assertNull($obj->getTDS95());
		$this->assertNull($obj->getTDSSup120());
		$this->assertNull($obj->getTDSSup1200());
		$this->assertNull($obj->getTds142());
		$this->assertNull($obj->getTds142DejaCalcule());
		$this->assertNull($obj->getTdsAbattFraisPro());
		$this->assertNull($obj->getTdsAllocChom());
		$this->assertNull($obj->getTdsAllocComplIjss());
		$this->assertNull($obj->getTdsAllocRetraite());
		$this->assertNull($obj->getTdsContribCEChequesVac());
		$this->assertNull($obj->getTdsCumulN());
		$this->assertNull($obj->getTdsFlagRaz());
		$this->assertNull($obj->getTdsIndemnDepartRetraite());
		$this->assertNull($obj->getTdsIndemnImposables());
		$this->assertNull($obj->getTdsRembFraisPro());
		$this->assertNull($obj->getTdsSommeExoTaxeSal());
		$this->assertNull($obj->getTotalPlaf());
	}

	/**
	 * Tests the setBaseCalcTDS142() method.
	 *
	 * @return void
	 */
	public function testSetBaseCalcTDS142() {

		$obj = new EmpTDSCalcul();

		$obj->setBaseCalcTDS142(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseCalcTDS142());
	}

	/**
	 * Tests the setCodeATPer() method.
	 *
	 * @return void
	 */
	public function testSetCodeATPer() {

		$obj = new EmpTDSCalcul();

		$obj->setCodeATPer(10);
		$this->assertEquals(10, $obj->getCodeATPer());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new EmpTDSCalcul();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCumNetImpos() method.
	 *
	 * @return void
	 */
	public function testSetCumNetImpos() {

		$obj = new EmpTDSCalcul();

		$obj->setCumNetImpos(10.092018);
		$this->assertEquals(10.092018, $obj->getCumNetImpos());
	}

	/**
	 * Tests the setDebutPeriodeDecl() method.
	 *
	 * @return void
	 */
	public function testSetDebutPeriodeDecl() {

		$obj = new EmpTDSCalcul();

		$obj->setDebutPeriodeDecl(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriodeDecl());
	}

	/**
	 * Tests the setDernierePeriodeAnnee() method.
	 *
	 * @return void
	 */
	public function testSetDernierePeriodeAnnee() {

		$obj = new EmpTDSCalcul();

		$obj->setDernierePeriodeAnnee(true);
		$this->assertEquals(true, $obj->getDernierePeriodeAnnee());
	}

	/**
	 * Tests the setFinPeriodeDecl() method.
	 *
	 * @return void
	 */
	public function testSetFinPeriodeDecl() {

		$obj = new EmpTDSCalcul();

		$obj->setFinPeriodeDecl(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriodeDecl());
	}

	/**
	 * Tests the setIndemnImpat() method.
	 *
	 * @return void
	 */
	public function testSetIndemnImpat() {

		$obj = new EmpTDSCalcul();

		$obj->setIndemnImpat(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnImpat());
	}

	/**
	 * Tests the setMontantHSupComplExo() method.
	 *
	 * @return void
	 */
	public function testSetMontantHSupComplExo() {

		$obj = new EmpTDSCalcul();

		$obj->setMontantHSupComplExo(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantHSupComplExo());
	}

	/**
	 * Tests the setNbHeureSal() method.
	 *
	 * @return void
	 */
	public function testSetNbHeureSal() {

		$obj = new EmpTDSCalcul();

		$obj->setNbHeureSal(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeureSal());
	}

	/**
	 * Tests the setNbHeureTrav() method.
	 *
	 * @return void
	 */
	public function testSetNbHeureTrav() {

		$obj = new EmpTDSCalcul();

		$obj->setNbHeureTrav(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeureTrav());
	}

	/**
	 * Tests the setNbPerPaie() method.
	 *
	 * @return void
	 */
	public function testSetNbPerPaie() {

		$obj = new EmpTDSCalcul();

		$obj->setNbPerPaie(10);
		$this->assertEquals(10, $obj->getNbPerPaie());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new EmpTDSCalcul();

		$obj->setNumero("numero");
		$this->assertEquals("numero", $obj->getNumero());
	}

	/**
	 * Tests the setNumeroOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroOrdre() {

		$obj = new EmpTDSCalcul();

		$obj->setNumeroOrdre(10);
		$this->assertEquals(10, $obj->getNumeroOrdre());
	}

	/**
	 * Tests the setParticipServPers() method.
	 *
	 * @return void
	 */
	public function testSetParticipServPers() {

		$obj = new EmpTDSCalcul();

		$obj->setParticipServPers(10.092018);
		$this->assertEquals(10.092018, $obj->getParticipServPers());
	}

	/**
	 * Tests the setPremierePeriodeAnnee() method.
	 *
	 * @return void
	 */
	public function testSetPremierePeriodeAnnee() {

		$obj = new EmpTDSCalcul();

		$obj->setPremierePeriodeAnnee(true);
		$this->assertEquals(true, $obj->getPremierePeriodeAnnee());
	}

	/**
	 * Tests the setTDS100() method.
	 *
	 * @return void
	 */
	public function testSetTDS100() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS100(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS100());
	}

	/**
	 * Tests the setTDS102() method.
	 *
	 * @return void
	 */
	public function testSetTDS102() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS102(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS102());
	}

	/**
	 * Tests the setTDS103() method.
	 *
	 * @return void
	 */
	public function testSetTDS103() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS103(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS103());
	}

	/**
	 * Tests the setTDS105() method.
	 *
	 * @return void
	 */
	public function testSetTDS105() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS105(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS105());
	}

	/**
	 * Tests the setTDS107() method.
	 *
	 * @return void
	 */
	public function testSetTDS107() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS107(true);
		$this->assertEquals(true, $obj->getTDS107());
	}

	/**
	 * Tests the setTDS108() method.
	 *
	 * @return void
	 */
	public function testSetTDS108() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS108(true);
		$this->assertEquals(true, $obj->getTDS108());
	}

	/**
	 * Tests the setTDS109() method.
	 *
	 * @return void
	 */
	public function testSetTDS109() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS109(true);
		$this->assertEquals(true, $obj->getTDS109());
	}

	/**
	 * Tests the setTDS110() method.
	 *
	 * @return void
	 */
	public function testSetTDS110() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS110(true);
		$this->assertEquals(true, $obj->getTDS110());
	}

	/**
	 * Tests the setTDS111() method.
	 *
	 * @return void
	 */
	public function testSetTDS111() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS111(true);
		$this->assertEquals(true, $obj->getTDS111());
	}

	/**
	 * Tests the setTDS112() method.
	 *
	 * @return void
	 */
	public function testSetTDS112() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS112(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS112());
	}

	/**
	 * Tests the setTDS113() method.
	 *
	 * @return void
	 */
	public function testSetTDS113() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS113(true);
		$this->assertEquals(true, $obj->getTDS113());
	}

	/**
	 * Tests the setTDS117() method.
	 *
	 * @return void
	 */
	public function testSetTDS117() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS117(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS117());
	}

	/**
	 * Tests the setTDS119() method.
	 *
	 * @return void
	 */
	public function testSetTDS119() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS119(true);
		$this->assertEquals(true, $obj->getTDS119());
	}

	/**
	 * Tests the setTDS120() method.
	 *
	 * @return void
	 */
	public function testSetTDS120() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS120(true);
		$this->assertEquals(true, $obj->getTDS120());
	}

	/**
	 * Tests the setTDS121() method.
	 *
	 * @return void
	 */
	public function testSetTDS121() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS121(true);
		$this->assertEquals(true, $obj->getTDS121());
	}

	/**
	 * Tests the setTDS122() method.
	 *
	 * @return void
	 */
	public function testSetTDS122() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS122(true);
		$this->assertEquals(true, $obj->getTDS122());
	}

	/**
	 * Tests the setTDS125() method.
	 *
	 * @return void
	 */
	public function testSetTDS125() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS125(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS125());
	}

	/**
	 * Tests the setTDS127() method.
	 *
	 * @return void
	 */
	public function testSetTDS127() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS127(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS127());
	}

	/**
	 * Tests the setTDS128() method.
	 *
	 * @return void
	 */
	public function testSetTDS128() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS128("tDS128");
		$this->assertEquals("tDS128", $obj->getTDS128());
	}

	/**
	 * Tests the setTDS132() method.
	 *
	 * @return void
	 */
	public function testSetTDS132() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS132(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS132());
	}

	/**
	 * Tests the setTDS133() method.
	 *
	 * @return void
	 */
	public function testSetTDS133() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS133("tDS133");
		$this->assertEquals("tDS133", $obj->getTDS133());
	}

	/**
	 * Tests the setTDS134() method.
	 *
	 * @return void
	 */
	public function testSetTDS134() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS134(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS134());
	}

	/**
	 * Tests the setTDS135() method.
	 *
	 * @return void
	 */
	public function testSetTDS135() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS135(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS135());
	}

	/**
	 * Tests the setTDS136() method.
	 *
	 * @return void
	 */
	public function testSetTDS136() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS136(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS136());
	}

	/**
	 * Tests the setTDS137() method.
	 *
	 * @return void
	 */
	public function testSetTDS137() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS137(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS137());
	}

	/**
	 * Tests the setTDS139() method.
	 *
	 * @return void
	 */
	public function testSetTDS139() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS139("tDS139");
		$this->assertEquals("tDS139", $obj->getTDS139());
	}

	/**
	 * Tests the setTDS141() method.
	 *
	 * @return void
	 */
	public function testSetTDS141() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS141(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS141());
	}

	/**
	 * Tests the setTDS75() method.
	 *
	 * @return void
	 */
	public function testSetTDS75() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS75(10);
		$this->assertEquals(10, $obj->getTDS75());
	}

	/**
	 * Tests the setTDS77() method.
	 *
	 * @return void
	 */
	public function testSetTDS77() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS77("tDS77");
		$this->assertEquals("tDS77", $obj->getTDS77());
	}

	/**
	 * Tests the setTDS78() method.
	 *
	 * @return void
	 */
	public function testSetTDS78() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS78(true);
		$this->assertEquals(true, $obj->getTDS78());
	}

	/**
	 * Tests the setTDS81() method.
	 *
	 * @return void
	 */
	public function testSetTDS81() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS81(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS81());
	}

	/**
	 * Tests the setTDS82() method.
	 *
	 * @return void
	 */
	public function testSetTDS82() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS82(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS82());
	}

	/**
	 * Tests the setTDS84() method.
	 *
	 * @return void
	 */
	public function testSetTDS84() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS84(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS84());
	}

	/**
	 * Tests the setTDS85() method.
	 *
	 * @return void
	 */
	public function testSetTDS85() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS85(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS85());
	}

	/**
	 * Tests the setTDS86() method.
	 *
	 * @return void
	 */
	public function testSetTDS86() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS86(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS86());
	}

	/**
	 * Tests the setTDS87() method.
	 *
	 * @return void
	 */
	public function testSetTDS87() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS87(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS87());
	}

	/**
	 * Tests the setTDS88() method.
	 *
	 * @return void
	 */
	public function testSetTDS88() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS88(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS88());
	}

	/**
	 * Tests the setTDS89() method.
	 *
	 * @return void
	 */
	public function testSetTDS89() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS89(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS89());
	}

	/**
	 * Tests the setTDS90() method.
	 *
	 * @return void
	 */
	public function testSetTDS90() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS90(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS90());
	}

	/**
	 * Tests the setTDS91() method.
	 *
	 * @return void
	 */
	public function testSetTDS91() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS91(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS91());
	}

	/**
	 * Tests the setTDS92() method.
	 *
	 * @return void
	 */
	public function testSetTDS92() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS92(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS92());
	}

	/**
	 * Tests the setTDS93() method.
	 *
	 * @return void
	 */
	public function testSetTDS93() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS93(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS93());
	}

	/**
	 * Tests the setTDS94() method.
	 *
	 * @return void
	 */
	public function testSetTDS94() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS94(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS94());
	}

	/**
	 * Tests the setTDS95() method.
	 *
	 * @return void
	 */
	public function testSetTDS95() {

		$obj = new EmpTDSCalcul();

		$obj->setTDS95(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS95());
	}

	/**
	 * Tests the setTDSSup120() method.
	 *
	 * @return void
	 */
	public function testSetTDSSup120() {

		$obj = new EmpTDSCalcul();

		$obj->setTDSSup120("tDSSup120");
		$this->assertEquals("tDSSup120", $obj->getTDSSup120());
	}

	/**
	 * Tests the setTDSSup1200() method.
	 *
	 * @return void
	 */
	public function testSetTDSSup1200() {

		$obj = new EmpTDSCalcul();

		$obj->setTDSSup1200("tDSSup1200");
		$this->assertEquals("tDSSup1200", $obj->getTDSSup1200());
	}

	/**
	 * Tests the setTds142() method.
	 *
	 * @return void
	 */
	public function testSetTds142() {

		$obj = new EmpTDSCalcul();

		$obj->setTds142(10.092018);
		$this->assertEquals(10.092018, $obj->getTds142());
	}

	/**
	 * Tests the setTds142DejaCalcule() method.
	 *
	 * @return void
	 */
	public function testSetTds142DejaCalcule() {

		$obj = new EmpTDSCalcul();

		$obj->setTds142DejaCalcule(true);
		$this->assertEquals(true, $obj->getTds142DejaCalcule());
	}

	/**
	 * Tests the setTdsAbattFraisPro() method.
	 *
	 * @return void
	 */
	public function testSetTdsAbattFraisPro() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsAbattFraisPro(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsAbattFraisPro());
	}

	/**
	 * Tests the setTdsAllocChom() method.
	 *
	 * @return void
	 */
	public function testSetTdsAllocChom() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsAllocChom(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsAllocChom());
	}

	/**
	 * Tests the setTdsAllocComplIjss() method.
	 *
	 * @return void
	 */
	public function testSetTdsAllocComplIjss() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsAllocComplIjss(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsAllocComplIjss());
	}

	/**
	 * Tests the setTdsAllocRetraite() method.
	 *
	 * @return void
	 */
	public function testSetTdsAllocRetraite() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsAllocRetraite(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
	}

	/**
	 * Tests the setTdsContribCEChequesVac() method.
	 *
	 * @return void
	 */
	public function testSetTdsContribCEChequesVac() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsContribCEChequesVac(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsContribCEChequesVac());
	}

	/**
	 * Tests the setTdsCumulN() method.
	 *
	 * @return void
	 */
	public function testSetTdsCumulN() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsCumulN(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsCumulN());
	}

	/**
	 * Tests the setTdsFlagRaz() method.
	 *
	 * @return void
	 */
	public function testSetTdsFlagRaz() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsFlagRaz(10);
		$this->assertEquals(10, $obj->getTdsFlagRaz());
	}

	/**
	 * Tests the setTdsIndemnDepartRetraite() method.
	 *
	 * @return void
	 */
	public function testSetTdsIndemnDepartRetraite() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsIndemnDepartRetraite(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsIndemnDepartRetraite());
	}

	/**
	 * Tests the setTdsIndemnImposables() method.
	 *
	 * @return void
	 */
	public function testSetTdsIndemnImposables() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsIndemnImposables(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsIndemnImposables());
	}

	/**
	 * Tests the setTdsRembFraisPro() method.
	 *
	 * @return void
	 */
	public function testSetTdsRembFraisPro() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsRembFraisPro(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsRembFraisPro());
	}

	/**
	 * Tests the setTdsSommeExoTaxeSal() method.
	 *
	 * @return void
	 */
	public function testSetTdsSommeExoTaxeSal() {

		$obj = new EmpTDSCalcul();

		$obj->setTdsSommeExoTaxeSal(10.092018);
		$this->assertEquals(10.092018, $obj->getTdsSommeExoTaxeSal());
	}

	/**
	 * Tests the setTotalPlaf() method.
	 *
	 * @return void
	 */
	public function testSetTotalPlaf() {

		$obj = new EmpTDSCalcul();

		$obj->setTotalPlaf(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalPlaf());
	}

}
