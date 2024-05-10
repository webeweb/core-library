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

namespace WBW\Library\Highcharts\Tests\Model\Options;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts lang test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Options
 * @version 5.0.14
 */
class HighchartsLangTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 3.0, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], "thousandsSep" => "62ca5281092a9f16f951c5b81a9e25f9", "weekdays" => ["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]];

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();
        $obj->setContextButtonTitle("7a5efd58f7f05365b0f3f4b9573d73a9");
        $obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");
        $obj->setDownloadJPEG("35ef8afd48b58aed282a3dbcc908d9f6");
        $obj->setDownloadPDF("aa023eae5abd2e0879bec81e092e66d5");
        $obj->setDownloadPNG("e1df48f80c5798d2f9c4d6d547716ae0");
        $obj->setDownloadSVG("003855f2b7922a03bcb46e7b43b22bc7");
        $obj->setDrillUpText("7398f774f17ac4f9f0eb0b21c9a88990");
        $obj->setInvalidDate("bdb500c6e404d6c0ca66ff50b8d61885");
        $obj->setLoading("a14fa2166ed698f3d04061f57e5ab9b9");
        $obj->setMonths(["months" => "da36cfaf48b9e19896e23e1207040d1e"]);
        $obj->setNoData("a63552597cd61a815eed873c5235c18e");
        $obj->setNumericSymbolMagnitude(3.0);
        $obj->setNumericSymbols(["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"]);
        $obj->setPrintChart("864d4f633659213ec0e69fc169a4bac1");
        $obj->setResetZoom("3b4f63d9335b37193695773c54d06634");
        $obj->setResetZoomTitle("4644b6dcf8cb64bc947a3d7617d98cdd");
        $obj->setShortMonths(["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"]);
        $obj->setShortWeekdays(["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]);
        $obj->setThousandsSep("62ca5281092a9f16f951c5b81a9e25f9");
        $obj->setWeekdays(["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setContextButtonTitle()
     *
     * @return void.
     */
    public function testSetContextButtonTitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setContextButtonTitle("7a5efd58f7f05365b0f3f4b9573d73a9");
        $this->assertEquals("7a5efd58f7f05365b0f3f4b9573d73a9", $obj->getContextButtonTitle());
    }

    /**
     * Tests setDecimalPoint()
     *
     * @return void.
     */
    public function testSetDecimalPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");
        $this->assertEquals("7d9af7a21241609a979bda8ca517044c", $obj->getDecimalPoint());
    }

    /**
     * Tests setDownloadJPEG()
     *
     * @return void.
     */
    public function testSetDownloadJPEG(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setDownloadJPEG("35ef8afd48b58aed282a3dbcc908d9f6");
        $this->assertEquals("35ef8afd48b58aed282a3dbcc908d9f6", $obj->getDownloadJPEG());
    }

    /**
     * Tests setDownloadPDF()
     *
     * @return void.
     */
    public function testSetDownloadPDF(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setDownloadPDF("aa023eae5abd2e0879bec81e092e66d5");
        $this->assertEquals("aa023eae5abd2e0879bec81e092e66d5", $obj->getDownloadPDF());
    }

    /**
     * Tests setDownloadPNG()
     *
     * @return void.
     */
    public function testSetDownloadPNG(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setDownloadPNG("e1df48f80c5798d2f9c4d6d547716ae0");
        $this->assertEquals("e1df48f80c5798d2f9c4d6d547716ae0", $obj->getDownloadPNG());
    }

    /**
     * Tests setDownloadSVG()
     *
     * @return void.
     */
    public function testSetDownloadSVG(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setDownloadSVG("003855f2b7922a03bcb46e7b43b22bc7");
        $this->assertEquals("003855f2b7922a03bcb46e7b43b22bc7", $obj->getDownloadSVG());
    }

    /**
     * Tests setDrillUpText()
     *
     * @return void.
     */
    public function testSetDrillUpText(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setDrillUpText("7398f774f17ac4f9f0eb0b21c9a88990");
        $this->assertEquals("7398f774f17ac4f9f0eb0b21c9a88990", $obj->getDrillUpText());
    }

    /**
     * Tests setInvalidDate()
     *
     * @return void.
     */
    public function testSetInvalidDate(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setInvalidDate("bdb500c6e404d6c0ca66ff50b8d61885");
        $this->assertEquals("bdb500c6e404d6c0ca66ff50b8d61885", $obj->getInvalidDate());
    }

    /**
     * Tests setLoading()
     *
     * @return void.
     */
    public function testSetLoading(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setLoading("a14fa2166ed698f3d04061f57e5ab9b9");
        $this->assertEquals("a14fa2166ed698f3d04061f57e5ab9b9", $obj->getLoading());
    }

    /**
     * Tests setMonths()
     *
     * @return void.
     */
    public function testSetMonths(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setMonths(["months" => "da36cfaf48b9e19896e23e1207040d1e"]);
        $this->assertEquals(["months" => "da36cfaf48b9e19896e23e1207040d1e"], $obj->getMonths());
    }

    /**
     * Tests setNoData()
     *
     * @return void.
     */
    public function testSetNoData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setNoData("a63552597cd61a815eed873c5235c18e");
        $this->assertEquals("a63552597cd61a815eed873c5235c18e", $obj->getNoData());
    }

    /**
     * Tests setNumericSymbolMagnitude()
     *
     * @return void.
     */
    public function testSetNumericSymbolMagnitude(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setNumericSymbolMagnitude(2.0);
        $this->assertEquals(2.0, $obj->getNumericSymbolMagnitude());
    }

    /**
     * Tests setNumericSymbols()
     *
     * @return void.
     */
    public function testSetNumericSymbols(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setNumericSymbols(["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"]);
        $this->assertEquals(["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], $obj->getNumericSymbols());
    }

    /**
     * Tests setPrintChart()
     *
     * @return void.
     */
    public function testSetPrintChart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setPrintChart("864d4f633659213ec0e69fc169a4bac1");
        $this->assertEquals("864d4f633659213ec0e69fc169a4bac1", $obj->getPrintChart());
    }

    /**
     * Tests setResetZoom()
     *
     * @return void.
     */
    public function testSetResetZoom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setResetZoom("3b4f63d9335b37193695773c54d06634");
        $this->assertEquals("3b4f63d9335b37193695773c54d06634", $obj->getResetZoom());
    }

    /**
     * Tests setResetZoomTitle()
     *
     * @return void.
     */
    public function testSetResetZoomTitle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setResetZoomTitle("4644b6dcf8cb64bc947a3d7617d98cdd");
        $this->assertEquals("4644b6dcf8cb64bc947a3d7617d98cdd", $obj->getResetZoomTitle());
    }

    /**
     * Tests setShortMonths()
     *
     * @return void.
     */
    public function testSetShortMonths(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setShortMonths(["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"]);
        $this->assertEquals(["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], $obj->getShortMonths());
    }

    /**
     * Tests setShortWeekdays()
     *
     * @return void.
     */
    public function testSetShortWeekdays(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setShortWeekdays(["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]);
        $this->assertEquals(["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], $obj->getShortWeekdays());
    }

    /**
     * Tests setThousandsSep()
     *
     * @return void.
     */
    public function testSetThousandsSep(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setThousandsSep("62ca5281092a9f16f951c5b81a9e25f9");
        $this->assertEquals("62ca5281092a9f16f951c5b81a9e25f9", $obj->getThousandsSep());
    }

    /**
     * Tests setWeekdays()
     *
     * @return void.
     */
    public function testSetWeekdays(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $obj->setWeekdays(["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]);
        $this->assertEquals(["weekdays" => "92b9604ffb8fe10577de981be625a6d1"], $obj->getWeekdays());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();

        $this->assertEquals("Chart context menu", $obj->getContextButtonTitle());
        $this->assertEquals(".", $obj->getDecimalPoint());
        $this->assertEquals("Download JPEG image", $obj->getDownloadJPEG());
        $this->assertEquals("Download PDF document", $obj->getDownloadPDF());
        $this->assertEquals("Download PNG image", $obj->getDownloadPNG());
        $this->assertEquals("Download SVG vector image", $obj->getDownloadSVG());
        $this->assertEquals("Back to {series.name}", $obj->getDrillUpText());
        $this->assertNull($obj->getInvalidDate());
        $this->assertEquals("Loading...", $obj->getLoading());
        $this->assertEquals(["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], $obj->getMonths());
        $this->assertEquals("No data to display", $obj->getNoData());
        $this->assertEquals(1000, $obj->getNumericSymbolMagnitude());
        $this->assertEquals(["k", "M", "G", "T", "P", "E"], $obj->getNumericSymbols());
        $this->assertEquals("Print chart", $obj->getPrintChart());
        $this->assertEquals("Reset zoom", $obj->getResetZoom());
        $this->assertEquals("Reset zoom level 1:1", $obj->getResetZoomTitle());
        $this->assertEquals(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], $obj->getShortMonths());
        $this->assertNull($obj->getShortWeekdays());
        $this->assertNull($obj->getThousandsSep());
        $this->assertEquals(["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], $obj->getWeekdays());
    }
}
