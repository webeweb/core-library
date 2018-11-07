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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesBulletinCompl;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes bulletin compl model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesBulletinComplTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LignesBulletinCompl();

		$this->assertNull($obj->getDateDebut());
		$this->assertNull($obj->getDateFin());
		$this->assertNull($obj->getIndicePeriode());
		$this->assertNull($obj->getNumLigneBulletin());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getPeriodicite());
		$this->assertNull($obj->getTypeRegul());
	}

	/**
	 * Tests the setDateDebut() method.
	 *
	 * @return void
	 */
	public function testSetDateDebut() {

		$obj = new LignesBulletinCompl();

		$obj->setDateDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
	}

	/**
	 * Tests the setDateFin() method.
	 *
	 * @return void
	 */
	public function testSetDateFin() {

		$obj = new LignesBulletinCompl();

		$obj->setDateFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
	}

	/**
	 * Tests the setIndicePeriode() method.
	 *
	 * @return void
	 */
	public function testSetIndicePeriode() {

		$obj = new LignesBulletinCompl();

		$obj->setIndicePeriode(10);
		$this->assertEquals(10, $obj->getIndicePeriode());
	}

	/**
	 * Tests the setNumLigneBulletin() method.
	 *
	 * @return void
	 */
	public function testSetNumLigneBulletin() {

		$obj = new LignesBulletinCompl();

		$obj->setNumLigneBulletin(10);
		$this->assertEquals(10, $obj->getNumLigneBulletin());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new LignesBulletinCompl();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new LignesBulletinCompl();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setPeriodicite() method.
	 *
	 * @return void
	 */
	public function testSetPeriodicite() {

		$obj = new LignesBulletinCompl();

		$obj->setPeriodicite("periodicite");
		$this->assertEquals("periodicite", $obj->getPeriodicite());
	}

	/**
	 * Tests the setTypeRegul() method.
	 *
	 * @return void
	 */
	public function testSetTypeRegul() {

		$obj = new LignesBulletinCompl();

		$obj->setTypeRegul("typeRegul");
		$this->assertEquals("typeRegul", $obj->getTypeRegul());
	}

}
