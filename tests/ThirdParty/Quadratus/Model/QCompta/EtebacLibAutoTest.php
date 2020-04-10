<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EtebacLibAuto;

/**
 * Etebac lib auto test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EtebacLibAutoTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EtebacLibAuto();

        $this->assertNull($obj->getCodeEtebac());
        $this->assertNull($obj->getCodeLibAuto());
    }

    /**
     * Tests the setCodeEtebac() method.
     *
     * @return void
     */
    public function testSetCodeEtebac() {

        $obj = new EtebacLibAuto();

        $obj->setCodeEtebac("codeEtebac");
        $this->assertEquals("codeEtebac", $obj->getCodeEtebac());
    }

    /**
     * Tests the setCodeLibAuto() method.
     *
     * @return void
     */
    public function testSetCodeLibAuto() {

        $obj = new EtebacLibAuto();

        $obj->setCodeLibAuto("codeLibAuto");
        $this->assertEquals("codeLibAuto", $obj->getCodeLibAuto());
    }
}
