<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\Confidentialite;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Confidentialite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ConfidentialiteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Confidentialite();

        $this->assertNull($obj->getActivationLstRestriArt());
        $this->assertNull($obj->getActivationLstRestriCli());
        $this->assertNull($obj->getActivationLstRestriFrn());
        $this->assertNull($obj->getActiveConfMenusQB());
        $this->assertNull($obj->getActiveConfMenusQB2());
        $this->assertNull($obj->getActiveConfMenusQC());
        $this->assertNull($obj->getActiveConfMenusQFACT());
        $this->assertNull($obj->getActiveConfMenusQGI());
        $this->assertNull($obj->getActiveConfMenusQP());
        $this->assertNull($obj->getActiveConfMenusQPROP());
        $this->assertNull($obj->getActiveConfMenusQTRS());
        $this->assertNull($obj->getMasquerBaseAccess());
        $this->assertNull($obj->getSelLstRestriArtDef());
        $this->assertNull($obj->getSelLstRestriCliDef());
        $this->assertNull($obj->getSelLstRestriFrnDef());
    }

    /**
     * Tests the setActivationLstRestriArt() method.
     *
     * @return void
     */
    public function testSetActivationLstRestriArt() {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriArt(10);
        $this->assertEquals(10, $obj->getActivationLstRestriArt());
    }

    /**
     * Tests the setActivationLstRestriCli() method.
     *
     * @return void
     */
    public function testSetActivationLstRestriCli() {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriCli(10);
        $this->assertEquals(10, $obj->getActivationLstRestriCli());
    }

    /**
     * Tests the setActivationLstRestriFrn() method.
     *
     * @return void
     */
    public function testSetActivationLstRestriFrn() {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriFrn(10);
        $this->assertEquals(10, $obj->getActivationLstRestriFrn());
    }

    /**
     * Tests the setActiveConfMenusQB() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQB() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQB(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQB());
    }

    /**
     * Tests the setActiveConfMenusQB2() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQB2() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQB2(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQB2());
    }

    /**
     * Tests the setActiveConfMenusQC() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQC() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQC(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQC());
    }

    /**
     * Tests the setActiveConfMenusQFACT() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQFACT() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQFACT(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQFACT());
    }

    /**
     * Tests the setActiveConfMenusQGI() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQGI() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQGI(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQGI());
    }

    /**
     * Tests the setActiveConfMenusQP() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQP() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQP(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQP());
    }

    /**
     * Tests the setActiveConfMenusQPROP() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQPROP() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQPROP(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQPROP());
    }

    /**
     * Tests the setActiveConfMenusQTRS() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQTRS() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQTRS(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQTRS());
    }

    /**
     * Tests the setMasquerBaseAccess() method.
     *
     * @return void
     */
    public function testSetMasquerBaseAccess() {

        $obj = new Confidentialite();

        $obj->setMasquerBaseAccess(true);
        $this->assertEquals(true, $obj->getMasquerBaseAccess());
    }

    /**
     * Tests the setSelLstRestriArtDef() method.
     *
     * @return void
     */
    public function testSetSelLstRestriArtDef() {

        $obj = new Confidentialite();

        $obj->setSelLstRestriArtDef("selLstRestriArtDef");
        $this->assertEquals("selLstRestriArtDef", $obj->getSelLstRestriArtDef());
    }

    /**
     * Tests the setSelLstRestriCliDef() method.
     *
     * @return void
     */
    public function testSetSelLstRestriCliDef() {

        $obj = new Confidentialite();

        $obj->setSelLstRestriCliDef("selLstRestriCliDef");
        $this->assertEquals("selLstRestriCliDef", $obj->getSelLstRestriCliDef());
    }

    /**
     * Tests the setSelLstRestriFrnDef() method.
     *
     * @return void
     */
    public function testSetSelLstRestriFrnDef() {

        $obj = new Confidentialite();

        $obj->setSelLstRestriFrnDef("selLstRestriFrnDef");
        $this->assertEquals("selLstRestriFrnDef", $obj->getSelLstRestriFrnDef());
    }

}
