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

use WBW\Library\Core\Quadratus\Model\Proprete\ArticleVariantes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Article variantes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class ArticleVariantesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ArticleVariantes();

		$this->assertNull($obj->getCodeArticle());
		$this->assertNull($obj->getCodeBarre());
		$this->assertNull($obj->getCodeVariante());
		$this->assertNull($obj->getLibelle());
	}

	/**
	 * Tests the setCodeArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle() {

		$obj = new ArticleVariantes();

		$obj->setCodeArticle("codeArticle");
		$this->assertEquals("codeArticle", $obj->getCodeArticle());
	}

	/**
	 * Tests the setCodeBarre() method.
	 *
	 * @return void
	 */
	public function testSetCodeBarre() {

		$obj = new ArticleVariantes();

		$obj->setCodeBarre("codeBarre");
		$this->assertEquals("codeBarre", $obj->getCodeBarre());
	}

	/**
	 * Tests the setCodeVariante() method.
	 *
	 * @return void
	 */
	public function testSetCodeVariante() {

		$obj = new ArticleVariantes();

		$obj->setCodeVariante("codeVariante");
		$this->assertEquals("codeVariante", $obj->getCodeVariante());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new ArticleVariantes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

}
