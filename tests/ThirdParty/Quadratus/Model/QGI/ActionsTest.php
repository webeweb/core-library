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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Actions;

/**
 * Actions model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Actions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getDescriptifCourt());
        $this->assertNull($obj->getDescriptifLong());
        $this->assertNull($obj->getObligationLiee());
        $this->assertNull($obj->getQuantiteHeure());
        $this->assertNull($obj->getRelationQH());
    }

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new Actions();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeCalcul() method.
     *
     * @return void
     */
    public function testSetCodeCalcul() {

        $obj = new Actions();

        $obj->setCodeCalcul(10);
        $this->assertEquals(10, $obj->getCodeCalcul());
    }

    /**
     * Tests the setDescriptifCourt() method.
     *
     * @return void
     */
    public function testSetDescriptifCourt() {

        $obj = new Actions();

        $obj->setDescriptifCourt("descriptifCourt");
        $this->assertEquals("descriptifCourt", $obj->getDescriptifCourt());
    }

    /**
     * Tests the setDescriptifLong() method.
     *
     * @return void
     */
    public function testSetDescriptifLong() {

        $obj = new Actions();

        $obj->setDescriptifLong("descriptifLong");
        $this->assertEquals("descriptifLong", $obj->getDescriptifLong());
    }

    /**
     * Tests the setObligationLiee() method.
     *
     * @return void
     */
    public function testSetObligationLiee() {

        $obj = new Actions();

        $obj->setObligationLiee("obligationLiee");
        $this->assertEquals("obligationLiee", $obj->getObligationLiee());
    }

    /**
     * Tests the setQuantiteHeure() method.
     *
     * @return void
     */
    public function testSetQuantiteHeure() {

        $obj = new Actions();

        $obj->setQuantiteHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteHeure());
    }

    /**
     * Tests the setRelationQH() method.
     *
     * @return void
     */
    public function testSetRelationQH() {

        $obj = new Actions();

        $obj->setRelationQH(true);
        $this->assertEquals(true, $obj->getRelationQH());
    }
}
