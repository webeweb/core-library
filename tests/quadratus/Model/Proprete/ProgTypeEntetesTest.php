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

use WBW\Library\Quadratus\Model\Proprete\ProgTypeEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prog type entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ProgTypeEntetesTest extends AbstractTestCase {

    /**
     * Tests setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new ProgTypeEntetes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests setNumProgramme()
     *
     * @return void
     */
    public function testSetNumProgramme(): void {

        $obj = new ProgTypeEntetes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ProgTypeEntetes();

        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getNumProgramme());
    }
}
