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

use WBW\Library\Quadratus\Model\QGI\Etiquettes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Etiquettes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class EtiquettesTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new Etiquettes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeBarre()
     *
     * @return void
     */
    public function testSetCodeBarre(): void {

        $obj = new Etiquettes();

        $obj->setCodeBarre("codeBarre");
        $this->assertEquals("codeBarre", $obj->getCodeBarre());
    }

    /**
     * Tests setCodeCliFour()
     *
     * @return void
     */
    public function testSetCodeCliFour(): void {

        $obj = new Etiquettes();

        $obj->setCodeCliFour("codeCliFour");
        $this->assertEquals("codeCliFour", $obj->getCodeCliFour());
    }

    /**
     * Tests setCodeModele()
     *
     * @return void
     */
    public function testSetCodeModele(): void {

        $obj = new Etiquettes();

        $obj->setCodeModele("codeModele");
        $this->assertEquals("codeModele", $obj->getCodeModele());
    }

    /**
     * Tests setEtiqPlus()
     *
     * @return void
     */
    public function testSetEtiqPlus(): void {

        $obj = new Etiquettes();

        $obj->setEtiqPlus(true);
        $this->assertEquals(true, $obj->getEtiqPlus());
    }

    /**
     * Tests setImprimante()
     *
     * @return void
     */
    public function testSetImprimante(): void {

        $obj = new Etiquettes();

        $obj->setImprimante("imprimante");
        $this->assertEquals("imprimante", $obj->getImprimante());
    }

    /**
     * Tests setPrixVente()
     *
     * @return void
     */
    public function testSetPrixVente(): void {

        $obj = new Etiquettes();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Etiquettes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setZone1()
     *
     * @return void
     */
    public function testSetZone1(): void {

        $obj = new Etiquettes();

        $obj->setZone1("zone1");
        $this->assertEquals("zone1", $obj->getZone1());
    }

    /**
     * Tests setZone10()
     *
     * @return void
     */
    public function testSetZone10(): void {

        $obj = new Etiquettes();

        $obj->setZone10("zone10");
        $this->assertEquals("zone10", $obj->getZone10());
    }

    /**
     * Tests setZone11()
     *
     * @return void
     */
    public function testSetZone11(): void {

        $obj = new Etiquettes();

        $obj->setZone11("zone11");
        $this->assertEquals("zone11", $obj->getZone11());
    }

    /**
     * Tests setZone12()
     *
     * @return void
     */
    public function testSetZone12(): void {

        $obj = new Etiquettes();

        $obj->setZone12("zone12");
        $this->assertEquals("zone12", $obj->getZone12());
    }

    /**
     * Tests setZone13()
     *
     * @return void
     */
    public function testSetZone13(): void {

        $obj = new Etiquettes();

        $obj->setZone13("zone13");
        $this->assertEquals("zone13", $obj->getZone13());
    }

    /**
     * Tests setZone14()
     *
     * @return void
     */
    public function testSetZone14(): void {

        $obj = new Etiquettes();

        $obj->setZone14("zone14");
        $this->assertEquals("zone14", $obj->getZone14());
    }

    /**
     * Tests setZone15()
     *
     * @return void
     */
    public function testSetZone15(): void {

        $obj = new Etiquettes();

        $obj->setZone15("zone15");
        $this->assertEquals("zone15", $obj->getZone15());
    }

    /**
     * Tests setZone2()
     *
     * @return void
     */
    public function testSetZone2(): void {

        $obj = new Etiquettes();

        $obj->setZone2("zone2");
        $this->assertEquals("zone2", $obj->getZone2());
    }

    /**
     * Tests setZone3()
     *
     * @return void
     */
    public function testSetZone3(): void {

        $obj = new Etiquettes();

        $obj->setZone3("zone3");
        $this->assertEquals("zone3", $obj->getZone3());
    }

    /**
     * Tests setZone4()
     *
     * @return void
     */
    public function testSetZone4(): void {

        $obj = new Etiquettes();

        $obj->setZone4("zone4");
        $this->assertEquals("zone4", $obj->getZone4());
    }

    /**
     * Tests setZone5()
     *
     * @return void
     */
    public function testSetZone5(): void {

        $obj = new Etiquettes();

        $obj->setZone5("zone5");
        $this->assertEquals("zone5", $obj->getZone5());
    }

    /**
     * Tests setZone6()
     *
     * @return void
     */
    public function testSetZone6(): void {

        $obj = new Etiquettes();

        $obj->setZone6("zone6");
        $this->assertEquals("zone6", $obj->getZone6());
    }

    /**
     * Tests setZone7()
     *
     * @return void
     */
    public function testSetZone7(): void {

        $obj = new Etiquettes();

        $obj->setZone7("zone7");
        $this->assertEquals("zone7", $obj->getZone7());
    }

    /**
     * Tests setZone8()
     *
     * @return void
     */
    public function testSetZone8(): void {

        $obj = new Etiquettes();

        $obj->setZone8("zone8");
        $this->assertEquals("zone8", $obj->getZone8());
    }

    /**
     * Tests setZone9()
     *
     * @return void
     */
    public function testSetZone9(): void {

        $obj = new Etiquettes();

        $obj->setZone9("zone9");
        $this->assertEquals("zone9", $obj->getZone9());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Etiquettes();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeCliFour());
        $this->assertNull($obj->getCodeModele());
        $this->assertNull($obj->getEtiqPlus());
        $this->assertNull($obj->getImprimante());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getZone1());
        $this->assertNull($obj->getZone10());
        $this->assertNull($obj->getZone11());
        $this->assertNull($obj->getZone12());
        $this->assertNull($obj->getZone13());
        $this->assertNull($obj->getZone14());
        $this->assertNull($obj->getZone15());
        $this->assertNull($obj->getZone2());
        $this->assertNull($obj->getZone3());
        $this->assertNull($obj->getZone4());
        $this->assertNull($obj->getZone5());
        $this->assertNull($obj->getZone6());
        $this->assertNull($obj->getZone7());
        $this->assertNull($obj->getZone8());
        $this->assertNull($obj->getZone9());
    }
}
