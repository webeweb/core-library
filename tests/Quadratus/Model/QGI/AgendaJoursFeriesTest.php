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
use WBW\Library\Core\Quadratus\Model\QGI\AgendaJoursFeries;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Agenda jours feries model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class AgendaJoursFeriesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AgendaJoursFeries();

		$this->assertNull($obj->getCalculee());
		$this->assertNull($obj->getDateFeriee());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getType());
	}

	/**
	 * Tests the setCalculee() method.
	 *
	 * @return void
	 */
	public function testSetCalculee() {

		$obj = new AgendaJoursFeries();

		$obj->setCalculee(true);
		$this->assertEquals(true, $obj->getCalculee());
	}

	/**
	 * Tests the setDateFeriee() method.
	 *
	 * @return void
	 */
	public function testSetDateFeriee() {

		$obj = new AgendaJoursFeries();

		$obj->setDateFeriee(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFeriee());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new AgendaJoursFeries();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setType() method.
	 *
	 * @return void
	 */
	public function testSetType() {

		$obj = new AgendaJoursFeries();

		$obj->setType("type");
		$this->assertEquals("type", $obj->getType());
	}

}
