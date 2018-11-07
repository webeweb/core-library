<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\PiecesJointes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Pieces jointes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class PiecesJointesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PiecesJointes();

		$this->assertNull($obj->getAPublierEspaceClient());
		$this->assertNull($obj->getAPublierWeb());
		$this->assertNull($obj->getArchive());
		$this->assertNull($obj->getAuteur());
		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getIndice());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getNbDocAttache());
		$this->assertNull($obj->getNomPiece());
		$this->assertNull($obj->getNumPiece());
	}

	/**
	 * Tests the setAPublierEspaceClient() method.
	 *
	 * @return void
	 */
	public function testSetAPublierEspaceClient() {

		$obj = new PiecesJointes();

		$obj->setAPublierEspaceClient(true);
		$this->assertEquals(true, $obj->getAPublierEspaceClient());
	}

	/**
	 * Tests the setAPublierWeb() method.
	 *
	 * @return void
	 */
	public function testSetAPublierWeb() {

		$obj = new PiecesJointes();

		$obj->setAPublierWeb(true);
		$this->assertEquals(true, $obj->getAPublierWeb());
	}

	/**
	 * Tests the setArchive() method.
	 *
	 * @return void
	 */
	public function testSetArchive() {

		$obj = new PiecesJointes();

		$obj->setArchive(true);
		$this->assertEquals(true, $obj->getArchive());
	}

	/**
	 * Tests the setAuteur() method.
	 *
	 * @return void
	 */
	public function testSetAuteur() {

		$obj = new PiecesJointes();

		$obj->setAuteur("auteur");
		$this->assertEquals("auteur", $obj->getAuteur());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new PiecesJointes();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setIndice() method.
	 *
	 * @return void
	 */
	public function testSetIndice() {

		$obj = new PiecesJointes();

		$obj->setIndice(10);
		$this->assertEquals(10, $obj->getIndice());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new PiecesJointes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNbDocAttache() method.
	 *
	 * @return void
	 */
	public function testSetNbDocAttache() {

		$obj = new PiecesJointes();

		$obj->setNbDocAttache(10);
		$this->assertEquals(10, $obj->getNbDocAttache());
	}

	/**
	 * Tests the setNomPiece() method.
	 *
	 * @return void
	 */
	public function testSetNomPiece() {

		$obj = new PiecesJointes();

		$obj->setNomPiece("nomPiece");
		$this->assertEquals("nomPiece", $obj->getNomPiece());
	}

	/**
	 * Tests the setNumPiece() method.
	 *
	 * @return void
	 */
	public function testSetNumPiece() {

		$obj = new PiecesJointes();

		$obj->setNumPiece(10);
		$this->assertEquals(10, $obj->getNumPiece());
	}

}
