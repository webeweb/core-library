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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HSupTepaBul;

/**
 * H sup tepa bul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HSupTepaBulTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new HSupTepaBul();

        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getMtBrutExo());
        $this->assertNull($obj->getMtBrutExoAbat());
        $this->assertNull($obj->getNbJhExo());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentMajo());
        $this->assertNull($obj->getTypeExo());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new HSupTepaBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setMtBrutExo() method.
     *
     * @return void
     */
    public function testSetMtBrutExo() {

        $obj = new HSupTepaBul();

        $obj->setMtBrutExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutExo());
    }

    /**
     * Tests the setMtBrutExoAbat() method.
     *
     * @return void
     */
    public function testSetMtBrutExoAbat() {

        $obj = new HSupTepaBul();

        $obj->setMtBrutExoAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutExoAbat());
    }

    /**
     * Tests the setNbJhExo() method.
     *
     * @return void
     */
    public function testSetNbJhExo() {

        $obj = new HSupTepaBul();

        $obj->setNbJhExo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJhExo());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new HSupTepaBul();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new HSupTepaBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new HSupTepaBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPourcentMajo() method.
     *
     * @return void
     */
    public function testSetPourcentMajo() {

        $obj = new HSupTepaBul();

        $obj->setPourcentMajo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentMajo());
    }

    /**
     * Tests the setTypeExo() method.
     *
     * @return void
     */
    public function testSetTypeExo() {

        $obj = new HSupTepaBul();

        $obj->setTypeExo("typeExo");
        $this->assertEquals("typeExo", $obj->getTypeExo());
    }
}
