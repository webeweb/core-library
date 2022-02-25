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

use WBW\Library\Quadratus\Model\QGI\InventaireTrame;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Inventaire trame test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class InventaireTrameTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new InventaireTrame();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeTrame()
     *
     * @return void
     */
    public function testSetCodeTrame(): void {

        $obj = new InventaireTrame();

        $obj->setCodeTrame("codeTrame");
        $this->assertEquals("codeTrame", $obj->getCodeTrame());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new InventaireTrame();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InventaireTrame();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeTrame());
        $this->assertNull($obj->getNumeroLigne());
    }
}
