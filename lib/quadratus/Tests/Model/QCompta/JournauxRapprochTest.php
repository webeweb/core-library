<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\JournauxRapproch;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Journaux rapproch test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class JournauxRapprochTest extends AbstractTestCase {

    /**
     * Test setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new JournauxRapproch();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Test setMethode()
     *
     * @return void
     */
    public function testSetMethode(): void {

        $obj = new JournauxRapproch();

        $obj->setMethode("methode");
        $this->assertEquals("methode", $obj->getMethode());
    }

    /**
     * Test setNePasSaisirSoldeFin()
     *
     * @return void
     */
    public function testSetNePasSaisirSoldeFin(): void {

        $obj = new JournauxRapproch();

        $obj->setNePasSaisirSoldeFin(true);
        $this->assertTrue($obj->getNePasSaisirSoldeFin());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new JournauxRapproch();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setSoldeFin()
     *
     * @return void
     */
    public function testSetSoldeFin(): void {

        $obj = new JournauxRapproch();

        $obj->setSoldeFin(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeFin());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new JournauxRapproch();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getMethode());
        $this->assertNull($obj->getNePasSaisirSoldeFin());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSoldeFin());
    }
}
