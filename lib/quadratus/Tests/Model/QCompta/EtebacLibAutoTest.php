<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\EtebacLibAuto;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Etebac lib auto test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class EtebacLibAutoTest extends AbstractTestCase {

    /**
     * Test setCodeEtebac()
     *
     * @return void
     */
    public function testSetCodeEtebac(): void {

        $obj = new EtebacLibAuto();

        $obj->setCodeEtebac("codeEtebac");
        $this->assertEquals("codeEtebac", $obj->getCodeEtebac());
    }

    /**
     * Test setCodeLibAuto()
     *
     * @return void
     */
    public function testSetCodeLibAuto(): void {

        $obj = new EtebacLibAuto();

        $obj->setCodeLibAuto("codeLibAuto");
        $this->assertEquals("codeLibAuto", $obj->getCodeLibAuto());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EtebacLibAuto();

        $this->assertNull($obj->getCodeEtebac());
        $this->assertNull($obj->getCodeLibAuto());
    }
}
