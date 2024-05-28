<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\PointageSynchroSupprime;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Pointage synchro supprime test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointageSynchroSupprimeTest extends AbstractTestCase {

    /**
     * Test setCleEnreg()
     *
     * @return void
     */
    public function testSetCleEnreg(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setCleEnreg("cleEnreg");
        $this->assertEquals("cleEnreg", $obj->getCleEnreg());
    }

    /**
     * Test setCreeParGenPrev()
     *
     * @return void
     */
    public function testSetCreeParGenPrev(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setCreeParGenPrev(true);
        $this->assertTrue($obj->getCreeParGenPrev());
    }

    /**
     * Test setNomTable()
     *
     * @return void
     */
    public function testSetNomTable(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setNomTable("nomTable");
        $this->assertEquals("nomTable", $obj->getNomTable());
    }

    /**
     * Test setTimeSuppression()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetTimeSuppression(): void {

        // Set a Date/time mock.
        $timeSuppression = new DateTime("2018-09-10");

        $obj = new PointageSynchroSupprime();

        $obj->setTimeSuppression($timeSuppression);
        $this->assertSame($timeSuppression, $obj->getTimeSuppression());
    }

    /**
     * Test setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointageSynchroSupprime();

        $this->assertNull($obj->getCleEnreg());
        $this->assertNull($obj->getCreeParGenPrev());
        $this->assertNull($obj->getNomTable());
        $this->assertNull($obj->getTimeSuppression());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
