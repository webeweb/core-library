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

use WBW\Library\Quadratus\Model\Proprete\ConstTabAnalAchat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Const tab anal achat test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstTabAnalAchatTest extends AbstractTestCase {

    /**
     * Tests setCodeAnalArticle()
     *
     * @return void
     */
    public function testSetCodeAnalArticle(): void {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Tests setCodeAnalFourn()
     *
     * @return void
     */
    public function testSetCodeAnalFourn(): void {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeAnalFourn("codeAnalFourn");
        $this->assertEquals("codeAnalFourn", $obj->getCodeAnalFourn());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new ConstTabAnalAchat();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstTabAnalAchat();

        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeAnalFourn());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
    }
}
