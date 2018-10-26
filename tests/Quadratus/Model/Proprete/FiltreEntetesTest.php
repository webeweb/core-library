<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use WBW\Library\Core\Quadratus\Model\Proprete\FiltreEntetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Filtre entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class FiltreEntetesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new FiltreEntetes();

		$this->assertNull($obj->getCodeFiltre());
		$this->assertNull($obj->getCollaborateur());
		$this->assertNull($obj->getCommercialFacture());
		$this->assertNull($obj->getFonctionnalite());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getTypeFiltre());
		$this->assertNull($obj->getUniqID());
	}

	/**
	 * Tests the setCodeFiltre() method.
	 *
	 * @return void
	 */
	public function testSetCodeFiltre() {

		$obj = new FiltreEntetes();

		$obj->setCodeFiltre("codeFiltre");
		$this->assertEquals("codeFiltre", $obj->getCodeFiltre());
	}

	/**
	 * Tests the setCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCollaborateur() {

		$obj = new FiltreEntetes();

		$obj->setCollaborateur("collaborateur");
		$this->assertEquals("collaborateur", $obj->getCollaborateur());
	}

	/**
	 * Tests the setCommercialFacture() method.
	 *
	 * @return void
	 */
	public function testSetCommercialFacture() {

		$obj = new FiltreEntetes();

		$obj->setCommercialFacture(true);
		$this->assertEquals(true, $obj->getCommercialFacture());
	}

	/**
	 * Tests the setFonctionnalite() method.
	 *
	 * @return void
	 */
	public function testSetFonctionnalite() {

		$obj = new FiltreEntetes();

		$obj->setFonctionnalite("fonctionnalite");
		$this->assertEquals("fonctionnalite", $obj->getFonctionnalite());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new FiltreEntetes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setTypeFiltre() method.
	 *
	 * @return void
	 */
	public function testSetTypeFiltre() {

		$obj = new FiltreEntetes();

		$obj->setTypeFiltre("typeFiltre");
		$this->assertEquals("typeFiltre", $obj->getTypeFiltre());
	}

	/**
	 * Tests the setUniqID() method.
	 *
	 * @return void
	 */
	public function testSetUniqID() {

		$obj = new FiltreEntetes();

		$obj->setUniqID("uniqID");
		$this->assertEquals("uniqID", $obj->getUniqID());
	}

}
