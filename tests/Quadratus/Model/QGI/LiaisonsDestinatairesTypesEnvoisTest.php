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

use WBW\Library\Core\Quadratus\Model\QGI\LiaisonsDestinatairesTypesEnvois;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Liaisons destinataires types envois model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class LiaisonsDestinatairesTypesEnvoisTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LiaisonsDestinatairesTypesEnvois();

		$this->assertNull($obj->getCodeDestinataire());
		$this->assertNull($obj->getCodeTypeEnvoi());
	}

	/**
	 * Tests the setCodeDestinataire() method.
	 *
	 * @return void
	 */
	public function testSetCodeDestinataire() {

		$obj = new LiaisonsDestinatairesTypesEnvois();

		$obj->setCodeDestinataire("codeDestinataire");
		$this->assertEquals("codeDestinataire", $obj->getCodeDestinataire());
	}

	/**
	 * Tests the setCodeTypeEnvoi() method.
	 *
	 * @return void
	 */
	public function testSetCodeTypeEnvoi() {

		$obj = new LiaisonsDestinatairesTypesEnvois();

		$obj->setCodeTypeEnvoi("codeTypeEnvoi");
		$this->assertEquals("codeTypeEnvoi", $obj->getCodeTypeEnvoi());
	}

}
