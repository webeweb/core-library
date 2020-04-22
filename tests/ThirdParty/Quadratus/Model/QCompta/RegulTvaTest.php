<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RegulTva;

/**
 * Regul tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RegulTvaTest extends AbstractTestCase {

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new RegulTva();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setHt() method.
     *
     * @return void
     */
    public function testSetHt() {

        $obj = new RegulTva();

        $obj->setHt(10.092018);
        $this->assertEquals(10.092018, $obj->getHt());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new RegulTva();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLigne() method.
     *
     * @return void
     */
    public function testSetLigne() {

        $obj = new RegulTva();

        $obj->setLigne(10);
        $this->assertEquals(10, $obj->getLigne());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new RegulTva();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTtc() method.
     *
     * @return void
     */
    public function testSetTtc() {

        $obj = new RegulTva();

        $obj->setTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getTtc());
    }

    /**
     * Tests the setTva() method.
     *
     * @return void
     */
    public function testSetTva() {

        $obj = new RegulTva();

        $obj->setTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTva());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new RegulTva();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RegulTva();

        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getHt());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLigne());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTtc());
        $this->assertNull($obj->getTva());
        $this->assertNull($obj->getType());
    }
}
