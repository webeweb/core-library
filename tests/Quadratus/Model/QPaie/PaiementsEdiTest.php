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

use WBW\Library\Core\Quadratus\Model\QPaie\PaiementsEdi;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Paiements edi model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class PaiementsEdiTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PaiementsEdi();

		$this->assertNull($obj->getBIC());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getDomBanque());
		$this->assertNull($obj->getGenererCouponPaiement());
		$this->assertNull($obj->getIBAN());
		$this->assertNull($obj->getMontant());
		$this->assertNull($obj->getMontantDucsAnnuelle());
		$this->assertNull($obj->getMoyenPaiement());
		$this->assertNull($obj->getRib());
	}

	/**
	 * Tests the setBIC() method.
	 *
	 * @return void
	 */
	public function testSetBIC() {

		$obj = new PaiementsEdi();

		$obj->setBIC("bIC");
		$this->assertEquals("bIC", $obj->getBIC());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new PaiementsEdi();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new PaiementsEdi();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setDomBanque() method.
	 *
	 * @return void
	 */
	public function testSetDomBanque() {

		$obj = new PaiementsEdi();

		$obj->setDomBanque("domBanque");
		$this->assertEquals("domBanque", $obj->getDomBanque());
	}

	/**
	 * Tests the setGenererCouponPaiement() method.
	 *
	 * @return void
	 */
	public function testSetGenererCouponPaiement() {

		$obj = new PaiementsEdi();

		$obj->setGenererCouponPaiement(true);
		$this->assertEquals(true, $obj->getGenererCouponPaiement());
	}

	/**
	 * Tests the setIBAN() method.
	 *
	 * @return void
	 */
	public function testSetIBAN() {

		$obj = new PaiementsEdi();

		$obj->setIBAN("iBAN");
		$this->assertEquals("iBAN", $obj->getIBAN());
	}

	/**
	 * Tests the setMontant() method.
	 *
	 * @return void
	 */
	public function testSetMontant() {

		$obj = new PaiementsEdi();

		$obj->setMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant());
	}

	/**
	 * Tests the setMontantDucsAnnuelle() method.
	 *
	 * @return void
	 */
	public function testSetMontantDucsAnnuelle() {

		$obj = new PaiementsEdi();

		$obj->setMontantDucsAnnuelle(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantDucsAnnuelle());
	}

	/**
	 * Tests the setMoyenPaiement() method.
	 *
	 * @return void
	 */
	public function testSetMoyenPaiement() {

		$obj = new PaiementsEdi();

		$obj->setMoyenPaiement("moyenPaiement");
		$this->assertEquals("moyenPaiement", $obj->getMoyenPaiement());
	}

	/**
	 * Tests the setRib() method.
	 *
	 * @return void
	 */
	public function testSetRib() {

		$obj = new PaiementsEdi();

		$obj->setRib("rib");
		$this->assertEquals("rib", $obj->getRib());
	}

}
