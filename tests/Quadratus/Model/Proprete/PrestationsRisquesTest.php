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

use WBW\Library\Core\Quadratus\Model\Proprete\PrestationsRisques;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Prestations risques model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class PrestationsRisquesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PrestationsRisques();

		$this->assertNull($obj->getCodeArticle());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getTauxExposition());
	}

	/**
	 * Tests the setCodeArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle() {

		$obj = new PrestationsRisques();

		$obj->setCodeArticle("codeArticle");
		$this->assertEquals("codeArticle", $obj->getCodeArticle());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new PrestationsRisques();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setTauxExposition() method.
	 *
	 * @return void
	 */
	public function testSetTauxExposition() {

		$obj = new PrestationsRisques();

		$obj->setTauxExposition(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxExposition());
	}

}
