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

use WBW\Library\Core\Quadratus\Model\Proprete\CriteresChantier;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Criteres chantier model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class CriteresChantierTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CriteresChantier();

		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeRef1());
		$this->assertNull($obj->getCodeRef2());
		$this->assertNull($obj->getCodeRef3());
		$this->assertNull($obj->getCodeRef4());
		$this->assertNull($obj->getCodeRef5());
		$this->assertNull($obj->getTexte1());
		$this->assertNull($obj->getTexte2());
		$this->assertNull($obj->getTexte3());
		$this->assertNull($obj->getTexte4());
		$this->assertNull($obj->getTexte5());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new CriteresChantier();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new CriteresChantier();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new CriteresChantier();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeRef1() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef1() {

		$obj = new CriteresChantier();

		$obj->setCodeRef1("codeRef1");
		$this->assertEquals("codeRef1", $obj->getCodeRef1());
	}

	/**
	 * Tests the setCodeRef2() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef2() {

		$obj = new CriteresChantier();

		$obj->setCodeRef2("codeRef2");
		$this->assertEquals("codeRef2", $obj->getCodeRef2());
	}

	/**
	 * Tests the setCodeRef3() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef3() {

		$obj = new CriteresChantier();

		$obj->setCodeRef3("codeRef3");
		$this->assertEquals("codeRef3", $obj->getCodeRef3());
	}

	/**
	 * Tests the setCodeRef4() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef4() {

		$obj = new CriteresChantier();

		$obj->setCodeRef4("codeRef4");
		$this->assertEquals("codeRef4", $obj->getCodeRef4());
	}

	/**
	 * Tests the setCodeRef5() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef5() {

		$obj = new CriteresChantier();

		$obj->setCodeRef5("codeRef5");
		$this->assertEquals("codeRef5", $obj->getCodeRef5());
	}

	/**
	 * Tests the setTexte1() method.
	 *
	 * @return void
	 */
	public function testSetTexte1() {

		$obj = new CriteresChantier();

		$obj->setTexte1("texte1");
		$this->assertEquals("texte1", $obj->getTexte1());
	}

	/**
	 * Tests the setTexte2() method.
	 *
	 * @return void
	 */
	public function testSetTexte2() {

		$obj = new CriteresChantier();

		$obj->setTexte2("texte2");
		$this->assertEquals("texte2", $obj->getTexte2());
	}

	/**
	 * Tests the setTexte3() method.
	 *
	 * @return void
	 */
	public function testSetTexte3() {

		$obj = new CriteresChantier();

		$obj->setTexte3("texte3");
		$this->assertEquals("texte3", $obj->getTexte3());
	}

	/**
	 * Tests the setTexte4() method.
	 *
	 * @return void
	 */
	public function testSetTexte4() {

		$obj = new CriteresChantier();

		$obj->setTexte4("texte4");
		$this->assertEquals("texte4", $obj->getTexte4());
	}

	/**
	 * Tests the setTexte5() method.
	 *
	 * @return void
	 */
	public function testSetTexte5() {

		$obj = new CriteresChantier();

		$obj->setTexte5("texte5");
		$this->assertEquals("texte5", $obj->getTexte5());
	}

}
