<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Parser;

use DateTime;
use Exception;
use WBW\Library\SkiData\Exception\TooLongDataException;
use WBW\Library\SkiData\Model\StartRecordFormat;
use WBW\Library\SkiData\Parser\StartRecordFormatParser;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Start record format parser test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Parser
 */
class StartRecordFormatParserTest extends AbstractTestCase {

    /**
     * Tests parseEntity()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseEntity(): void {

        $obj = new StartRecordFormat();
        $obj->setVersionRecordStructure(190000);
        $obj->setFacilityNumber(202747);
        $obj->setDateFile(new DateTime("2017-09-21 16:10:00"));
        $obj->setNumberRecords(18);
        $obj->setCurrency("EUR");

        $exp = '190000;0202747;20170921;00018;"EUR"';

        $this->assertEquals($exp, (new StartRecordFormatParser())->parseEntity($obj));
    }

    /**
     * Tests parseEntity()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseEntityWithSkiDataTooLongException(): void {

        $obj = new StartRecordFormat();
        $obj->setVersionRecordStructure(190000);
        $obj->setFacilityNumber(202747);
        $obj->setDateFile(new DateTime("2017-09-21 16:10:00"));
        $obj->setNumberRecords(18);
        $obj->setCurrency("EUR");

        try {

            $obj->setVersionRecordStructure(2000000);
            (new StartRecordFormatParser())->parseEntity($obj);
        } catch (Exception $ex) {

            $this->assertInstanceOf(Exception::class, $ex);
            $this->assertEquals('The data "2000000" exceeds the length "6" allowed', $ex->getMessage());
        }

        try {

            $obj->setVersionRecordStructure(190000);
            $obj->setCurrency("Exception");
            (new StartRecordFormatParser())->parseEntity($obj);
        } catch (Exception $ex) {

            $this->assertInstanceOf(TooLongDataException::class, $ex);
            $this->assertEquals('The data "Exception" exceeds the length "6" allowed', $ex->getMessage());
        }
    }

    /**
     * Tests parseLine()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseLine(): void {

        $arg = '190000;0202747;20170921;00018;"EUR"';

        $obj = (new StartRecordFormatParser())->parseLine($arg);
        $this->assertEquals(190000, $obj->getVersionRecordStructure());
        $this->assertEquals(202747, $obj->getFacilityNumber());
        $this->assertEquals(new DateTime("2017-09-21 00:00:00"), $obj->getDateFile());
        $this->assertEquals(18, $obj->getNumberRecords());
        $this->assertEquals("EUR", $obj->getCurrency());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Start record format mock.
        $startRecordFormat = new StartRecordFormat();

        $obj = new StartRecordFormatParser();

        $this->assertNull($obj->getStartRecordFormat());

        $obj->setStartRecordFormat($startRecordFormat);
        $this->assertEquals($startRecordFormat, $obj->getStartRecordFormat());
    }
}
