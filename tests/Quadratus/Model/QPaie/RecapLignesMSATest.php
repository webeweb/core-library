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
use WBW\Library\Core\Quadratus\Model\QPaie\RecapLignesMSA;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Recap lignes m s a model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class RecapLignesMSATest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new RecapLignesMSA();

		$this->assertNull($obj->getAdresseMSA());
		$this->assertNull($obj->getCCollect());
		$this->assertNull($obj->getCodeActivite());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeUnite());
		$this->assertNull($obj->getDateReglement());
		$this->assertNull($obj->getEffectifCICE());
		$this->assertNull($obj->getFaitA());
		$this->assertNull($obj->getFaitLe());
		$this->assertNull($obj->getFinPer());
		$this->assertNull($obj->getIntituleCodeUnite());
		$this->assertNull($obj->getListeServices());
		$this->assertNull($obj->getMtCSG());
		$this->assertNull($obj->getMtCSGRDSRRImp());
		$this->assertNull($obj->getMtCSGRDSRRNonImp());
		$this->assertNull($obj->getMtElemCalcul57());
		$this->assertNull($obj->getMtElemCalcul58());
		$this->assertNull($obj->getMtElemCalcul59());
		$this->assertNull($obj->getMtElemCalcul60());
		$this->assertNull($obj->getMtElemCalcul61());
		$this->assertNull($obj->getMtElemCalcul62());
		$this->assertNull($obj->getMtElemCalcul63());
		$this->assertNull($obj->getMtElemCalcul65());
		$this->assertNull($obj->getMtElemCalcul66());
		$this->assertNull($obj->getMtElemCalcul67());
		$this->assertNull($obj->getMtElemCalcul68());
		$this->assertNull($obj->getMtElemCalcul69());
		$this->assertNull($obj->getMtElemCalcul70());
		$this->assertNull($obj->getMtElemCalcul71());
		$this->assertNull($obj->getMtElemCalcul72());
		$this->assertNull($obj->getMtElemCalcul73());
		$this->assertNull($obj->getMtElemCalcul74());
		$this->assertNull($obj->getMtElemCalcul75());
		$this->assertNull($obj->getMtElemCalcul76());
		$this->assertNull($obj->getMtElemCalcul77());
		$this->assertNull($obj->getMtElemCalcul78());
		$this->assertNull($obj->getMtElemCalcul79());
		$this->assertNull($obj->getMtElemCalcul97());
		$this->assertNull($obj->getMtElemCalcul98());
		$this->assertNull($obj->getMtTCP());
		$this->assertNull($obj->getPerDebCICE());
		$this->assertNull($obj->getPerFinCICE());
		$this->assertNull($obj->getPeriodeDecla());
		$this->assertNull($obj->getPersonneContact());
		$this->assertNull($obj->getPremMois());
		$this->assertNull($obj->getSIREN());
		$this->assertNull($obj->getSIRET());
		$this->assertNull($obj->getSalariesDe());
		$this->assertNull($obj->getSelectionService());
		$this->assertNull($obj->getSuiviPar());
		$this->assertNull($obj->getTelPersonne());
		$this->assertNull($obj->getTriDeclMSA());
	}

	/**
	 * Tests the setAdresseMSA() method.
	 *
	 * @return void
	 */
	public function testSetAdresseMSA() {

		$obj = new RecapLignesMSA();

		$obj->setAdresseMSA("adresseMSA");
		$this->assertEquals("adresseMSA", $obj->getAdresseMSA());
	}

	/**
	 * Tests the setCCollect() method.
	 *
	 * @return void
	 */
	public function testSetCCollect() {

		$obj = new RecapLignesMSA();

		$obj->setCCollect("cCollect");
		$this->assertEquals("cCollect", $obj->getCCollect());
	}

	/**
	 * Tests the setCodeActivite() method.
	 *
	 * @return void
	 */
	public function testSetCodeActivite() {

		$obj = new RecapLignesMSA();

		$obj->setCodeActivite("codeActivite");
		$this->assertEquals("codeActivite", $obj->getCodeActivite());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new RecapLignesMSA();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeUnite() method.
	 *
	 * @return void
	 */
	public function testSetCodeUnite() {

		$obj = new RecapLignesMSA();

		$obj->setCodeUnite("codeUnite");
		$this->assertEquals("codeUnite", $obj->getCodeUnite());
	}

	/**
	 * Tests the setDateReglement() method.
	 *
	 * @return void
	 */
	public function testSetDateReglement() {

		$obj = new RecapLignesMSA();

		$obj->setDateReglement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReglement());
	}

	/**
	 * Tests the setEffectifCICE() method.
	 *
	 * @return void
	 */
	public function testSetEffectifCICE() {

		$obj = new RecapLignesMSA();

		$obj->setEffectifCICE(10);
		$this->assertEquals(10, $obj->getEffectifCICE());
	}

	/**
	 * Tests the setFaitA() method.
	 *
	 * @return void
	 */
	public function testSetFaitA() {

		$obj = new RecapLignesMSA();

		$obj->setFaitA("faitA");
		$this->assertEquals("faitA", $obj->getFaitA());
	}

	/**
	 * Tests the setFaitLe() method.
	 *
	 * @return void
	 */
	public function testSetFaitLe() {

		$obj = new RecapLignesMSA();

		$obj->setFaitLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFaitLe());
	}

	/**
	 * Tests the setFinPer() method.
	 *
	 * @return void
	 */
	public function testSetFinPer() {

		$obj = new RecapLignesMSA();

		$obj->setFinPer(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPer());
	}

	/**
	 * Tests the setIntituleCodeUnite() method.
	 *
	 * @return void
	 */
	public function testSetIntituleCodeUnite() {

		$obj = new RecapLignesMSA();

		$obj->setIntituleCodeUnite("intituleCodeUnite");
		$this->assertEquals("intituleCodeUnite", $obj->getIntituleCodeUnite());
	}

	/**
	 * Tests the setListeServices() method.
	 *
	 * @return void
	 */
	public function testSetListeServices() {

		$obj = new RecapLignesMSA();

		$obj->setListeServices("listeServices");
		$this->assertEquals("listeServices", $obj->getListeServices());
	}

	/**
	 * Tests the setMtCSG() method.
	 *
	 * @return void
	 */
	public function testSetMtCSG() {

		$obj = new RecapLignesMSA();

		$obj->setMtCSG(10);
		$this->assertEquals(10, $obj->getMtCSG());
	}

	/**
	 * Tests the setMtCSGRDSRRImp() method.
	 *
	 * @return void
	 */
	public function testSetMtCSGRDSRRImp() {

		$obj = new RecapLignesMSA();

		$obj->setMtCSGRDSRRImp(10);
		$this->assertEquals(10, $obj->getMtCSGRDSRRImp());
	}

	/**
	 * Tests the setMtCSGRDSRRNonImp() method.
	 *
	 * @return void
	 */
	public function testSetMtCSGRDSRRNonImp() {

		$obj = new RecapLignesMSA();

		$obj->setMtCSGRDSRRNonImp(10);
		$this->assertEquals(10, $obj->getMtCSGRDSRRNonImp());
	}

	/**
	 * Tests the setMtElemCalcul57() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul57() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul57(10);
		$this->assertEquals(10, $obj->getMtElemCalcul57());
	}

	/**
	 * Tests the setMtElemCalcul58() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul58() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul58(10);
		$this->assertEquals(10, $obj->getMtElemCalcul58());
	}

	/**
	 * Tests the setMtElemCalcul59() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul59() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul59(10);
		$this->assertEquals(10, $obj->getMtElemCalcul59());
	}

	/**
	 * Tests the setMtElemCalcul60() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul60() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul60(10);
		$this->assertEquals(10, $obj->getMtElemCalcul60());
	}

	/**
	 * Tests the setMtElemCalcul61() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul61() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul61(10);
		$this->assertEquals(10, $obj->getMtElemCalcul61());
	}

	/**
	 * Tests the setMtElemCalcul62() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul62() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul62(10);
		$this->assertEquals(10, $obj->getMtElemCalcul62());
	}

	/**
	 * Tests the setMtElemCalcul63() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul63() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul63(10);
		$this->assertEquals(10, $obj->getMtElemCalcul63());
	}

	/**
	 * Tests the setMtElemCalcul65() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul65() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul65(10);
		$this->assertEquals(10, $obj->getMtElemCalcul65());
	}

	/**
	 * Tests the setMtElemCalcul66() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul66() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul66(10);
		$this->assertEquals(10, $obj->getMtElemCalcul66());
	}

	/**
	 * Tests the setMtElemCalcul67() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul67() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul67(10);
		$this->assertEquals(10, $obj->getMtElemCalcul67());
	}

	/**
	 * Tests the setMtElemCalcul68() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul68() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul68(10);
		$this->assertEquals(10, $obj->getMtElemCalcul68());
	}

	/**
	 * Tests the setMtElemCalcul69() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul69() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul69(10);
		$this->assertEquals(10, $obj->getMtElemCalcul69());
	}

	/**
	 * Tests the setMtElemCalcul70() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul70() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul70(10);
		$this->assertEquals(10, $obj->getMtElemCalcul70());
	}

	/**
	 * Tests the setMtElemCalcul71() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul71() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul71(10);
		$this->assertEquals(10, $obj->getMtElemCalcul71());
	}

	/**
	 * Tests the setMtElemCalcul72() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul72() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul72(10);
		$this->assertEquals(10, $obj->getMtElemCalcul72());
	}

	/**
	 * Tests the setMtElemCalcul73() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul73() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul73(10);
		$this->assertEquals(10, $obj->getMtElemCalcul73());
	}

	/**
	 * Tests the setMtElemCalcul74() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul74() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul74(10);
		$this->assertEquals(10, $obj->getMtElemCalcul74());
	}

	/**
	 * Tests the setMtElemCalcul75() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul75() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul75(10);
		$this->assertEquals(10, $obj->getMtElemCalcul75());
	}

	/**
	 * Tests the setMtElemCalcul76() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul76() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul76(10);
		$this->assertEquals(10, $obj->getMtElemCalcul76());
	}

	/**
	 * Tests the setMtElemCalcul77() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul77() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul77(10);
		$this->assertEquals(10, $obj->getMtElemCalcul77());
	}

	/**
	 * Tests the setMtElemCalcul78() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul78() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul78(10);
		$this->assertEquals(10, $obj->getMtElemCalcul78());
	}

	/**
	 * Tests the setMtElemCalcul79() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul79() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul79(10);
		$this->assertEquals(10, $obj->getMtElemCalcul79());
	}

	/**
	 * Tests the setMtElemCalcul97() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul97() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul97(10);
		$this->assertEquals(10, $obj->getMtElemCalcul97());
	}

	/**
	 * Tests the setMtElemCalcul98() method.
	 *
	 * @return void
	 */
	public function testSetMtElemCalcul98() {

		$obj = new RecapLignesMSA();

		$obj->setMtElemCalcul98(10);
		$this->assertEquals(10, $obj->getMtElemCalcul98());
	}

	/**
	 * Tests the setMtTCP() method.
	 *
	 * @return void
	 */
	public function testSetMtTCP() {

		$obj = new RecapLignesMSA();

		$obj->setMtTCP(10);
		$this->assertEquals(10, $obj->getMtTCP());
	}

	/**
	 * Tests the setPerDebCICE() method.
	 *
	 * @return void
	 */
	public function testSetPerDebCICE() {

		$obj = new RecapLignesMSA();

		$obj->setPerDebCICE(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDebCICE());
	}

	/**
	 * Tests the setPerFinCICE() method.
	 *
	 * @return void
	 */
	public function testSetPerFinCICE() {

		$obj = new RecapLignesMSA();

		$obj->setPerFinCICE(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPerFinCICE());
	}

	/**
	 * Tests the setPeriodeDecla() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDecla() {

		$obj = new RecapLignesMSA();

		$obj->setPeriodeDecla(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
	}

	/**
	 * Tests the setPersonneContact() method.
	 *
	 * @return void
	 */
	public function testSetPersonneContact() {

		$obj = new RecapLignesMSA();

		$obj->setPersonneContact("personneContact");
		$this->assertEquals("personneContact", $obj->getPersonneContact());
	}

	/**
	 * Tests the setPremMois() method.
	 *
	 * @return void
	 */
	public function testSetPremMois() {

		$obj = new RecapLignesMSA();

		$obj->setPremMois(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPremMois());
	}

	/**
	 * Tests the setSIREN() method.
	 *
	 * @return void
	 */
	public function testSetSIREN() {

		$obj = new RecapLignesMSA();

		$obj->setSIREN("sIREN");
		$this->assertEquals("sIREN", $obj->getSIREN());
	}

	/**
	 * Tests the setSIRET() method.
	 *
	 * @return void
	 */
	public function testSetSIRET() {

		$obj = new RecapLignesMSA();

		$obj->setSIRET("sIRET");
		$this->assertEquals("sIRET", $obj->getSIRET());
	}

	/**
	 * Tests the setSalariesDe() method.
	 *
	 * @return void
	 */
	public function testSetSalariesDe() {

		$obj = new RecapLignesMSA();

		$obj->setSalariesDe("salariesDe");
		$this->assertEquals("salariesDe", $obj->getSalariesDe());
	}

	/**
	 * Tests the setSelectionService() method.
	 *
	 * @return void
	 */
	public function testSetSelectionService() {

		$obj = new RecapLignesMSA();

		$obj->setSelectionService("selectionService");
		$this->assertEquals("selectionService", $obj->getSelectionService());
	}

	/**
	 * Tests the setSuiviPar() method.
	 *
	 * @return void
	 */
	public function testSetSuiviPar() {

		$obj = new RecapLignesMSA();

		$obj->setSuiviPar("suiviPar");
		$this->assertEquals("suiviPar", $obj->getSuiviPar());
	}

	/**
	 * Tests the setTelPersonne() method.
	 *
	 * @return void
	 */
	public function testSetTelPersonne() {

		$obj = new RecapLignesMSA();

		$obj->setTelPersonne("telPersonne");
		$this->assertEquals("telPersonne", $obj->getTelPersonne());
	}

	/**
	 * Tests the setTriDeclMSA() method.
	 *
	 * @return void
	 */
	public function testSetTriDeclMSA() {

		$obj = new RecapLignesMSA();

		$obj->setTriDeclMSA("triDeclMSA");
		$this->assertEquals("triDeclMSA", $obj->getTriDeclMSA());
	}

}
