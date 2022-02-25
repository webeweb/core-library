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

use WBW\Library\Quadratus\Model\Proprete\ArticleVariantes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Article variantes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticleVariantesTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticleVariantes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeBarre()
     *
     * @return void
     */
    public function testSetCodeBarre(): void {

        $obj = new ArticleVariantes();

        $obj->setCodeBarre("codeBarre");
        $this->assertEquals("codeBarre", $obj->getCodeBarre());
    }

    /**
     * Tests setCodeVariante()
     *
     * @return void
     */
    public function testSetCodeVariante(): void {

        $obj = new ArticleVariantes();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ArticleVariantes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticleVariantes();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getLibelle());
    }
}
