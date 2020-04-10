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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ReintegrationFf;

/**
 * Reintegration ff test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ReintegrationFfTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ReintegrationFf();

        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getIdTableau());
        $this->assertNull($obj->getMttApports());
        $this->assertNull($obj->getMttEmprunts());
        $this->assertNull($obj->getMttPrelev());
        $this->assertNull($obj->getMttTreso());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new ReintegrationFf();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setIdTableau() method.
     *
     * @return void
     */
    public function testSetIdTableau() {

        $obj = new ReintegrationFf();

        $obj->setIdTableau(10);
        $this->assertEquals(10, $obj->getIdTableau());
    }

    /**
     * Tests the setMttApports() method.
     *
     * @return void
     */
    public function testSetMttApports() {

        $obj = new ReintegrationFf();

        $obj->setMttApports(10.092018);
        $this->assertEquals(10.092018, $obj->getMttApports());
    }

    /**
     * Tests the setMttEmprunts() method.
     *
     * @return void
     */
    public function testSetMttEmprunts() {

        $obj = new ReintegrationFf();

        $obj->setMttEmprunts(10.092018);
        $this->assertEquals(10.092018, $obj->getMttEmprunts());
    }

    /**
     * Tests the setMttPrelev() method.
     *
     * @return void
     */
    public function testSetMttPrelev() {

        $obj = new ReintegrationFf();

        $obj->setMttPrelev(10.092018);
        $this->assertEquals(10.092018, $obj->getMttPrelev());
    }

    /**
     * Tests the setMttTreso() method.
     *
     * @return void
     */
    public function testSetMttTreso() {

        $obj = new ReintegrationFf();

        $obj->setMttTreso(10.092018);
        $this->assertEquals(10.092018, $obj->getMttTreso());
    }
}
