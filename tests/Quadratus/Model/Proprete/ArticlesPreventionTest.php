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

use WBW\Library\Core\Quadratus\Model\Proprete\ArticlesPrevention;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Articles prevention model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ArticlesPreventionTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ArticlesPrevention();

		$this->assertNull($obj->getCodeArticle());
		$this->assertNull($obj->getCodePrev());
	}

	/**
	 * Tests the setCodeArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle() {

		$obj = new ArticlesPrevention();

		$obj->setCodeArticle("codeArticle");
		$this->assertEquals("codeArticle", $obj->getCodeArticle());
	}

	/**
	 * Tests the setCodePrev() method.
	 *
	 * @return void
	 */
	public function testSetCodePrev() {

		$obj = new ArticlesPrevention();

		$obj->setCodePrev("codePrev");
		$this->assertEquals("codePrev", $obj->getCodePrev());
	}

}
