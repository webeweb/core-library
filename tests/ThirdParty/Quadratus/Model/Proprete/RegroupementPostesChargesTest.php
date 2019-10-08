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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\RegroupementPostesCharges;

/**
 * Regroupement postes charges model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class RegroupementPostesChargesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegroupementPostesCharges();

        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeRegCharge());
    }

    /**
     * Tests the setCodeCharge() method.
     *
     * @return void
     */
    public function testSetCodeCharge() {

        $obj = new RegroupementPostesCharges();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests the setCodeRegCharge() method.
     *
     * @return void
     */
    public function testSetCodeRegCharge() {

        $obj = new RegroupementPostesCharges();

        $obj->setCodeRegCharge("codeRegCharge");
        $this->assertEquals("codeRegCharge", $obj->getCodeRegCharge());
    }
}
