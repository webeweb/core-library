<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
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
     * Tests setCleEnreg()
     *
     * @return void
     */
    public function testSetCleEnreg(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setCleEnreg("cleEnreg");
        $this->assertEquals("cleEnreg", $obj->getCleEnreg());
    }

    /**
     * Tests setCreeParGenPrev()
     *
     * @return void
     */
    public function testSetCreeParGenPrev(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setCreeParGenPrev(true);
        $this->assertEquals(true, $obj->getCreeParGenPrev());
    }

    /**
     * Tests setNomTable()
     *
     * @return void
     */
    public function testSetNomTable(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setNomTable("nomTable");
        $this->assertEquals("nomTable", $obj->getNomTable());
    }

    /**
     * Tests setTimeSuppression()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTimeSuppression(): void {

        // Set a Date/time mock.
        $timeSuppression = new DateTime("2018-09-10");

        $obj = new PointageSynchroSupprime();

        $obj->setTimeSuppression($timeSuppression);
        $this->assertSame($timeSuppression, $obj->getTimeSuppression());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new PointageSynchroSupprime();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
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
