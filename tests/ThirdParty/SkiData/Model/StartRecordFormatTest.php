<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\SkiData\Entity;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\SkiData\Model\StartRecordFormat;

/**
 * Start record format test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Entity
 */
class StartRecordFormatTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new StartRecordFormat();

        $this->assertNull($obj->getCurrency());
        $this->assertNull($obj->getDateFile());
        $this->assertNull($obj->getFacilityNumber());
        $this->assertNull($obj->getNumberRecords());
        $this->assertNull($obj->getVersionRecordStructure());
    }

    /**
     * Tests the setCurrency() method.
     *
     * @return void
     */
    public function testSetCurrency() {

        $obj = new StartRecordFormat();

        $obj->setCurrency("currency");
        $this->assertEquals("currency", $obj->getCurrency());
    }

    /**
     * Tests the setDateFile() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFile() {

        $obj = new StartRecordFormat();

        $obj->setDateFile(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDateFile()->format("Y-m-d"));
    }

    /**
     * Tests the setFacilityNumber() method.
     *
     * @return void
     */
    public function testSetFacilityNumber() {

        $obj = new StartRecordFormat();

        $obj->setFacilityNumber(1);
        $this->assertEquals(1, $obj->getFacilityNumber());
    }

    /**
     * Tests the setNumberRecords() method.
     *
     * @return void
     */
    public function testSetNumberRecords() {

        $obj = new StartRecordFormat();

        $obj->setNumberRecords(1);
        $this->assertEquals(1, $obj->getNumberRecords());
    }

    /**
     * Tests the setVersionRecordStructure() method.
     *
     * @return void
     */
    public function testSetVersionRecordStructure() {

        $obj = new StartRecordFormat();

        $obj->setVersionRecordStructure(1);
        $this->assertEquals(1, $obj->getVersionRecordStructure());
    }
}
