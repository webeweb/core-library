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
 * Highcharts global test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Options
 * @version 5.0.14
 */
class HighchartsGlobalTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6", "timezoneOffset" => 11.0, "useUTC" => true];

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();
        $obj->setDate(["Date" => "44749712dbec183e983dcd78a7736c41"]);
        $obj->setVMLRadialGradientURL("4fff8f495410c9be27e06b48ed58de29");
        $obj->setCanvasToolsURL("a676408d51fa75bb7824a5b404b76cd7");
        $obj->setGetTimezoneOffset("bc2cf98d144cf7852b57fe1dc90d1199");
        $obj->setTimezone("b2c6cc48f97ccd71b16d31d88fc177a6");
        $obj->setTimezoneOffset(11.0);
        $obj->setUseUTC(true);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setDate()
     *
     * @return void.
     */
    public function testSetDate(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setDate(["Date" => "44749712dbec183e983dcd78a7736c41"]);
        $this->assertEquals(["Date" => "44749712dbec183e983dcd78a7736c41"], $obj->getDate());
    }

    /**
     * Tests setVMLRadialGradientURL()
     *
     * @return void.
     */
    public function testSetVMLRadialGradientURL(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setVMLRadialGradientURL("4fff8f495410c9be27e06b48ed58de29");
        $this->assertEquals("4fff8f495410c9be27e06b48ed58de29", $obj->getVMLRadialGradientURL());
    }

    /**
     * Tests setCanvasToolsURL()
     *
     * @return void.
     */
    public function testSetCanvasToolsURL(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setCanvasToolsURL("a676408d51fa75bb7824a5b404b76cd7");
        $this->assertEquals("a676408d51fa75bb7824a5b404b76cd7", $obj->getCanvasToolsURL());
    }

    /**
     * Tests setGetTimezoneOffset()
     *
     * @return void.
     */
    public function testSetGetTimezoneOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setGetTimezoneOffset("bc2cf98d144cf7852b57fe1dc90d1199");
        $this->assertEquals("bc2cf98d144cf7852b57fe1dc90d1199", $obj->getGetTimezoneOffset());
    }

    /**
     * Tests setTimezone()
     *
     * @return void.
     */
    public function testSetTimezone(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setTimezone("b2c6cc48f97ccd71b16d31d88fc177a6");
        $this->assertEquals("b2c6cc48f97ccd71b16d31d88fc177a6", $obj->getTimezone());
    }

    /**
     * Tests setTimezoneOffset()
     *
     * @return void.
     */
    public function testSetTimezoneOffset(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setTimezoneOffset(82.0);
        $this->assertEquals(82.0, $obj->getTimezoneOffset());
    }

    /**
     * Tests setUseUTC()
     *
     * @return void.
     */
    public function testSetUseUTC(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $obj->setUseUTC(true);
        $this->assertTrue($obj->getUseUTC());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();

        $this->assertNull($obj->getDate());
        $this->assertEquals("http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", $obj->getVMLRadialGradientURL());
        $this->assertEquals("http://code.highcharts.com/{version}/modules/canvas-tools.js", $obj->getCanvasToolsURL());
        $this->assertNull($obj->getGetTimezoneOffset());
        $this->assertNull($obj->getTimezone());
        $this->assertEquals(0, $obj->getTimezoneOffset());
        $this->assertTrue($obj->getUseUTC());
    }
}
