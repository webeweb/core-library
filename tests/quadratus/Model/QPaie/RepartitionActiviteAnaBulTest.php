<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\RepartitionActiviteAnaBul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Repartition activite ana bul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RepartitionActiviteAnaBulTest extends AbstractTestCase {

    /**
     * Tests setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new RepartitionActiviteAnaBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setTauxVentilation()
     *
     * @return void
     */
    public function testSetTauxVentilation(): void {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepartitionActiviteAnaBul();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxVentilation());
    }
}
