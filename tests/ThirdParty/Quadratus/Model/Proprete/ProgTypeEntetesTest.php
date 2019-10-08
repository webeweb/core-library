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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ProgTypeEntetes;

/**
 * Prog type entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ProgTypeEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ProgTypeEntetes();

        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getNumProgramme());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new ProgTypeEntetes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setNumProgramme() method.
     *
     * @return void
     */
    public function testSetNumProgramme() {

        $obj = new ProgTypeEntetes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }
}
