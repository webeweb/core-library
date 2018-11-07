<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\SkiData\Parser;

use DateTime;
use Exception;
use WBW\Library\Core\Exception\SkiData\SkiDataTooLongDataException;
use WBW\Library\Core\SkiData\Entity\SkiDataStartRecordFormat;
use WBW\Library\Core\SkiData\Parser\SkiDataStartRecordFormatParser;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * SkiData start record format parser test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Parser
 */
class SkiDataStartRecordFormatParserTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SkiDataStartRecordFormatParser();

        $this->assertNull($obj->getStartRecordFormat());

        $res = new SkiDataStartRecordFormat();
        $obj->setStartRecordFormat($res);
        $this->assertEquals($res, $obj->getStartRecordFormat());
    }

    /**
     * Tests the parseEntity() method.
     *
     * @return void
     */
    public function testParseEntity() {

        $obj = new SkiDataStartRecordFormat();
        $obj->setVersionRecordStructure(190000);
        $obj->setFacilityNumber(202747);
        $obj->setDateFile(new DateTime("2017-09-21 16:10:00"));
        $obj->setNumberRecords(18);
        $obj->setCurrency("EUR");

        $res = '190000;0202747;20170921;00018;"EUR"';
        $this->assertEquals($res, (new SkiDataStartRecordFormatParser())->parseEntity($obj));
    }

    /**
     * Tests the parseEntity() method.
     *
     * @return void
     */
    public function testParseEntityWithSkiDataTooLongException() {

        $obj = new SkiDataStartRecordFormat();
        $obj->setVersionRecordStructure(190000);
        $obj->setFacilityNumber(202747);
        $obj->setDateFile(new DateTime("2017-09-21 16:10:00"));
        $obj->setNumberRecords(18);
        $obj->setCurrency("EUR");

        try {

            $obj->setVersionRecordStructure(2000000);
            (new SkiDataStartRecordFormatParser())->parseEntity($obj);
        } catch (Exception $ex) {

            $this->assertInstanceOf(SkiDataTooLongDataException::class, $ex);
            $this->assertEquals("The data \"2000000\" exceeds the length \"6\" allowed", $ex->getMessage());
        }

        try {

            $obj->setVersionRecordStructure(190000);
            $obj->setCurrency("Exception");
            (new SkiDataStartRecordFormatParser())->parseEntity($obj);
        } catch (Exception $ex) {

            $this->assertInstanceOf(SkiDataTooLongDataException::class, $ex);
            $this->assertEquals("The data \"Exception\" exceeds the length \"6\" allowed", $ex->getMessage());
        }
    }

    /**
     * Tests the parseLine() method.
     *
     * @return void
     */
    public function testParseLine() {

        $res = '190000;0202747;20170921;00018;"EUR"';

        $obj = (new SkiDataStartRecordFormatParser())->parseLine($res);
        $this->assertEquals(190000, $obj->getVersionRecordStructure());
        $this->assertEquals(202747, $obj->getFacilityNumber());
        $this->assertEquals(new DateTime("2017-09-21 00:00:00"), $obj->getDateFile());
        $this->assertEquals(18, $obj->getNumberRecords());
        $this->assertEquals("EUR", $obj->getCurrency());
    }

}
