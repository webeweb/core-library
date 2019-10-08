<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegularisationAF;

/**
 * Regularisation a f model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegularisationAFTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegularisationAF();

        $this->assertNull($obj->getBaseAF());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getIndiceBulDeb());
        $this->assertNull($obj->getIndiceBulFin());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPerBulDeb());
        $this->assertNull($obj->getPerBulFin());
        $this->assertNull($obj->getPeriode());
    }

    /**
     * Tests the setBaseAF() method.
     *
     * @return void
     */
    public function testSetBaseAF() {

        $obj = new RegularisationAF();

        $obj->setBaseAF(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseAF());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new RegularisationAF();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setIndiceBulDeb() method.
     *
     * @return void
     */
    public function testSetIndiceBulDeb() {

        $obj = new RegularisationAF();

        $obj->setIndiceBulDeb(10);
        $this->assertEquals(10, $obj->getIndiceBulDeb());
    }

    /**
     * Tests the setIndiceBulFin() method.
     *
     * @return void
     */
    public function testSetIndiceBulFin() {

        $obj = new RegularisationAF();

        $obj->setIndiceBulFin(10);
        $this->assertEquals(10, $obj->getIndiceBulFin());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new RegularisationAF();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new RegularisationAF();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPerBulDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerBulDeb() {

        $obj = new RegularisationAF();

        $obj->setPerBulDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerBulDeb());
    }

    /**
     * Tests the setPerBulFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerBulFin() {

        $obj = new RegularisationAF();

        $obj->setPerBulFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerBulFin());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new RegularisationAF();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }
}
