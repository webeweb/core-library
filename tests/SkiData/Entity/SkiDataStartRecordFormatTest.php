<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\SkiData\Entity;

use DateTime;
use WBW\Library\Core\SkiData\Entity\SkiDataStartRecordFormat;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * SkiData start record format test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Entity
 * @final
 */
final class SkiDataStartRecordFormatTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SkiDataStartRecordFormat();

        $this->assertNull($obj->getCurrency());
        $this->assertNull($obj->getDateFile());
        $this->assertNull($obj->getNumberRecords());
        $this->assertNull($obj->getVersionRecordStructure());
    }

    /**
     * Tests the setCurrency() method.
     *
     * @return void
     */
    public function testSetCurrency() {

        $obj = new SkiDataStartRecordFormat();

        $obj->setCurrency("currency");
        $this->assertEquals("currency", $obj->getCurrency());
    }

    /**
     * Tests the setDateFile() method.
     *
     * @return void
     */
    public function testSetDateFile() {

        $obj = new SkiDataStartRecordFormat();

        $obj->setDateFile(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDateFile()->format("Y-m-d"));
    }

    /**
     * Tests the setNumberRecords() method.
     *
     * @return void
     */
    public function testSetNumberRecords() {

        $obj = new SkiDataStartRecordFormat();

        $obj->setNumberRecords(1);
        $this->assertEquals(1, $obj->getNumberRecords());
    }

    /**
     * Tests the setVersionRecordStructure() method.
     *
     * @return void
     */
    public function testSetVersionRecordStructure() {

        $obj = new SkiDataStartRecordFormat();

        $obj->setVersionRecordStructure(1);
        $this->assertEquals(1, $obj->getVersionRecordStructure());
    }

}
