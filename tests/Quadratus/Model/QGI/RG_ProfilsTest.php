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

use WBW\Library\Core\Quadratus\Model\QGI\RG_Profils;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * R g_ profils model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class RG_ProfilsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new RG_Profils();

		$this->assertNull($obj->getFichiers_Move());
		$this->assertNull($obj->getFichiers_PublierWeb());
		$this->assertNull($obj->getNiveau_Maxi());
		$this->assertNull($obj->getNiveau_Supplementaire_libelle());
		$this->assertNull($obj->getPath());
		$this->assertNull($obj->getPath_Format());
		$this->assertNull($obj->getUniqID());
	}

	/**
	 * Tests the setFichiers_Move() method.
	 *
	 * @return void
	 */
	public function testSetFichiers_Move() {

		$obj = new RG_Profils();

		$obj->setFichiers_Move("fichiers_Move");
		$this->assertEquals("fichiers_Move", $obj->getFichiers_Move());
	}

	/**
	 * Tests the setFichiers_PublierWeb() method.
	 *
	 * @return void
	 */
	public function testSetFichiers_PublierWeb() {

		$obj = new RG_Profils();

		$obj->setFichiers_PublierWeb("fichiers_PublierWeb");
		$this->assertEquals("fichiers_PublierWeb", $obj->getFichiers_PublierWeb());
	}

	/**
	 * Tests the setNiveau_Maxi() method.
	 *
	 * @return void
	 */
	public function testSetNiveau_Maxi() {

		$obj = new RG_Profils();

		$obj->setNiveau_Maxi("niveau_Maxi");
		$this->assertEquals("niveau_Maxi", $obj->getNiveau_Maxi());
	}

	/**
	 * Tests the setNiveau_Supplementaire_libelle() method.
	 *
	 * @return void
	 */
	public function testSetNiveau_Supplementaire_libelle() {

		$obj = new RG_Profils();

		$obj->setNiveau_Supplementaire_libelle(true);
		$this->assertEquals(true, $obj->getNiveau_Supplementaire_libelle());
	}

	/**
	 * Tests the setPath() method.
	 *
	 * @return void
	 */
	public function testSetPath() {

		$obj = new RG_Profils();

		$obj->setPath("path");
		$this->assertEquals("path", $obj->getPath());
	}

	/**
	 * Tests the setPath_Format() method.
	 *
	 * @return void
	 */
	public function testSetPath_Format() {

		$obj = new RG_Profils();

		$obj->setPath_Format("path_Format");
		$this->assertEquals("path_Format", $obj->getPath_Format());
	}

	/**
	 * Tests the setUniqID() method.
	 *
	 * @return void
	 */
	public function testSetUniqID() {

		$obj = new RG_Profils();

		$obj->setUniqID("uniqID");
		$this->assertEquals("uniqID", $obj->getUniqID());
	}

}
