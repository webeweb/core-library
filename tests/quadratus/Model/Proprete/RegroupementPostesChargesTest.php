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

use WBW\Library\Quadratus\Model\Proprete\RegroupementPostesCharges;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regroupement postes charges test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class RegroupementPostesChargesTest extends AbstractTestCase {

    /**
     * Tests setCodeCharge()
     *
     * @return void
     */
    public function testSetCodeCharge(): void {

        $obj = new RegroupementPostesCharges();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests setCodeRegCharge()
     *
     * @return void
     */
    public function testSetCodeRegCharge(): void {

        $obj = new RegroupementPostesCharges();

        $obj->setCodeRegCharge("codeRegCharge");
        $this->assertEquals("codeRegCharge", $obj->getCodeRegCharge());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegroupementPostesCharges();

        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeRegCharge());
    }
}
