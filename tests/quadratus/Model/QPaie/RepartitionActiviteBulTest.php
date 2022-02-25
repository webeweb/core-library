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
use WBW\Library\Quadratus\Model\QPaie\RepartitionActiviteBul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Repartition activite bul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RepartitionActiviteBulTest extends AbstractTestCase {

    /**
     * Tests setCodeService()
     *
     * @return void
     */
    public function testSetCodeService(): void {

        $obj = new RepartitionActiviteBul();

        $obj->setCodeService("codeService");
        $this->assertEquals("codeService", $obj->getCodeService());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new RepartitionActiviteBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActiviteBul();

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

        $obj = new RepartitionActiviteBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setTauxVentilation()
     *
     * @return void
     */
    public function testSetTauxVentilation(): void {

        $obj = new RepartitionActiviteBul();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepartitionActiviteBul();

        $this->assertNull($obj->getCodeService());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxVentilation());
    }
}
