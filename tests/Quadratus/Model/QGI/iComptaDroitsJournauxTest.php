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

use WBW\Library\Core\Quadratus\Model\QGI\iComptaDroitsJournaux;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * i compta droits journaux model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class iComptaDroitsJournauxTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new iComptaDroitsJournaux();

		$this->assertNull($obj->getCodeJournal());
		$this->assertNull($obj->getCodeUser());
		$this->assertNull($obj->getFlag());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getNoDossCpta());
	}

	/**
	 * Tests the setCodeJournal() method.
	 *
	 * @return void
	 */
	public function testSetCodeJournal() {

		$obj = new iComptaDroitsJournaux();

		$obj->setCodeJournal("codeJournal");
		$this->assertEquals("codeJournal", $obj->getCodeJournal());
	}

	/**
	 * Tests the setCodeUser() method.
	 *
	 * @return void
	 */
	public function testSetCodeUser() {

		$obj = new iComptaDroitsJournaux();

		$obj->setCodeUser("codeUser");
		$this->assertEquals("codeUser", $obj->getCodeUser());
	}

	/**
	 * Tests the setFlag() method.
	 *
	 * @return void
	 */
	public function testSetFlag() {

		$obj = new iComptaDroitsJournaux();

		$obj->setFlag("flag");
		$this->assertEquals("flag", $obj->getFlag());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new iComptaDroitsJournaux();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNoDossCpta() method.
	 *
	 * @return void
	 */
	public function testSetNoDossCpta() {

		$obj = new iComptaDroitsJournaux();

		$obj->setNoDossCpta("noDossCpta");
		$this->assertEquals("noDossCpta", $obj->getNoDossCpta());
	}

}
