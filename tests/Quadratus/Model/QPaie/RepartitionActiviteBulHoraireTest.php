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
use WBW\Library\Core\Quadratus\Model\QPaie\RepartitionActiviteBulHoraire;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Repartition activite bul horaire model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class RepartitionActiviteBulHoraireTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new RepartitionActiviteBulHoraire();

		$this->assertNull($obj->getCodeService());
		$this->assertNull($obj->getIndicePeriode());
		$this->assertNull($obj->getInterimaire());
		$this->assertNull($obj->getNbHeures());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriode());
	}

	/**
	 * Tests the setCodeService() method.
	 *
	 * @return void
	 */
	public function testSetCodeService() {

		$obj = new RepartitionActiviteBulHoraire();

		$obj->setCodeService("codeService");
		$this->assertEquals("codeService", $obj->getCodeService());
	}

	/**
	 * Tests the setIndicePeriode() method.
	 *
	 * @return void
	 */
	public function testSetIndicePeriode() {

		$obj = new RepartitionActiviteBulHoraire();

		$obj->setIndicePeriode(10);
		$this->assertEquals(10, $obj->getIndicePeriode());
	}

	/**
	 * Tests the setInterimaire() method.
	 *
	 * @return void
	 */
	public function testSetInterimaire() {

		$obj = new RepartitionActiviteBulHoraire();

		$obj->setInterimaire(true);
		$this->assertEquals(true, $obj->getInterimaire());
	}

	/**
	 * Tests the setNbHeures() method.
	 *
	 * @return void
	 */
	public function testSetNbHeures() {

		$obj = new RepartitionActiviteBulHoraire();

		$obj->setNbHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeures());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new RepartitionActiviteBulHoraire();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new RepartitionActiviteBulHoraire();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

}
