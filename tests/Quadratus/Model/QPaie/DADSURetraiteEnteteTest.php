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

use WBW\Library\Core\Quadratus\Model\QPaie\DADSURetraiteEntete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u retraite entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class DADSURetraiteEnteteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DADSURetraiteEntete();

		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getMailContact());
		$this->assertNull($obj->getNomContact());
		$this->assertNull($obj->getTelContact());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new DADSURetraiteEntete();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new DADSURetraiteEntete();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new DADSURetraiteEntete();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setMailContact() method.
	 *
	 * @return void
	 */
	public function testSetMailContact() {

		$obj = new DADSURetraiteEntete();

		$obj->setMailContact("mailContact");
		$this->assertEquals("mailContact", $obj->getMailContact());
	}

	/**
	 * Tests the setNomContact() method.
	 *
	 * @return void
	 */
	public function testSetNomContact() {

		$obj = new DADSURetraiteEntete();

		$obj->setNomContact("nomContact");
		$this->assertEquals("nomContact", $obj->getNomContact());
	}

	/**
	 * Tests the setTelContact() method.
	 *
	 * @return void
	 */
	public function testSetTelContact() {

		$obj = new DADSURetraiteEntete();

		$obj->setTelContact("telContact");
		$this->assertEquals("telContact", $obj->getTelContact());
	}

}
