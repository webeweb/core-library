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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Etiquettes;

/**
 * Etiquettes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class EtiquettesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new Etiquettes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeBarre() method.
     *
     * @return void
     */
    public function testSetCodeBarre() {

        $obj = new Etiquettes();

        $obj->setCodeBarre("codeBarre");
        $this->assertEquals("codeBarre", $obj->getCodeBarre());
    }

    /**
     * Tests the setCodeCliFour() method.
     *
     * @return void
     */
    public function testSetCodeCliFour() {

        $obj = new Etiquettes();

        $obj->setCodeCliFour("codeCliFour");
        $this->assertEquals("codeCliFour", $obj->getCodeCliFour());
    }

    /**
     * Tests the setCodeModele() method.
     *
     * @return void
     */
    public function testSetCodeModele() {

        $obj = new Etiquettes();

        $obj->setCodeModele("codeModele");
        $this->assertEquals("codeModele", $obj->getCodeModele());
    }

    /**
     * Tests the setEtiqPlus() method.
     *
     * @return void
     */
    public function testSetEtiqPlus() {

        $obj = new Etiquettes();

        $obj->setEtiqPlus(true);
        $this->assertEquals(true, $obj->getEtiqPlus());
    }

    /**
     * Tests the setImprimante() method.
     *
     * @return void
     */
    public function testSetImprimante() {

        $obj = new Etiquettes();

        $obj->setImprimante("imprimante");
        $this->assertEquals("imprimante", $obj->getImprimante());
    }

    /**
     * Tests the setPrixVente() method.
     *
     * @return void
     */
    public function testSetPrixVente() {

        $obj = new Etiquettes();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new Etiquettes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setZone1() method.
     *
     * @return void
     */
    public function testSetZone1() {

        $obj = new Etiquettes();

        $obj->setZone1("zone1");
        $this->assertEquals("zone1", $obj->getZone1());
    }

    /**
     * Tests the setZone10() method.
     *
     * @return void
     */
    public function testSetZone10() {

        $obj = new Etiquettes();

        $obj->setZone10("zone10");
        $this->assertEquals("zone10", $obj->getZone10());
    }

    /**
     * Tests the setZone11() method.
     *
     * @return void
     */
    public function testSetZone11() {

        $obj = new Etiquettes();

        $obj->setZone11("zone11");
        $this->assertEquals("zone11", $obj->getZone11());
    }

    /**
     * Tests the setZone12() method.
     *
     * @return void
     */
    public function testSetZone12() {

        $obj = new Etiquettes();

        $obj->setZone12("zone12");
        $this->assertEquals("zone12", $obj->getZone12());
    }

    /**
     * Tests the setZone13() method.
     *
     * @return void
     */
    public function testSetZone13() {

        $obj = new Etiquettes();

        $obj->setZone13("zone13");
        $this->assertEquals("zone13", $obj->getZone13());
    }

    /**
     * Tests the setZone14() method.
     *
     * @return void
     */
    public function testSetZone14() {

        $obj = new Etiquettes();

        $obj->setZone14("zone14");
        $this->assertEquals("zone14", $obj->getZone14());
    }

    /**
     * Tests the setZone15() method.
     *
     * @return void
     */
    public function testSetZone15() {

        $obj = new Etiquettes();

        $obj->setZone15("zone15");
        $this->assertEquals("zone15", $obj->getZone15());
    }

    /**
     * Tests the setZone2() method.
     *
     * @return void
     */
    public function testSetZone2() {

        $obj = new Etiquettes();

        $obj->setZone2("zone2");
        $this->assertEquals("zone2", $obj->getZone2());
    }

    /**
     * Tests the setZone3() method.
     *
     * @return void
     */
    public function testSetZone3() {

        $obj = new Etiquettes();

        $obj->setZone3("zone3");
        $this->assertEquals("zone3", $obj->getZone3());
    }

    /**
     * Tests the setZone4() method.
     *
     * @return void
     */
    public function testSetZone4() {

        $obj = new Etiquettes();

        $obj->setZone4("zone4");
        $this->assertEquals("zone4", $obj->getZone4());
    }

    /**
     * Tests the setZone5() method.
     *
     * @return void
     */
    public function testSetZone5() {

        $obj = new Etiquettes();

        $obj->setZone5("zone5");
        $this->assertEquals("zone5", $obj->getZone5());
    }

    /**
     * Tests the setZone6() method.
     *
     * @return void
     */
    public function testSetZone6() {

        $obj = new Etiquettes();

        $obj->setZone6("zone6");
        $this->assertEquals("zone6", $obj->getZone6());
    }

    /**
     * Tests the setZone7() method.
     *
     * @return void
     */
    public function testSetZone7() {

        $obj = new Etiquettes();

        $obj->setZone7("zone7");
        $this->assertEquals("zone7", $obj->getZone7());
    }

    /**
     * Tests the setZone8() method.
     *
     * @return void
     */
    public function testSetZone8() {

        $obj = new Etiquettes();

        $obj->setZone8("zone8");
        $this->assertEquals("zone8", $obj->getZone8());
    }

    /**
     * Tests the setZone9() method.
     *
     * @return void
     */
    public function testSetZone9() {

        $obj = new Etiquettes();

        $obj->setZone9("zone9");
        $this->assertEquals("zone9", $obj->getZone9());
    }
}
