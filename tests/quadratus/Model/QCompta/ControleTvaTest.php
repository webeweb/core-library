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
     * Tests setCodeCalc()
     *
     * @return void
     */
    public function testSetCodeCalc(): void {

        $obj = new ControleTva();

        $obj->setCodeCalc("codeCalc");
        $this->assertEquals("codeCalc", $obj->getCodeCalc());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new ControleTva();

        $obj->setCodeTva(10.092018);
        $this->assertEquals(10.092018, $obj->getCodeTva());
    }

    /**
     * Tests setColonneTaux()
     *
     * @return void
     */
    public function testSetColonneTaux(): void {

        $obj = new ControleTva();

        $obj->setColonneTaux(10);
        $this->assertEquals(10, $obj->getColonneTaux());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ControleTva();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setMttTaux()
     *
     * @return void
     */
    public function testSetMttTaux(): void {

        $obj = new ControleTva();

        $obj->setMttTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getMttTaux());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new ControleTva();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setRacineCpt()
     *
     * @return void
     */
    public function testSetRacineCpt(): void {

        $obj = new ControleTva();

        $obj->setRacineCpt("racineCpt");
        $this->assertEquals("racineCpt", $obj->getRacineCpt());
    }

    /**
     * Tests setSaisieManuelle()
     *
     * @return void
     */
    public function testSetSaisieManuelle(): void {

        $obj = new ControleTva();

        $obj->setSaisieManuelle(true);
        $this->assertEquals(true, $obj->getSaisieManuelle());
    }

    /**
     * Tests setTypeControle()
     *
     * @return void
     */
    public function testSetTypeControle(): void {

        $obj = new ControleTva();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new ControleTva();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests setValeurTaux()
     *
     * @return void
     */
    public function testSetValeurTaux(): void {

        $obj = new ControleTva();

        $obj->setValeurTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurTaux());
    }

    /**
     * Tests __construct()
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
