<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ObligationsLiees;

/**
 * Obligations liees model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsLieesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ObligationsLiees();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeObligation());
    }

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new ObligationsLiees();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeObligation() method.
     *
     * @return void
     */
    public function testSetCodeObligation() {

        $obj = new ObligationsLiees();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }
}
