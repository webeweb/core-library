<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ControleTVA;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Controle t v a model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ControleTVATest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ControleTVA();

        $this->assertNull($obj->getCodeCalc());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getColonneTaux());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMttTaux());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getRacineCpt());
        $this->assertNull($obj->getSaisieManuelle());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getValeurTaux());
    }

    /**
     * Tests the setCodeCalc() method.
     *
     * @return void
     */
    public function testSetCodeCalc() {

        $obj = new ControleTVA();

        $obj->setCodeCalc("codeCalc");
        $this->assertEquals("codeCalc", $obj->getCodeCalc());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new ControleTVA();

        $obj->setCodeTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getCodeTVA());
    }

    /**
     * Tests the setColonneTaux() method.
     *
     * @return void
     */
    public function testSetColonneTaux() {

        $obj = new ControleTVA();

        $obj->setColonneTaux(10);
        $this->assertEquals(10, $obj->getColonneTaux());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new ControleTVA();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMttTaux() method.
     *
     * @return void
     */
    public function testSetMttTaux() {

        $obj = new ControleTVA();

        $obj->setMttTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getMttTaux());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new ControleTVA();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setRacineCpt() method.
     *
     * @return void
     */
    public function testSetRacineCpt() {

        $obj = new ControleTVA();

        $obj->setRacineCpt("racineCpt");
        $this->assertEquals("racineCpt", $obj->getRacineCpt());
    }

    /**
     * Tests the setSaisieManuelle() method.
     *
     * @return void
     */
    public function testSetSaisieManuelle() {

        $obj = new ControleTVA();

        $obj->setSaisieManuelle(true);
        $this->assertEquals(true, $obj->getSaisieManuelle());
    }

    /**
     * Tests the setTypeControle() method.
     *
     * @return void
     */
    public function testSetTypeControle() {

        $obj = new ControleTVA();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new ControleTVA();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setValeurTaux() method.
     *
     * @return void
     */
    public function testSetValeurTaux() {

        $obj = new ControleTVA();

        $obj->setValeurTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurTaux());
    }
}
