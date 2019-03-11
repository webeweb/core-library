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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ArticlesEAN;

/**
 * Articles e a n model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesEANTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArticlesEAN();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getEAN());
        $this->assertNull($obj->getGamme());
        $this->assertNull($obj->getVariante());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new ArticlesEAN();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setEAN() method.
     *
     * @return void
     */
    public function testSetEAN() {

        $obj = new ArticlesEAN();

        $obj->setEAN("eAN");
        $this->assertEquals("eAN", $obj->getEAN());
    }

    /**
     * Tests the setGamme() method.
     *
     * @return void
     */
    public function testSetGamme() {

        $obj = new ArticlesEAN();

        $obj->setGamme(10);
        $this->assertEquals(10, $obj->getGamme());
    }

    /**
     * Tests the setVariante() method.
     *
     * @return void
     */
    public function testSetVariante() {

        $obj = new ArticlesEAN();

        $obj->setVariante("variante");
        $this->assertEquals("variante", $obj->getVariante());
    }
}
