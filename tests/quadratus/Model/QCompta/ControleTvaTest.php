<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\ControleTva;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Controle tva test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ControleTvaTest extends AbstractTestCase {

    /**
     * Test setCodeCalc()
     *
     * @return void
     */
    public function testSetCodeCalc(): void {

        $obj = new ControleTva();

        $obj->setCodeCalc("codeCalc");
        $this->assertEquals("codeCalc", $obj->getCodeCalc());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new ControleTva();

        $obj->setCodeTva(10.092018);
        $this->assertEquals(10.092018, $obj->getCodeTva());
    }

    /**
     * Test setColonneTaux()
     *
     * @return void
     */
    public function testSetColonneTaux(): void {

        $obj = new ControleTva();

        $obj->setColonneTaux(10);
        $this->assertEquals(10, $obj->getColonneTaux());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ControleTva();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setMttTaux()
     *
     * @return void
     */
    public function testSetMttTaux(): void {

        $obj = new ControleTva();

        $obj->setMttTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getMttTaux());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new ControleTva();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setRacineCpt()
     *
     * @return void
     */
    public function testSetRacineCpt(): void {

        $obj = new ControleTva();

        $obj->setRacineCpt("racineCpt");
        $this->assertEquals("racineCpt", $obj->getRacineCpt());
    }

    /**
     * Test setSaisieManuelle()
     *
     * @return void
     */
    public function testSetSaisieManuelle(): void {

        $obj = new ControleTva();

        $obj->setSaisieManuelle(true);
        $this->assertTrue($obj->getSaisieManuelle());
    }

    /**
     * Test setTypeControle()
     *
     * @return void
     */
    public function testSetTypeControle(): void {

        $obj = new ControleTva();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Test setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new ControleTva();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Test setValeurTaux()
     *
     * @return void
     */
    public function testSetValeurTaux(): void {

        $obj = new ControleTva();

        $obj->setValeurTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurTaux());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ControleTva();

        $this->assertNull($obj->getCodeCalc());
        $this->assertNull($obj->getCodeTva());
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
}
