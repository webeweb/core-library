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
use WBW\Library\Quadratus\Model\QPaie\EmpReportModulation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp report modulation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpReportModulationTest extends AbstractTestCase {

    /**
     * Tests setDateApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new EmpReportModulation();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpReportModulation();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setReportModAnt()
     *
     * @return void
     */
    public function testSetReportModAnt(): void {

        $obj = new EmpReportModulation();

        $obj->setReportModAnt(10.092018);
        $this->assertEquals(10.092018, $obj->getReportModAnt());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpReportModulation();

        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getReportModAnt());
    }
}
