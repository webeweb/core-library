<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Model;

use DateTime;
use Exception;
use WBW\Library\SkiData\Model\StartRecordFormat;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Start record format test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Model
 */
class StartRecordFormatTest extends AbstractTestCase {

    /**
     * Tests setCurrency()
     *
     * @return void
     */
    public function testSetCurrency(): void {

        $obj = new StartRecordFormat();

        $obj->setCurrency("currency");
        $this->assertEquals("currency", $obj->getCurrency());
    }

    /**
     * Tests setDateFile()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFile(): void {

        $obj = new StartRecordFormat();

        $obj->setDateFile(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDateFile()->format("Y-m-d"));
    }

    /**
     * Tests setFacilityNumber()
     *
     * @return void
     */
    public function testSetFacilityNumber(): void {

        $obj = new StartRecordFormat();

        $obj->setFacilityNumber(1);
        $this->assertEquals(1, $obj->getFacilityNumber());
    }

    /**
     * Tests setNumberRecords()
     *
     * @return void
     */
    public function testSetNumberRecords(): void {

        $obj = new StartRecordFormat();

        $obj->setNumberRecords(1);
        $this->assertEquals(1, $obj->getNumberRecords());
    }

    /**
     * Tests setVersionRecordStructure()
     *
     * @return void
     */
    public function testSetVersionRecordStructure(): void {

        $obj = new StartRecordFormat();

        $obj->setVersionRecordStructure(1);
        $this->assertEquals(1, $obj->getVersionRecordStructure());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new StartRecordFormat();

        $this->assertNull($obj->getCurrency());
        $this->assertNull($obj->getDateFile());
        $this->assertNull($obj->getFacilityNumber());
        $this->assertNull($obj->getNumberRecords());
        $this->assertNull($obj->getVersionRecordStructure());
    }
}
