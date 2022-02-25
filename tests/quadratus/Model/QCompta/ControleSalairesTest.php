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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\ControleSalaires;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Controle salaires test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ControleSalairesTest extends AbstractTestCase {

    /**
     * Tests setBrut()
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new ControleSalaires();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests setCotisPatronales()
     *
     * @return void
     */
    public function testSetCotisPatronales(): void {

        $obj = new ControleSalaires();

        $obj->setCotisPatronales(10.092018);
        $this->assertEquals(10.092018, $obj->getCotisPatronales());
    }

    /**
     * Tests setCotisSalariales()
     *
     * @return void
     */
    public function testSetCotisSalariales(): void {

        $obj = new ControleSalaires();

        $obj->setCotisSalariales(10.092018);
        $this->assertEquals(10.092018, $obj->getCotisSalariales());
    }

    /**
     * Tests setHeures()
     *
     * @return void
     */
    public function testSetHeures(): void {

        $obj = new ControleSalaires();

        $obj->setHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getHeures());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new ControleSalaires();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setPlafond()
     *
     * @return void
     */
    public function testSetPlafond(): void {

        $obj = new ControleSalaires();

        $obj->setPlafond(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ControleSalaires();

        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getCotisPatronales());
        $this->assertNull($obj->getCotisSalariales());
        $this->assertNull($obj->getHeures());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPlafond());
    }
}
