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
use WBW\Library\Quadratus\Model\QCompta\ReintegrationFf;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Reintegration ff test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ReintegrationFfTest extends AbstractTestCase {

    /**
     * Tests setDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new ReintegrationFf();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests setIdTableau()
     *
     * @return void
     */
    public function testSetIdTableau(): void {

        $obj = new ReintegrationFf();

        $obj->setIdTableau(10);
        $this->assertEquals(10, $obj->getIdTableau());
    }

    /**
     * Tests setMttApports()
     *
     * @return void
     */
    public function testSetMttApports(): void {

        $obj = new ReintegrationFf();

        $obj->setMttApports(10.092018);
        $this->assertEquals(10.092018, $obj->getMttApports());
    }

    /**
     * Tests setMttEmprunts()
     *
     * @return void
     */
    public function testSetMttEmprunts(): void {

        $obj = new ReintegrationFf();

        $obj->setMttEmprunts(10.092018);
        $this->assertEquals(10.092018, $obj->getMttEmprunts());
    }

    /**
     * Tests setMttPrelev()
     *
     * @return void
     */
    public function testSetMttPrelev(): void {

        $obj = new ReintegrationFf();

        $obj->setMttPrelev(10.092018);
        $this->assertEquals(10.092018, $obj->getMttPrelev());
    }

    /**
     * Tests setMttTreso()
     *
     * @return void
     */
    public function testSetMttTreso(): void {

        $obj = new ReintegrationFf();

        $obj->setMttTreso(10.092018);
        $this->assertEquals(10.092018, $obj->getMttTreso());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ReintegrationFf();

        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getIdTableau());
        $this->assertNull($obj->getMttApports());
        $this->assertNull($obj->getMttEmprunts());
        $this->assertNull($obj->getMttPrelev());
        $this->assertNull($obj->getMttTreso());
    }
}
