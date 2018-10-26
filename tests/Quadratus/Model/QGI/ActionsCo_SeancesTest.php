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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\ActionsCo_Seances;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Actions co_ seances model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ActionsCo_SeancesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ActionsCo_Seances();

		$this->assertNull($obj->getCodeAction());
		$this->assertNull($obj->getCodeManif());
		$this->assertNull($obj->getDateSeance());
		$this->assertNull($obj->getHeureDeb());
		$this->assertNull($obj->getHeureFin());
		$this->assertNull($obj->getLibelleSeance());
		$this->assertNull($obj->getNumSeance());
	}

	/**
	 * Tests the setCodeAction() method.
	 *
	 * @return void
	 */
	public function testSetCodeAction() {

		$obj = new ActionsCo_Seances();

		$obj->setCodeAction("codeAction");
		$this->assertEquals("codeAction", $obj->getCodeAction());
	}

	/**
	 * Tests the setCodeManif() method.
	 *
	 * @return void
	 */
	public function testSetCodeManif() {

		$obj = new ActionsCo_Seances();

		$obj->setCodeManif("codeManif");
		$this->assertEquals("codeManif", $obj->getCodeManif());
	}

	/**
	 * Tests the setDateSeance() method.
	 *
	 * @return void
	 */
	public function testSetDateSeance() {

		$obj = new ActionsCo_Seances();

		$obj->setDateSeance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSeance());
	}

	/**
	 * Tests the setHeureDeb() method.
	 *
	 * @return void
	 */
	public function testSetHeureDeb() {

		$obj = new ActionsCo_Seances();

		$obj->setHeureDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
	}

	/**
	 * Tests the setHeureFin() method.
	 *
	 * @return void
	 */
	public function testSetHeureFin() {

		$obj = new ActionsCo_Seances();

		$obj->setHeureFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureFin());
	}

	/**
	 * Tests the setLibelleSeance() method.
	 *
	 * @return void
	 */
	public function testSetLibelleSeance() {

		$obj = new ActionsCo_Seances();

		$obj->setLibelleSeance("libelleSeance");
		$this->assertEquals("libelleSeance", $obj->getLibelleSeance());
	}

	/**
	 * Tests the setNumSeance() method.
	 *
	 * @return void
	 */
	public function testSetNumSeance() {

		$obj = new ActionsCo_Seances();

		$obj->setNumSeance(10);
		$this->assertEquals(10, $obj->getNumSeance());
	}

}
