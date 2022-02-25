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

use WBW\Library\Quadratus\Model\Proprete\TrameInventaire;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Trame inventaire test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class TrameInventaireTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new TrameInventaire();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeTrame()
     *
     * @return void
     */
    public function testSetCodeTrame(): void {

        $obj = new TrameInventaire();

        $obj->setCodeTrame("codeTrame");
        $this->assertEquals("codeTrame", $obj->getCodeTrame());
    }

    /**
     * Tests setNumOrdre()
     *
     * @return void
     */
    public function testSetNumOrdre(): void {

        $obj = new TrameInventaire();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TrameInventaire();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeTrame());
        $this->assertNull($obj->getNumOrdre());
    }
}
