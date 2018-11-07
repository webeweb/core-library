<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use WBW\Library\Core\Quadratus\Model\Proprete\Constantes2;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Constantes2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class Constantes2Test extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Constantes2();

        $this->assertNull($obj->getFormatDuree());
        $this->assertNull($obj->getJoursCPADeduire());
        $this->assertNull($obj->getNbDecimalesDuree());
        $this->assertNull($obj->getNumCritereBTBool1());
        $this->assertNull($obj->getNumCritereBTBool2());
        $this->assertNull($obj->getNumCritereBTByte1());
        $this->assertNull($obj->getNumCritereBTLst1());
        $this->assertNull($obj->getNumCritereBTLst2());
        $this->assertNull($obj->getNumCritereBTTxt1());
        $this->assertNull($obj->getNumCritereBTTxt2());
        $this->assertNull($obj->getNumCritereCouleurBT());
        $this->assertNull($obj->getNumCritereDATxt1());
        $this->assertNull($obj->getNumCritereReclaLst1());
        $this->assertNull($obj->getNumCritereReclaLst2());
        $this->assertNull($obj->getPublierPhotoWeb());
        $this->assertNull($obj->getTypeCritereCouleurBT());
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
     * Tests the setJoursCPADeduire() method.
     *
     * @return void
     */
    public function testSetJoursCPADeduire() {

        $obj = new Constantes2();

        $obj->setJoursCPADeduire(true);
        $this->assertEquals(true, $obj->getJoursCPADeduire());
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
     * Tests the setNumCritereBTBool1() method.
     *
     * @return void
     */
    public function testSetNumCritereBTBool1() {

        $obj = new Constantes2();

        $obj->setNumCritereBTBool1("numCritereBTBool1");
        $this->assertEquals("numCritereBTBool1", $obj->getNumCritereBTBool1());
    }

    /**
     * Tests the setNumCritereBTBool2() method.
     *
     * @return void
     */
    public function testSetNumCritereBTBool2() {

        $obj = new Constantes2();

        $obj->setNumCritereBTBool2("numCritereBTBool2");
        $this->assertEquals("numCritereBTBool2", $obj->getNumCritereBTBool2());
    }

    /**
     * Tests the setNumCritereBTByte1() method.
     *
     * @return void
     */
    public function testSetNumCritereBTByte1() {

        $obj = new Constantes2();

        $obj->setNumCritereBTByte1("numCritereBTByte1");
        $this->assertEquals("numCritereBTByte1", $obj->getNumCritereBTByte1());
    }

    /**
     * Tests the setNumCritereBTLst1() method.
     *
     * @return void
     */
    public function testSetNumCritereBTLst1() {

        $obj = new Constantes2();

        $obj->setNumCritereBTLst1("numCritereBTLst1");
        $this->assertEquals("numCritereBTLst1", $obj->getNumCritereBTLst1());
    }

    /**
     * Tests the setNumCritereBTLst2() method.
     *
     * @return void
     */
    public function testSetNumCritereBTLst2() {

        $obj = new Constantes2();

        $obj->setNumCritereBTLst2("numCritereBTLst2");
        $this->assertEquals("numCritereBTLst2", $obj->getNumCritereBTLst2());
    }

    /**
     * Tests the setNumCritereBTTxt1() method.
     *
     * @return void
     */
    public function testSetNumCritereBTTxt1() {

        $obj = new Constantes2();

        $obj->setNumCritereBTTxt1("numCritereBTTxt1");
        $this->assertEquals("numCritereBTTxt1", $obj->getNumCritereBTTxt1());
    }

    /**
     * Tests the setNumCritereBTTxt2() method.
     *
     * @return void
     */
    public function testSetNumCritereBTTxt2() {

        $obj = new Constantes2();

        $obj->setNumCritereBTTxt2("numCritereBTTxt2");
        $this->assertEquals("numCritereBTTxt2", $obj->getNumCritereBTTxt2());
    }

    /**
     * Tests the setNumCritereCouleurBT() method.
     *
     * @return void
     */
    public function testSetNumCritereCouleurBT() {

        $obj = new Constantes2();

        $obj->setNumCritereCouleurBT("numCritereCouleurBT");
        $this->assertEquals("numCritereCouleurBT", $obj->getNumCritereCouleurBT());
    }

    /**
     * Tests the setNumCritereDATxt1() method.
     *
     * @return void
     */
    public function testSetNumCritereDATxt1() {

        $obj = new Constantes2();

        $obj->setNumCritereDATxt1("numCritereDATxt1");
        $this->assertEquals("numCritereDATxt1", $obj->getNumCritereDATxt1());
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
     * Tests the setTypeCritereCouleurBT() method.
     *
     * @return void
     */
    public function testSetTypeCritereCouleurBT() {

        $obj = new Constantes2();

        $obj->setTypeCritereCouleurBT("typeCritereCouleurBT");
        $this->assertEquals("typeCritereCouleurBT", $obj->getTypeCritereCouleurBT());
    }

}
