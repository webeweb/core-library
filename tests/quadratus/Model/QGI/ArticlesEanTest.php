<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ArticlesEan;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles ean test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ArticlesEanTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesEan();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setEan()
     *
     * @return void
     */
    public function testSetEan(): void {

        $obj = new ArticlesEan();

        $obj->setEan("ean");
        $this->assertEquals("ean", $obj->getEan());
    }

    /**
     * Tests setGamme()
     *
     * @return void
     */
    public function testSetGamme(): void {

        $obj = new ArticlesEan();

        $obj->setGamme(10);
        $this->assertEquals(10, $obj->getGamme());
    }

    /**
     * Tests setVariante()
     *
     * @return void
     */
    public function testSetVariante(): void {

        $obj = new ArticlesEan();

        $obj->setVariante("variante");
        $this->assertEquals("variante", $obj->getVariante());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticlesEan();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getEan());
        $this->assertNull($obj->getGamme());
        $this->assertNull($obj->getVariante());
    }
}
