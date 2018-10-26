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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\Documents;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Documents model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class DocumentsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Documents();

		$this->assertNull($obj->getAnnee());
		$this->assertNull($obj->getAuteur());
		$this->assertNull($obj->getChapitre());
		$this->assertNull($obj->getChrono());
		$this->assertNull($obj->getCodeNature());
		$this->assertNull($obj->getDateHeureSys());
		$this->assertNull($obj->getDateModification());
		$this->assertNull($obj->getIndiceBulletin());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriodeArchivage());
		$this->assertNull($obj->getPublierWeb());
	}

	/**
	 * Tests the setAnnee() method.
	 *
	 * @return void
	 */
	public function testSetAnnee() {

		$obj = new Documents();

		$obj->setAnnee("annee");
		$this->assertEquals("annee", $obj->getAnnee());
	}

	/**
	 * Tests the setAuteur() method.
	 *
	 * @return void
	 */
	public function testSetAuteur() {

		$obj = new Documents();

		$obj->setAuteur("auteur");
		$this->assertEquals("auteur", $obj->getAuteur());
	}

	/**
	 * Tests the setChapitre() method.
	 *
	 * @return void
	 */
	public function testSetChapitre() {

		$obj = new Documents();

		$obj->setChapitre("chapitre");
		$this->assertEquals("chapitre", $obj->getChapitre());
	}

	/**
	 * Tests the setChrono() method.
	 *
	 * @return void
	 */
	public function testSetChrono() {

		$obj = new Documents();

		$obj->setChrono("chrono");
		$this->assertEquals("chrono", $obj->getChrono());
	}

	/**
	 * Tests the setCodeNature() method.
	 *
	 * @return void
	 */
	public function testSetCodeNature() {

		$obj = new Documents();

		$obj->setCodeNature("codeNature");
		$this->assertEquals("codeNature", $obj->getCodeNature());
	}

	/**
	 * Tests the setDateHeureSys() method.
	 *
	 * @return void
	 */
	public function testSetDateHeureSys() {

		$obj = new Documents();

		$obj->setDateHeureSys(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateHeureSys());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new Documents();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setIndiceBulletin() method.
	 *
	 * @return void
	 */
	public function testSetIndiceBulletin() {

		$obj = new Documents();

		$obj->setIndiceBulletin(10);
		$this->assertEquals(10, $obj->getIndiceBulletin());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new Documents();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new Documents();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new Documents();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriodeArchivage() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeArchivage() {

		$obj = new Documents();

		$obj->setPeriodeArchivage(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeArchivage());
	}

	/**
	 * Tests the setPublierWeb() method.
	 *
	 * @return void
	 */
	public function testSetPublierWeb() {

		$obj = new Documents();

		$obj->setPublierWeb(true);
		$this->assertEquals(true, $obj->getPublierWeb());
	}

}
