<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Constantes2;

/**
 * Constantes2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class Constantes2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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

    /**
     * Tests the setFormatDuree() method.
     *
     * @return void
     */
    public function testSetFormatDuree() {

        $obj = new Constantes2();

        $obj->setFormatDuree(true);
        $this->assertEquals(true, $obj->getFormatDuree());
    }

    /**
     * Tests the setJoursCpaDeduire() method.
     *
     * @return void
     */
    public function testSetJoursCpaDeduire() {

        $obj = new Constantes2();

        $obj->setJoursCpaDeduire(true);
        $this->assertEquals(true, $obj->getJoursCpaDeduire());
    }

    /**
     * Tests the setNbDecimalesDuree() method.
     *
     * @return void
     */
    public function testSetNbDecimalesDuree() {

        $obj = new Constantes2();

        $obj->setNbDecimalesDuree("nbDecimalesDuree");
        $this->assertEquals("nbDecimalesDuree", $obj->getNbDecimalesDuree());
    }

    /**
     * Tests the setNumCritereBtBool1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtBool1() {

        $obj = new Constantes2();

        $obj->setNumCritereBtBool1("numCritereBtBool1");
        $this->assertEquals("numCritereBtBool1", $obj->getNumCritereBtBool1());
    }

    /**
     * Tests the setNumCritereBtBool2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtBool2() {

        $obj = new Constantes2();

        $obj->setNumCritereBtBool2("numCritereBtBool2");
        $this->assertEquals("numCritereBtBool2", $obj->getNumCritereBtBool2());
    }

    /**
     * Tests the setNumCritereBtByte1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtByte1() {

        $obj = new Constantes2();

        $obj->setNumCritereBtByte1("numCritereBtByte1");
        $this->assertEquals("numCritereBtByte1", $obj->getNumCritereBtByte1());
    }

    /**
     * Tests the setNumCritereBtLst1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtLst1() {

        $obj = new Constantes2();

        $obj->setNumCritereBtLst1("numCritereBtLst1");
        $this->assertEquals("numCritereBtLst1", $obj->getNumCritereBtLst1());
    }

    /**
     * Tests the setNumCritereBtLst2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtLst2() {

        $obj = new Constantes2();

        $obj->setNumCritereBtLst2("numCritereBtLst2");
        $this->assertEquals("numCritereBtLst2", $obj->getNumCritereBtLst2());
    }

    /**
     * Tests the setNumCritereBtTxt1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtTxt1() {

        $obj = new Constantes2();

        $obj->setNumCritereBtTxt1("numCritereBtTxt1");
        $this->assertEquals("numCritereBtTxt1", $obj->getNumCritereBtTxt1());
    }

    /**
     * Tests the setNumCritereBtTxt2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtTxt2() {

        $obj = new Constantes2();

        $obj->setNumCritereBtTxt2("numCritereBtTxt2");
        $this->assertEquals("numCritereBtTxt2", $obj->getNumCritereBtTxt2());
    }

    /**
     * Tests the setNumCritereCouleurBt() method.
     *
     * @return void
     */
    public function testSetNumCritereCouleurBt() {

        $obj = new Constantes2();

        $obj->setNumCritereCouleurBt("numCritereCouleurBt");
        $this->assertEquals("numCritereCouleurBt", $obj->getNumCritereCouleurBt());
    }

    /**
     * Tests the setNumCritereDaTxt1() method.
     *
     * @return void
     */
    public function testSetNumCritereDaTxt1() {

        $obj = new Constantes2();

        $obj->setNumCritereDaTxt1("numCritereDaTxt1");
        $this->assertEquals("numCritereDaTxt1", $obj->getNumCritereDaTxt1());
    }

    /**
     * Tests the setNumCritereReclaLst1() method.
     *
     * @return void
     */
    public function testSetNumCritereReclaLst1() {

        $obj = new Constantes2();

        $obj->setNumCritereReclaLst1("numCritereReclaLst1");
        $this->assertEquals("numCritereReclaLst1", $obj->getNumCritereReclaLst1());
    }

    /**
     * Tests the setNumCritereReclaLst2() method.
     *
     * @return void
     */
    public function testSetNumCritereReclaLst2() {

        $obj = new Constantes2();

        $obj->setNumCritereReclaLst2("numCritereReclaLst2");
        $this->assertEquals("numCritereReclaLst2", $obj->getNumCritereReclaLst2());
    }

    /**
     * Tests the setPublierPhotoWeb() method.
     *
     * @return void
     */
    public function testSetPublierPhotoWeb() {

        $obj = new Constantes2();

        $obj->setPublierPhotoWeb(true);
        $this->assertEquals(true, $obj->getPublierPhotoWeb());
    }

    /**
     * Tests the setTypeCritereCouleurBt() method.
     *
     * @return void
     */
    public function testSetTypeCritereCouleurBt() {

        $obj = new Constantes2();

        $obj->setTypeCritereCouleurBt("typeCritereCouleurBt");
        $this->assertEquals("typeCritereCouleurBt", $obj->getTypeCritereCouleurBt());
    }
}
