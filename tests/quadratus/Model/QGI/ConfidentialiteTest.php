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
     * Test setActivationLstRestriArt()
     *
     * @return void
     */
    public function testSetActivationLstRestriArt(): void {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriArt(10);
        $this->assertEquals(10, $obj->getActivationLstRestriArt());
    }

    /**
     * Test setActivationLstRestriCli()
     *
     * @return void
     */
    public function testSetActivationLstRestriCli(): void {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriCli(10);
        $this->assertEquals(10, $obj->getActivationLstRestriCli());
    }

    /**
     * Test setActivationLstRestriFrn()
     *
     * @return void
     */
    public function testSetActivationLstRestriFrn(): void {

        $obj = new Confidentialite();

        $obj->setActivationLstRestriFrn(10);
        $this->assertEquals(10, $obj->getActivationLstRestriFrn());
    }

    /**
     * Test setActiveConfMenusQb()
     *
     * @return void
     */
    public function testSetActiveConfMenusQb(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQb(true);
        $this->assertTrue($obj->getActiveConfMenusQb());
    }

    /**
     * Test setActiveConfMenusQb2()
     *
     * @return void
     */
    public function testSetActiveConfMenusQb2(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQb2(true);
        $this->assertTrue($obj->getActiveConfMenusQb2());
    }

    /**
     * Test setActiveConfMenusQc()
     *
     * @return void
     */
    public function testSetActiveConfMenusQc(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQc(true);
        $this->assertTrue($obj->getActiveConfMenusQc());
    }

    /**
     * Test setActiveConfMenusQfact()
     *
     * @return void
     */
    public function testSetActiveConfMenusQfact(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQfact(true);
        $this->assertTrue($obj->getActiveConfMenusQfact());
    }

    /**
     * Test setActiveConfMenusQgi()
     *
     * @return void
     */
    public function testSetActiveConfMenusQgi(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQgi(true);
        $this->assertTrue($obj->getActiveConfMenusQgi());
    }

    /**
     * Test setActiveConfMenusQp()
     *
     * @return void
     */
    public function testSetActiveConfMenusQp(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQp(true);
        $this->assertTrue($obj->getActiveConfMenusQp());
    }

    /**
     * Test setActiveConfMenusQprop()
     *
     * @return void
     */
    public function testSetActiveConfMenusQprop(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQprop(true);
        $this->assertTrue($obj->getActiveConfMenusQprop());
    }

    /**
     * Test setActiveConfMenusQtrs()
     *
     * @return void
     */
    public function testSetActiveConfMenusQtrs(): void {

        $obj = new Confidentialite();

        $obj->setActiveConfMenusQtrs(true);
        $this->assertTrue($obj->getActiveConfMenusQtrs());
    }

    /**
     * Test setMasquerBaseAccess()
     *
     * @return void
     */
    public function testSetMasquerBaseAccess(): void {

        $obj = new Confidentialite();

        $obj->setMasquerBaseAccess(true);
        $this->assertTrue($obj->getMasquerBaseAccess());
    }

    /**
     * Test setSelLstRestriArtDef()
     *
     * @return void
     */
    public function testSetSelLstRestriArtDef(): void {

        $obj = new Confidentialite();

        $obj->setSelLstRestriArtDef("selLstRestriArtDef");
        $this->assertEquals("selLstRestriArtDef", $obj->getSelLstRestriArtDef());
    }

    /**
     * Test setSelLstRestriCliDef()
     *
     * @return void
     */
    public function testSetSelLstRestriCliDef(): void {

        $obj = new Confidentialite();

        $obj->setSelLstRestriCliDef("selLstRestriCliDef");
        $this->assertEquals("selLstRestriCliDef", $obj->getSelLstRestriCliDef());
    }

    /**
     * Test setSelLstRestriFrnDef()
     *
     * @return void
     */
    public function testSetSelLstRestriFrnDef(): void {

        $obj = new Confidentialite();

        $obj->setSelLstRestriFrnDef("selLstRestriFrnDef");
        $this->assertEquals("selLstRestriFrnDef", $obj->getSelLstRestriFrnDef());
    }

    /**
     * Test __construct()
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
