<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\GroupeLignes;

/**
 * Groupe lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class GroupeLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GroupeLignes();

        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getTypeElement());
    }

    /**
     * Tests the setCodeElement() method.
     *
     * @return void
     */
    public function testSetCodeElement() {

        $obj = new GroupeLignes();

        $obj->setCodeElement("codeElement");
        $this->assertEquals("codeElement", $obj->getCodeElement());
    }

    /**
     * Tests the setGroupe() method.
     *
     * @return void
     */
    public function testSetGroupe() {

        $obj = new GroupeLignes();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Tests the setOrdre() method.
     *
     * @return void
     */
    public function testSetOrdre() {

        $obj = new GroupeLignes();

        $obj->setOrdre(10);
        $this->assertEquals(10, $obj->getOrdre());
    }

    /**
     * Tests the setTypeElement() method.
     *
     * @return void
     */
    public function testSetTypeElement() {

        $obj = new GroupeLignes();

        $obj->setTypeElement("typeElement");
        $this->assertEquals("typeElement", $obj->getTypeElement());
    }
}
