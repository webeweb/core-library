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
use WBW\Library\Core\Quadratus\Model\QGI\Materiels;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Materiels model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class MaterielsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Materiels();

		$this->assertNull($obj->getCarTec());
		$this->assertNull($obj->getCategorie());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeIntervenant());
		$this->assertNull($obj->getCommentaire());
		$this->assertNull($obj->getDateAchat());
		$this->assertNull($obj->getDateFinUtil());
		$this->assertNull($obj->getIndiceAff());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getRefImage());
		$this->assertNull($obj->getSousCategorie());
	}

	/**
	 * Tests the setCarTec() method.
	 *
	 * @return void
	 */
	public function testSetCarTec() {

		$obj = new Materiels();

		$obj->setCarTec("carTec");
		$this->assertEquals("carTec", $obj->getCarTec());
	}

	/**
	 * Tests the setCategorie() method.
	 *
	 * @return void
	 */
	public function testSetCategorie() {

		$obj = new Materiels();

		$obj->setCategorie("categorie");
		$this->assertEquals("categorie", $obj->getCategorie());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Materiels();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeIntervenant() method.
	 *
	 * @return void
	 */
	public function testSetCodeIntervenant() {

		$obj = new Materiels();

		$obj->setCodeIntervenant("codeIntervenant");
		$this->assertEquals("codeIntervenant", $obj->getCodeIntervenant());
	}

	/**
	 * Tests the setCommentaire() method.
	 *
	 * @return void
	 */
	public function testSetCommentaire() {

		$obj = new Materiels();

		$obj->setCommentaire("commentaire");
		$this->assertEquals("commentaire", $obj->getCommentaire());
	}

	/**
	 * Tests the setDateAchat() method.
	 *
	 * @return void
	 */
	public function testSetDateAchat() {

		$obj = new Materiels();

		$obj->setDateAchat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAchat());
	}

	/**
	 * Tests the setDateFinUtil() method.
	 *
	 * @return void
	 */
	public function testSetDateFinUtil() {

		$obj = new Materiels();

		$obj->setDateFinUtil(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinUtil());
	}

	/**
	 * Tests the setIndiceAff() method.
	 *
	 * @return void
	 */
	public function testSetIndiceAff() {

		$obj = new Materiels();

		$obj->setIndiceAff(10);
		$this->assertEquals(10, $obj->getIndiceAff());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new Materiels();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setRefImage() method.
	 *
	 * @return void
	 */
	public function testSetRefImage() {

		$obj = new Materiels();

		$obj->setRefImage("refImage");
		$this->assertEquals("refImage", $obj->getRefImage());
	}

	/**
	 * Tests the setSousCategorie() method.
	 *
	 * @return void
	 */
	public function testSetSousCategorie() {

		$obj = new Materiels();

		$obj->setSousCategorie("sousCategorie");
		$this->assertEquals("sousCategorie", $obj->getSousCategorie());
	}

}
