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

use WBW\Library\Quadratus\Model\QGI\Confidentialite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Confidentialite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ConfidentialiteTest extends AbstractTestCase {

    /**
     * Tests setActivationLstRestriArt()
     *
     * @return void
     */
    public function testSetActivationLstRestriArt(): void {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriArt(10);
        $this->assertEquals(10, $obj->getActivationLstRestriArt());
    }

    /**
     * Tests setActivationLstRestriCli()
     *
     * @return void
     */
    public function testSetActivationLstRestriCli(): void {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriCli(10);
        $this->assertEquals(10, $obj->getActivationLstRestriCli());
    }

    /**
     * Tests setActivationLstRestriFrn()
     *
     * @return void
     */
    public function testSetActivationLstRestriFrn(): void {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriFrn(10);
        $this->assertEquals(10, $obj->getActivationLstRestriFrn());
    }

    /**
     * Tests setActiveConfMenusQb()
     *
     * @return void
     */
    public function testSetActiveConfMenusQb(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQb(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQb());
    }

    /**
     * Tests setActiveConfMenusQb2()
     *
     * @return void
     */
    public function testSetActiveConfMenusQb2(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQb2(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQb2());
    }

    /**
     * Tests setActiveConfMenusQc()
     *
     * @return void
     */
    public function testSetActiveConfMenusQc(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQc(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQc());
    }

    /**
     * Tests setActiveConfMenusQfact()
     *
     * @return void
     */
    public function testSetActiveConfMenusQfact(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQfact(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQfact());
    }

    /**
     * Tests setActiveConfMenusQgi()
     *
     * @return void
     */
    public function testSetActiveConfMenusQgi(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQgi(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQgi());
    }

    /**
     * Tests setActiveConfMenusQp()
     *
     * @return void
     */
    public function testSetActiveConfMenusQp(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQp(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQp());
    }

    /**
     * Tests setActiveConfMenusQprop()
     *
     * @return void
     */
    public function testSetActiveConfMenusQprop(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQprop(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQprop());
    }

    /**
     * Tests setActiveConfMenusQtrs()
     *
     * @return void
     */
    public function testSetActiveConfMenusQtrs(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQtrs(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQtrs());
    }

    /**
     * Tests setMasquerBaseAccess()
     *
     * @return void
     */
    public function testSetMasquerBaseAccess(): void {

        $obj = new Confidentialite();

        $obj->setMasquerBaseAccess(true);
        $this->assertEquals(true, $obj->getMasquerBaseAccess());
    }

    /**
     * Tests setSelLstRestriArtDef()
     *
     * @return void
     */
    public function testSetSelLstRestriArtDef(): void {

        $obj = new Confidentialite();

        $obj->setSelLstRestriArtDef("selLstRestriArtDef");
        $this->assertEquals("selLstRestriArtDef", $obj->getSelLstRestriArtDef());
    }

    /**
     * Tests setSelLstRestriCliDef()
     *
     * @return void
     */
    public function testSetSelLstRestriCliDef(): void {

        $obj = new Confidentialite();

        $obj->setSelLstRestriCliDef("selLstRestriCliDef");
        $this->assertEquals("selLstRestriCliDef", $obj->getSelLstRestriCliDef());
    }

    /**
     * Tests setSelLstRestriFrnDef()
     *
     * @return void
     */
    public function testSetSelLstRestriFrnDef(): void {

        $obj = new Confidentialite();

        $obj->setSelLstRestriFrnDef("selLstRestriFrnDef");
        $this->assertEquals("selLstRestriFrnDef", $obj->getSelLstRestriFrnDef());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
