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
use WBW\Library\Core\Quadratus\Model\QGI\NotesFichiers;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Notes fichiers model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class NotesFichiersTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new NotesFichiers();

		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getNomFichier());
		$this->assertNull($obj->getNumNote());
		$this->assertNull($obj->getOrigineFichier());
		$this->assertNull($obj->getTitre());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new NotesFichiers();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setNomFichier() method.
	 *
	 * @return void
	 */
	public function testSetNomFichier() {

		$obj = new NotesFichiers();

		$obj->setNomFichier("nomFichier");
		$this->assertEquals("nomFichier", $obj->getNomFichier());
	}

	/**
	 * Tests the setNumNote() method.
	 *
	 * @return void
	 */
	public function testSetNumNote() {

		$obj = new NotesFichiers();

		$obj->setNumNote("numNote");
		$this->assertEquals("numNote", $obj->getNumNote());
	}

	/**
	 * Tests the setOrigineFichier() method.
	 *
	 * @return void
	 */
	public function testSetOrigineFichier() {

		$obj = new NotesFichiers();

		$obj->setOrigineFichier("origineFichier");
		$this->assertEquals("origineFichier", $obj->getOrigineFichier());
	}

	/**
	 * Tests the setTitre() method.
	 *
	 * @return void
	 */
	public function testSetTitre() {

		$obj = new NotesFichiers();

		$obj->setTitre("titre");
		$this->assertEquals("titre", $obj->getTitre());
	}

}
