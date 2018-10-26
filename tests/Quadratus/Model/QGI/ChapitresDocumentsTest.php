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

use WBW\Library\Core\Quadratus\Model\QGI\ChapitresDocuments;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chapitres documents model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ChapitresDocumentsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ChapitresDocuments();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getNomRepertoire());
		$this->assertNull($obj->getPosition());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new ChapitresDocuments();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setNomRepertoire() method.
	 *
	 * @return void
	 */
	public function testSetNomRepertoire() {

		$obj = new ChapitresDocuments();

		$obj->setNomRepertoire("nomRepertoire");
		$this->assertEquals("nomRepertoire", $obj->getNomRepertoire());
	}

	/**
	 * Tests the setPosition() method.
	 *
	 * @return void
	 */
	public function testSetPosition() {

		$obj = new ChapitresDocuments();

		$obj->setPosition(10);
		$this->assertEquals(10, $obj->getPosition());
	}

}
