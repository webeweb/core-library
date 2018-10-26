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

use WBW\Library\Core\Quadratus\Model\Proprete\ChantiersDescriptifLocauxElements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers descriptif locaux elements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class ChantiersDescriptifLocauxElementsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ChantiersDescriptifLocauxElements();

		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeElement());
		$this->assertNull($obj->getCoefficient());
		$this->assertNull($obj->getNiveauNoeud());
		$this->assertNull($obj->getNumeroNoeud());
		$this->assertNull($obj->getTypeElement());
		$this->assertNull($obj->getUniqIdLocal());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeElement() method.
	 *
	 * @return void
	 */
	public function testSetCodeElement() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setCodeElement("codeElement");
		$this->assertEquals("codeElement", $obj->getCodeElement());
	}

	/**
	 * Tests the setCoefficient() method.
	 *
	 * @return void
	 */
	public function testSetCoefficient() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setCoefficient(10.092018);
		$this->assertEquals(10.092018, $obj->getCoefficient());
	}

	/**
	 * Tests the setNiveauNoeud() method.
	 *
	 * @return void
	 */
	public function testSetNiveauNoeud() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setNiveauNoeud(10);
		$this->assertEquals(10, $obj->getNiveauNoeud());
	}

	/**
	 * Tests the setNumeroNoeud() method.
	 *
	 * @return void
	 */
	public function testSetNumeroNoeud() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setNumeroNoeud(10);
		$this->assertEquals(10, $obj->getNumeroNoeud());
	}

	/**
	 * Tests the setTypeElement() method.
	 *
	 * @return void
	 */
	public function testSetTypeElement() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setTypeElement("typeElement");
		$this->assertEquals("typeElement", $obj->getTypeElement());
	}

	/**
	 * Tests the setUniqIdLocal() method.
	 *
	 * @return void
	 */
	public function testSetUniqIdLocal() {

		$obj = new ChantiersDescriptifLocauxElements();

		$obj->setUniqIdLocal("uniqIdLocal");
		$this->assertEquals("uniqIdLocal", $obj->getUniqIdLocal());
	}

}
