<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ArticlesEan;

/**
 * Articles ean test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesEanTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesEan();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setEan() method.
     *
     * @return void
     */
    public function testSetEan(): void {

        $obj = new ArticlesEan();

        $obj->setEan("ean");
        $this->assertEquals("ean", $obj->getEan());
    }

    /**
     * Tests the setGamme() method.
     *
     * @return void
     */
    public function testSetGamme(): void {

        $obj = new ArticlesEan();

        $obj->setGamme(10);
        $this->assertEquals(10, $obj->getGamme());
    }

    /**
     * Tests the setVariante() method.
     *
     * @return void
     */
    public function testSetVariante(): void {

        $obj = new ArticlesEan();

        $obj->setVariante("variante");
        $this->assertEquals("variante", $obj->getVariante());
    }

    /**
     * Tests the __construct() method.
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
