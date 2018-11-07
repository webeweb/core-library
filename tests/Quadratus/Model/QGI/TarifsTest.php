<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\Tarifs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Tarifs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class TarifsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Tarifs();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getComSurMargeBrute());
        $this->assertNull($obj->getPrixTTC());
        $this->assertNull($obj->getPrixUnitBase());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTypeCodeArticle());
        $this->assertNull($obj->getTypeCodeClient());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new Tarifs();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Tarifs();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Tarifs();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new Tarifs();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setComSurMargeBrute() method.
     *
     * @return void
     */
    public function testSetComSurMargeBrute() {

        $obj = new Tarifs();

        $obj->setComSurMargeBrute(true);
        $this->assertEquals(true, $obj->getComSurMargeBrute());
    }

    /**
     * Tests the setPrixTTC() method.
     *
     * @return void
     */
    public function testSetPrixTTC() {

        $obj = new Tarifs();

        $obj->setPrixTTC(true);
        $this->assertEquals(true, $obj->getPrixTTC());
    }

    /**
     * Tests the setPrixUnitBase() method.
     *
     * @return void
     */
    public function testSetPrixUnitBase() {

        $obj = new Tarifs();

        $obj->setPrixUnitBase(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitBase());
    }

    /**
     * Tests the setTauxCommission() method.
     *
     * @return void
     */
    public function testSetTauxCommission() {

        $obj = new Tarifs();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Tests the setTypeCodeArticle() method.
     *
     * @return void
     */
    public function testSetTypeCodeArticle() {

        $obj = new Tarifs();

        $obj->setTypeCodeArticle("typeCodeArticle");
        $this->assertEquals("typeCodeArticle", $obj->getTypeCodeArticle());
    }

    /**
     * Tests the setTypeCodeClient() method.
     *
     * @return void
     */
    public function testSetTypeCodeClient() {

        $obj = new Tarifs();

        $obj->setTypeCodeClient("typeCodeClient");
        $this->assertEquals("typeCodeClient", $obj->getTypeCodeClient());
    }

}
