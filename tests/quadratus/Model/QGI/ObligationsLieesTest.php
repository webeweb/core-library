<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ObligationsLiees;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Obligations liees test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ObligationsLieesTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ObligationsLiees();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeObligation()
     *
     * @return void
     */
    public function testSetCodeObligation(): void {

        $obj = new ObligationsLiees();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ObligationsLiees();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeObligation());
    }
}
