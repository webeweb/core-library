<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\ParamEtiquettes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Param etiquettes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ParamEtiquettesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ParamEtiquettes();

		$this->assertNull($obj->getAvecCodeBarre());
		$this->assertNull($obj->getAvecPrixVente());
		$this->assertNull($obj->getCodeModele());
		$this->assertNull($obj->getEtiqDeFront());
		$this->assertNull($obj->getEtiqMasque());
		$this->assertNull($obj->getEtiqPlus());
		$this->assertNull($obj->getImprimante());
		$this->assertNull($obj->getInitChamp());
		$this->assertNull($obj->getInitTable());
		$this->assertNull($obj->getInitValeur());
		$this->assertNull($obj->getLgZone());
		$this->assertNull($obj->getLibZone());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getNumeroLigne());
		$this->assertNull($obj->getQteEnt());
		$this->assertNull($obj->getType());
	}

	/**
	 * Tests the setAvecCodeBarre() method.
	 *
	 * @return void
	 */
	public function testSetAvecCodeBarre() {

		$obj = new ParamEtiquettes();

		$obj->setAvecCodeBarre(true);
		$this->assertEquals(true, $obj->getAvecCodeBarre());
	}

	/**
	 * Tests the setAvecPrixVente() method.
	 *
	 * @return void
	 */
	public function testSetAvecPrixVente() {

		$obj = new ParamEtiquettes();

		$obj->setAvecPrixVente(true);
		$this->assertEquals(true, $obj->getAvecPrixVente());
	}

	/**
	 * Tests the setCodeModele() method.
	 *
	 * @return void
	 */
	public function testSetCodeModele() {

		$obj = new ParamEtiquettes();

		$obj->setCodeModele("codeModele");
		$this->assertEquals("codeModele", $obj->getCodeModele());
	}

	/**
	 * Tests the setEtiqDeFront() method.
	 *
	 * @return void
	 */
	public function testSetEtiqDeFront() {

		$obj = new ParamEtiquettes();

		$obj->setEtiqDeFront(10);
		$this->assertEquals(10, $obj->getEtiqDeFront());
	}

	/**
	 * Tests the setEtiqMasque() method.
	 *
	 * @return void
	 */
	public function testSetEtiqMasque() {

		$obj = new ParamEtiquettes();

		$obj->setEtiqMasque(true);
		$this->assertEquals(true, $obj->getEtiqMasque());
	}

	/**
	 * Tests the setEtiqPlus() method.
	 *
	 * @return void
	 */
	public function testSetEtiqPlus() {

		$obj = new ParamEtiquettes();

		$obj->setEtiqPlus(true);
		$this->assertEquals(true, $obj->getEtiqPlus());
	}

	/**
	 * Tests the setImprimante() method.
	 *
	 * @return void
	 */
	public function testSetImprimante() {

		$obj = new ParamEtiquettes();

		$obj->setImprimante("imprimante");
		$this->assertEquals("imprimante", $obj->getImprimante());
	}

	/**
	 * Tests the setInitChamp() method.
	 *
	 * @return void
	 */
	public function testSetInitChamp() {

		$obj = new ParamEtiquettes();

		$obj->setInitChamp("initChamp");
		$this->assertEquals("initChamp", $obj->getInitChamp());
	}

	/**
	 * Tests the setInitTable() method.
	 *
	 * @return void
	 */
	public function testSetInitTable() {

		$obj = new ParamEtiquettes();

		$obj->setInitTable("initTable");
		$this->assertEquals("initTable", $obj->getInitTable());
	}

	/**
	 * Tests the setInitValeur() method.
	 *
	 * @return void
	 */
	public function testSetInitValeur() {

		$obj = new ParamEtiquettes();

		$obj->setInitValeur("initValeur");
		$this->assertEquals("initValeur", $obj->getInitValeur());
	}

	/**
	 * Tests the setLgZone() method.
	 *
	 * @return void
	 */
	public function testSetLgZone() {

		$obj = new ParamEtiquettes();

		$obj->setLgZone("lgZone");
		$this->assertEquals("lgZone", $obj->getLgZone());
	}

	/**
	 * Tests the setLibZone() method.
	 *
	 * @return void
	 */
	public function testSetLibZone() {

		$obj = new ParamEtiquettes();

		$obj->setLibZone("libZone");
		$this->assertEquals("libZone", $obj->getLibZone());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new ParamEtiquettes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNumeroLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumeroLigne() {

		$obj = new ParamEtiquettes();

		$obj->setNumeroLigne(10);
		$this->assertEquals(10, $obj->getNumeroLigne());
	}

	/**
	 * Tests the setQteEnt() method.
	 *
	 * @return void
	 */
	public function testSetQteEnt() {

		$obj = new ParamEtiquettes();

		$obj->setQteEnt(true);
		$this->assertEquals(true, $obj->getQteEnt());
	}

	/**
	 * Tests the setType() method.
	 *
	 * @return void
	 */
	public function testSetType() {

		$obj = new ParamEtiquettes();

		$obj->setType("type");
		$this->assertEquals("type", $obj->getType());
	}

}
