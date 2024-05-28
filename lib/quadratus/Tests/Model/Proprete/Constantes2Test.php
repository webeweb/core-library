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

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\Constantes2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class Constantes2Test extends AbstractTestCase {

    /**
     * Test setFormatDuree()
     *
     * @return void
     */
    public function testSetFormatDuree(): void {

        $obj = new Constantes2();

        $obj->setFormatDuree(true);
        $this->assertTrue($obj->getFormatDuree());
    }

    /**
     * Test setJoursCpaDeduire()
     *
     * @return void
     */
    public function testSetJoursCpaDeduire(): void {

        $obj = new Constantes2();

        $obj->setJoursCpaDeduire(true);
        $this->assertTrue($obj->getJoursCpaDeduire());
    }

    /**
     * Test setNbDecimalesDuree()
     *
     * @return void
     */
    public function testSetNbDecimalesDuree(): void {

        $obj = new Constantes2();

        $obj->setNbDecimalesDuree("nbDecimalesDuree");
        $this->assertEquals("nbDecimalesDuree", $obj->getNbDecimalesDuree());
    }

    /**
     * Test setNumCritereBtBool1()
     *
     * @return void
     */
    public function testSetNumCritereBtBool1(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtBool1("numCritereBtBool1");
        $this->assertEquals("numCritereBtBool1", $obj->getNumCritereBtBool1());
    }

    /**
     * Test setNumCritereBtBool2()
     *
     * @return void
     */
    public function testSetNumCritereBtBool2(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtBool2("numCritereBtBool2");
        $this->assertEquals("numCritereBtBool2", $obj->getNumCritereBtBool2());
    }

    /**
     * Test setNumCritereBtByte1()
     *
     * @return void
     */
    public function testSetNumCritereBtByte1(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtByte1("numCritereBtByte1");
        $this->assertEquals("numCritereBtByte1", $obj->getNumCritereBtByte1());
    }

    /**
     * Test setNumCritereBtLst1()
     *
     * @return void
     */
    public function testSetNumCritereBtLst1(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtLst1("numCritereBtLst1");
        $this->assertEquals("numCritereBtLst1", $obj->getNumCritereBtLst1());
    }

    /**
     * Test setNumCritereBtLst2()
     *
     * @return void
     */
    public function testSetNumCritereBtLst2(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtLst2("numCritereBtLst2");
        $this->assertEquals("numCritereBtLst2", $obj->getNumCritereBtLst2());
    }

    /**
     * Test setNumCritereBtTxt1()
     *
     * @return void
     */
    public function testSetNumCritereBtTxt1(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtTxt1("numCritereBtTxt1");
        $this->assertEquals("numCritereBtTxt1", $obj->getNumCritereBtTxt1());
    }

    /**
     * Test setNumCritereBtTxt2()
     *
     * @return void
     */
    public function testSetNumCritereBtTxt2(): void {

        $obj = new Constantes2();

        $obj->setNumCritereBtTxt2("numCritereBtTxt2");
        $this->assertEquals("numCritereBtTxt2", $obj->getNumCritereBtTxt2());
    }

    /**
     * Test setNumCritereCouleurBt()
     *
     * @return void
     */
    public function testSetNumCritereCouleurBt(): void {

        $obj = new Constantes2();

        $obj->setNumCritereCouleurBt("numCritereCouleurBt");
        $this->assertEquals("numCritereCouleurBt", $obj->getNumCritereCouleurBt());
    }

    /**
     * Test setNumCritereDaTxt1()
     *
     * @return void
     */
    public function testSetNumCritereDaTxt1(): void {

        $obj = new Constantes2();

        $obj->setNumCritereDaTxt1("numCritereDaTxt1");
        $this->assertEquals("numCritereDaTxt1", $obj->getNumCritereDaTxt1());
    }

    /**
     * Test setNumCritereReclaLst1()
     *
     * @return void
     */
    public function testSetNumCritereReclaLst1(): void {

        $obj = new Constantes2();

        $obj->setNumCritereReclaLst1("numCritereReclaLst1");
        $this->assertEquals("numCritereReclaLst1", $obj->getNumCritereReclaLst1());
    }

    /**
     * Test setNumCritereReclaLst2()
     *
     * @return void
     */
    public function testSetNumCritereReclaLst2(): void {

        $obj = new Constantes2();

        $obj->setNumCritereReclaLst2("numCritereReclaLst2");
        $this->assertEquals("numCritereReclaLst2", $obj->getNumCritereReclaLst2());
    }

    /**
     * Test setPublierPhotoWeb()
     *
     * @return void
     */
    public function testSetPublierPhotoWeb(): void {

        $obj = new Constantes2();

        $obj->setPublierPhotoWeb(true);
        $this->assertTrue($obj->getPublierPhotoWeb());
    }

    /**
     * Test setTypeCritereCouleurBt()
     *
     * @return void
     */
    public function testSetTypeCritereCouleurBt(): void {

        $obj = new Constantes2();

        $obj->setTypeCritereCouleurBt("typeCritereCouleurBt");
        $this->assertEquals("typeCritereCouleurBt", $obj->getTypeCritereCouleurBt());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Constantes2();

        $this->assertNull($obj->getFormatDuree());
        $this->assertNull($obj->getJoursCpaDeduire());
        $this->assertNull($obj->getNbDecimalesDuree());
        $this->assertNull($obj->getNumCritereBtBool1());
        $this->assertNull($obj->getNumCritereBtBool2());
        $this->assertNull($obj->getNumCritereBtByte1());
        $this->assertNull($obj->getNumCritereBtLst1());
        $this->assertNull($obj->getNumCritereBtLst2());
        $this->assertNull($obj->getNumCritereBtTxt1());
        $this->assertNull($obj->getNumCritereBtTxt2());
        $this->assertNull($obj->getNumCritereCouleurBt());
        $this->assertNull($obj->getNumCritereDaTxt1());
        $this->assertNull($obj->getNumCritereReclaLst1());
        $this->assertNull($obj->getNumCritereReclaLst2());
        $this->assertNull($obj->getPublierPhotoWeb());
        $this->assertNull($obj->getTypeCritereCouleurBt());
    }
}
