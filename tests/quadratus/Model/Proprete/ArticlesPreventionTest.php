<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\ArticlesPrevention;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles prevention test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticlesPreventionTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesPrevention();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodePrev()
     *
     * @return void
     */
    public function testSetCodePrev(): void {

        $obj = new ArticlesPrevention();

        $obj->setCodePrev("codePrev");
        $this->assertEquals("codePrev", $obj->getCodePrev());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticlesPrevention();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodePrev());
    }
}
