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
use WBW\Library\Core\Quadratus\Model\QGI\AgendaNoteDuJour;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Agenda note du jour model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class AgendaNoteDuJourTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AgendaNoteDuJour();

		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getCommentaire());
		$this->assertNull($obj->getDateModif());
		$this->assertNull($obj->getJour());
		$this->assertNull($obj->getMaJExterne());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new AgendaNoteDuJour();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCommentaire() method.
	 *
	 * @return void
	 */
	public function testSetCommentaire() {

		$obj = new AgendaNoteDuJour();

		$obj->setCommentaire("commentaire");
		$this->assertEquals("commentaire", $obj->getCommentaire());
	}

	/**
	 * Tests the setDateModif() method.
	 *
	 * @return void
	 */
	public function testSetDateModif() {

		$obj = new AgendaNoteDuJour();

		$obj->setDateModif(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
	}

	/**
	 * Tests the setJour() method.
	 *
	 * @return void
	 */
	public function testSetJour() {

		$obj = new AgendaNoteDuJour();

		$obj->setJour(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getJour());
	}

	/**
	 * Tests the setMaJExterne() method.
	 *
	 * @return void
	 */
	public function testSetMaJExterne() {

		$obj = new AgendaNoteDuJour();

		$obj->setMaJExterne(true);
		$this->assertEquals(true, $obj->getMaJExterne());
	}

}
