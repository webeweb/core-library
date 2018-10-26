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

use WBW\Library\Core\Quadratus\Model\QGI\AgendaDroitsAcces;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Agenda droits acces model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class AgendaDroitsAccesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AgendaDroitsAcces();

		$this->assertNull($obj->getCodeCollDroit());
		$this->assertNull($obj->getCodeCollSuivi());
		$this->assertNull($obj->getNiveauDroit());
	}

	/**
	 * Tests the setCodeCollDroit() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollDroit() {

		$obj = new AgendaDroitsAcces();

		$obj->setCodeCollDroit("codeCollDroit");
		$this->assertEquals("codeCollDroit", $obj->getCodeCollDroit());
	}

	/**
	 * Tests the setCodeCollSuivi() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollSuivi() {

		$obj = new AgendaDroitsAcces();

		$obj->setCodeCollSuivi("codeCollSuivi");
		$this->assertEquals("codeCollSuivi", $obj->getCodeCollSuivi());
	}

	/**
	 * Tests the setNiveauDroit() method.
	 *
	 * @return void
	 */
	public function testSetNiveauDroit() {

		$obj = new AgendaDroitsAcces();

		$obj->setNiveauDroit("niveauDroit");
		$this->assertEquals("niveauDroit", $obj->getNiveauDroit());
	}

}
