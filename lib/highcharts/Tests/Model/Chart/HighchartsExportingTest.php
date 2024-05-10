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
 * Highcharts exporting test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsExportingTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $buttons = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();

        $exp = ["allowHTML" => false, "buttons" => $buttons->jsonSerialize(), "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => true, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => true, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 31.0, "scale" => 86.0, "sourceHeight" => 2.0, "sourceWidth" => 15.0, "type" => "image/svg+xml", "url" => "572d4e421e5e6b9bc11d815e8a027112", "width" => 10.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();
        $obj->setAllowHTML(false);
        $obj->setButtons($buttons);
        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);
        $obj->setEnabled(true);
        $obj->setError("cb5e100e5a9a3e7f6d1fd97512215282");
        $obj->setFallbackToExportServer(true);
        $obj->setFilename("435ed7e9f07f740abf511a62c00eef6e");
        $obj->setFormAttributes(["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]);
        $obj->setLibURL("98a3bf7bf973c3ec4655c15c5a4d650e");
        $obj->setMenuItemDefinitions(["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]);
        $obj->setPrintMaxWidth(31.0);
        $obj->setScale(86.0);
        $obj->setSourceHeight(2.0);
        $obj->setSourceWidth(15.0);
        $obj->setType("image/svg+xml");
        $obj->setUrl("572d4e421e5e6b9bc11d815e8a027112");
        $obj->setWidth(10.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newButtons()
     *
     * @return void.
     */
    public function testNewButtons(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $res = $obj->newButtons();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons::class, $res);
    }

    /**
     * Tests setAllowHTML()
     *
     * @return void.
     */
    public function testSetAllowHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setAllowHTML(false);
        $this->assertEquals(false, $obj->getAllowHTML());
    }

    /**
     * Tests setButtons()
     *
     * @return void.
     */
    public function testSetButtons(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons mock.
        $buttons = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setButtons($buttons);
        $this->assertSame($buttons, $obj->getButtons());
    }

    /**
     * Tests setChartOptions()
     *
     * @return void.
     */
    public function testSetChartOptions(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);
        $this->assertEquals(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], $obj->getChartOptions());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setError()
     *
     * @return void.
     */
    public function testSetError(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setError("cb5e100e5a9a3e7f6d1fd97512215282");
        $this->assertEquals("cb5e100e5a9a3e7f6d1fd97512215282", $obj->getError());
    }

    /**
     * Tests setFallbackToExportServer()
     *
     * @return void.
     */
    public function testSetFallbackToExportServer(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setFallbackToExportServer(true);
        $this->assertEquals(true, $obj->getFallbackToExportServer());
    }

    /**
     * Tests setFilename()
     *
     * @return void.
     */
    public function testSetFilename(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setFilename("435ed7e9f07f740abf511a62c00eef6e");
        $this->assertEquals("435ed7e9f07f740abf511a62c00eef6e", $obj->getFilename());
    }

    /**
     * Tests setFormAttributes()
     *
     * @return void.
     */
    public function testSetFormAttributes(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setFormAttributes(["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]);
        $this->assertEquals(["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], $obj->getFormAttributes());
    }

    /**
     * Tests setLibURL()
     *
     * @return void.
     */
    public function testSetLibURL(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setLibURL("98a3bf7bf973c3ec4655c15c5a4d650e");
        $this->assertEquals("98a3bf7bf973c3ec4655c15c5a4d650e", $obj->getLibURL());
    }

    /**
     * Tests setMenuItemDefinitions()
     *
     * @return void.
     */
    public function testSetMenuItemDefinitions(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setMenuItemDefinitions(["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]);
        $this->assertEquals(["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], $obj->getMenuItemDefinitions());
    }

    /**
     * Tests setPrintMaxWidth()
     *
     * @return void.
     */
    public function testSetPrintMaxWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setPrintMaxWidth(83.0);
        $this->assertEquals(83.0, $obj->getPrintMaxWidth());
    }

    /**
     * Tests setScale()
     *
     * @return void.
     */
    public function testSetScale(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setScale(90.0);
        $this->assertEquals(90.0, $obj->getScale());
    }

    /**
     * Tests setSourceHeight()
     *
     * @return void.
     */
    public function testSetSourceHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setSourceHeight(75.0);
        $this->assertEquals(75.0, $obj->getSourceHeight());
    }

    /**
     * Tests setSourceWidth()
     *
     * @return void.
     */
    public function testSetSourceWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setSourceWidth(79.0);
        $this->assertEquals(79.0, $obj->getSourceWidth());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setType("image/svg+xml");
        $this->assertEquals("image/svg+xml", $obj->getType());
    }

    /**
     * Tests setUrl()
     *
     * @return void.
     */
    public function testSetUrl(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setUrl("572d4e421e5e6b9bc11d815e8a027112");
        $this->assertEquals("572d4e421e5e6b9bc11d815e8a027112", $obj->getUrl());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $obj->setWidth(61.0);
        $this->assertEquals(61.0, $obj->getWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();

        $this->assertEquals(false, $obj->getAllowHTML());
        $this->assertNull($obj->getButtons());
        $this->assertNull($obj->getChartOptions());
        $this->assertEquals(true, $obj->getEnabled());
        $this->assertNull($obj->getError());
        $this->assertEquals(true, $obj->getFallbackToExportServer());
        $this->assertEquals("chart", $obj->getFilename());
        $this->assertNull($obj->getFormAttributes());
        $this->assertEquals("https://code.highcharts.com/{version}/lib", $obj->getLibURL());
        $this->assertNull($obj->getMenuItemDefinitions());
        $this->assertEquals(780, $obj->getPrintMaxWidth());
        $this->assertEquals(2, $obj->getScale());
        $this->assertNull($obj->getSourceHeight());
        $this->assertNull($obj->getSourceWidth());
        $this->assertEquals("image/png", $obj->getType());
        $this->assertEquals("https://export.highcharts.com", $obj->getUrl());
        $this->assertNull($obj->getWidth());
    }
}
