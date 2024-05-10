<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 87.0, "endRow" => 60.0, "firstRowAsNames" => true, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 22.0, "startRow" => 84.0, "switchRowsAndColumns" => true, "table" => "aab9e1de16f38176f86d7a92ba337a8d"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();
        $obj->setColumns(["columns" => "54ca84a794888fe8d92834787dfa935a"]);
        $obj->setComplete("d9a22d7a8178d5b42a8750123cbfe5b1");
        $obj->setCsv("628cb5675ff524f3e719b7aa2e88fe3f");
        $obj->setDateFormat("mm/dd/YY");
        $obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");
        $obj->setEndColumn(87.0);
        $obj->setEndRow(60.0);
        $obj->setFirstRowAsNames(true);
        $obj->setGoogleSpreadsheetKey("4c42edbd1e3a85f2857f1e3a5cf3fb59");
        $obj->setGoogleSpreadsheetWorksheet("b1444e571854190993273e8b1f53b89c");
        $obj->setItemDelimiter("2b9ff3bde6b855958954383dc46b1d4f");
        $obj->setLineDelimiter("28e3cbbd23484ddd36f72aa7110ee056");
        $obj->setParseDate("8b186f0402c084188de6f80e91f77984");
        $obj->setParsed("c3732cbf21875cb12763787c984dd68d");
        $obj->setRows(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]);
        $obj->setSeriesMapping(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]);
        $obj->setStartColumn(22.0);
        $obj->setStartRow(84.0);
        $obj->setSwitchRowsAndColumns(true);
        $obj->setTable("aab9e1de16f38176f86d7a92ba337a8d");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setColumns()
     *
     * @return void.
     */
    public function testSetColumns(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setColumns(["columns" => "54ca84a794888fe8d92834787dfa935a"]);
        $this->assertEquals(["columns" => "54ca84a794888fe8d92834787dfa935a"], $obj->getColumns());
    }

    /**
     * Tests setComplete()
     *
     * @return void.
     */
    public function testSetComplete(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setComplete("d9a22d7a8178d5b42a8750123cbfe5b1");
        $this->assertEquals("d9a22d7a8178d5b42a8750123cbfe5b1", $obj->getComplete());
    }

    /**
     * Tests setCsv()
     *
     * @return void.
     */
    public function testSetCsv(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setCsv("628cb5675ff524f3e719b7aa2e88fe3f");
        $this->assertEquals("628cb5675ff524f3e719b7aa2e88fe3f", $obj->getCsv());
    }

    /**
     * Tests setDateFormat()
     *
     * @return void.
     */
    public function testSetDateFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setDateFormat("mm/dd/YY");
        $this->assertEquals("mm/dd/YY", $obj->getDateFormat());
    }

    /**
     * Tests setDecimalPoint()
     *
     * @return void.
     */
    public function testSetDecimalPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");
        $this->assertEquals("7d9af7a21241609a979bda8ca517044c", $obj->getDecimalPoint());
    }

    /**
     * Tests setEndColumn()
     *
     * @return void.
     */
    public function testSetEndColumn(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setEndColumn(17.0);
        $this->assertEquals(17.0, $obj->getEndColumn());
    }

    /**
     * Tests setEndRow()
     *
     * @return void.
     */
    public function testSetEndRow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setEndRow(4.0);
        $this->assertEquals(4.0, $obj->getEndRow());
    }

    /**
     * Tests setFirstRowAsNames()
     *
     * @return void.
     */
    public function testSetFirstRowAsNames(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setFirstRowAsNames(true);
        $this->assertEquals(true, $obj->getFirstRowAsNames());
    }

    /**
     * Tests setGoogleSpreadsheetKey()
     *
     * @return void.
     */
    public function testSetGoogleSpreadsheetKey(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setGoogleSpreadsheetKey("4c42edbd1e3a85f2857f1e3a5cf3fb59");
        $this->assertEquals("4c42edbd1e3a85f2857f1e3a5cf3fb59", $obj->getGoogleSpreadsheetKey());
    }

    /**
     * Tests setGoogleSpreadsheetWorksheet()
     *
     * @return void.
     */
    public function testSetGoogleSpreadsheetWorksheet(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setGoogleSpreadsheetWorksheet("b1444e571854190993273e8b1f53b89c");
        $this->assertEquals("b1444e571854190993273e8b1f53b89c", $obj->getGoogleSpreadsheetWorksheet());
    }

    /**
     * Tests setItemDelimiter()
     *
     * @return void.
     */
    public function testSetItemDelimiter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setItemDelimiter("2b9ff3bde6b855958954383dc46b1d4f");
        $this->assertEquals("2b9ff3bde6b855958954383dc46b1d4f", $obj->getItemDelimiter());
    }

    /**
     * Tests setLineDelimiter()
     *
     * @return void.
     */
    public function testSetLineDelimiter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setLineDelimiter("28e3cbbd23484ddd36f72aa7110ee056");
        $this->assertEquals("28e3cbbd23484ddd36f72aa7110ee056", $obj->getLineDelimiter());
    }

    /**
     * Tests setParseDate()
     *
     * @return void.
     */
    public function testSetParseDate(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setParseDate("8b186f0402c084188de6f80e91f77984");
        $this->assertEquals("8b186f0402c084188de6f80e91f77984", $obj->getParseDate());
    }

    /**
     * Tests setParsed()
     *
     * @return void.
     */
    public function testSetParsed(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setParsed("c3732cbf21875cb12763787c984dd68d");
        $this->assertEquals("c3732cbf21875cb12763787c984dd68d", $obj->getParsed());
    }

    /**
     * Tests setRows()
     *
     * @return void.
     */
    public function testSetRows(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setRows(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]);
        $this->assertEquals(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], $obj->getRows());
    }

    /**
     * Tests setSeriesMapping()
     *
     * @return void.
     */
    public function testSetSeriesMapping(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setSeriesMapping(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]);
        $this->assertEquals(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], $obj->getSeriesMapping());
    }

    /**
     * Tests setStartColumn()
     *
     * @return void.
     */
    public function testSetStartColumn(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setStartColumn(72.0);
        $this->assertEquals(72.0, $obj->getStartColumn());
    }

    /**
     * Tests setStartRow()
     *
     * @return void.
     */
    public function testSetStartRow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setStartRow(11.0);
        $this->assertEquals(11.0, $obj->getStartRow());
    }

    /**
     * Tests setSwitchRowsAndColumns()
     *
     * @return void.
     */
    public function testSetSwitchRowsAndColumns(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setSwitchRowsAndColumns(true);
        $this->assertEquals(true, $obj->getSwitchRowsAndColumns());
    }

    /**
     * Tests setTable()
     *
     * @return void.
     */
    public function testSetTable(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $obj->setTable("aab9e1de16f38176f86d7a92ba337a8d");
        $this->assertEquals("aab9e1de16f38176f86d7a92ba337a8d", $obj->getTable());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();

        $this->assertNull($obj->getColumns());
        $this->assertNull($obj->getComplete());
        $this->assertNull($obj->getCsv());
        $this->assertNull($obj->getDateFormat());
        $this->assertEquals(".", $obj->getDecimalPoint());
        $this->assertNull($obj->getEndColumn());
        $this->assertNull($obj->getEndRow());
        $this->assertEquals(true, $obj->getFirstRowAsNames());
        $this->assertNull($obj->getGoogleSpreadsheetKey());
        $this->assertNull($obj->getGoogleSpreadsheetWorksheet());
        $this->assertNull($obj->getItemDelimiter());
        $this->assertEquals("\\n", $obj->getLineDelimiter());
        $this->assertNull($obj->getParseDate());
        $this->assertNull($obj->getParsed());
        $this->assertNull($obj->getRows());
        $this->assertNull($obj->getSeriesMapping());
        $this->assertEquals(0, $obj->getStartColumn());
        $this->assertEquals(0, $obj->getStartRow());
        $this->assertEquals(false, $obj->getSwitchRowsAndColumns());
        $this->assertNull($obj->getTable());
    }
}
