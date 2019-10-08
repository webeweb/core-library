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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RegulTVA;

/**
 * Regul t v a model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RegulTVATest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegulTVA();

        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getHt());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLigne());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTtc());
        $this->assertNull($obj->getTva());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new RegulTVA();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setHt() method.
     *
     * @return void
     */
    public function testSetHt() {

        $obj = new RegulTVA();

        $obj->setHt(10.092018);
        $this->assertEquals(10.092018, $obj->getHt());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new RegulTVA();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLigne() method.
     *
     * @return void
     */
    public function testSetLigne() {

        $obj = new RegulTVA();

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

        $obj = new RegulTVA();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setTtc() method.
     *
     * @return void
     */
    public function testSetTtc() {

        $obj = new RegulTVA();

        $obj->setTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getTtc());
    }

    /**
     * Tests the setTva() method.
     *
     * @return void
     */
    public function testSetTva() {

        $obj = new RegulTVA();

        $obj->setTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTva());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new RegulTVA();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }
}
