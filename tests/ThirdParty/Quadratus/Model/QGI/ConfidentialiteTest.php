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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Confidentialite;

/**
 * Confidentialite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ConfidentialiteTest extends AbstractTestCase {

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
     * Tests the setActiveConfMenusQb() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQb() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQb(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQb());
    }

    /**
     * Tests the setActiveConfMenusQb2() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQb2() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQb2(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQb2());
    }

    /**
     * Tests the setActiveConfMenusQc() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQc() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQc(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQc());
    }

    /**
     * Tests the setActiveConfMenusQfact() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQfact() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQfact(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQfact());
    }

    /**
     * Tests the setActiveConfMenusQgi() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQgi() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQgi(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQgi());
    }

    /**
     * Tests the setActiveConfMenusQp() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQp() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQp(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQp());
    }

    /**
     * Tests the setActiveConfMenusQprop() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQprop() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQprop(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQprop());
    }

    /**
     * Tests the setActiveConfMenusQtrs() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQtrs() {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQtrs(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQtrs());
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

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Confidentialite();

        $this->assertNull($obj->getActivationLstRestriArt());
        $this->assertNull($obj->getActivationLstRestriCli());
        $this->assertNull($obj->getActivationLstRestriFrn());
        $this->assertNull($obj->getActiveConfMenusQb());
        $this->assertNull($obj->getActiveConfMenusQb2());
        $this->assertNull($obj->getActiveConfMenusQc());
        $this->assertNull($obj->getActiveConfMenusQfact());
        $this->assertNull($obj->getActiveConfMenusQgi());
        $this->assertNull($obj->getActiveConfMenusQp());
        $this->assertNull($obj->getActiveConfMenusQprop());
        $this->assertNull($obj->getActiveConfMenusQtrs());
        $this->assertNull($obj->getMasquerBaseAccess());
        $this->assertNull($obj->getSelLstRestriArtDef());
        $this->assertNull($obj->getSelLstRestriCliDef());
        $this->assertNull($obj->getSelLstRestriFrnDef());
    }
}
