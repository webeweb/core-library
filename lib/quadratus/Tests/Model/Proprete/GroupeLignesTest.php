<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\GroupeLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Groupe lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class GroupeLignesTest extends AbstractTestCase {

    /**
     * Test setCodeElement()
     *
     * @return void
     */
    public function testSetCodeElement(): void {

        $obj = new GroupeLignes();

        $obj->setCodeElement("codeElement");
        $this->assertEquals("codeElement", $obj->getCodeElement());
    }

    /**
     * Test setGroupe()
     *
     * @return void
     */
    public function testSetGroupe(): void {

        $obj = new GroupeLignes();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Test setOrdre()
     *
     * @return void
     */
    public function testSetOrdre(): void {

        $obj = new GroupeLignes();

        $obj->setOrdre(10);
        $this->assertEquals(10, $obj->getOrdre());
    }

    /**
     * Test setTypeElement()
     *
     * @return void
     */
    public function testSetTypeElement(): void {

        $obj = new GroupeLignes();

        $obj->setTypeElement("typeElement");
        $this->assertEquals("typeElement", $obj->getTypeElement());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GroupeLignes();

        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getTypeElement());
    }
}
