<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts accessibility test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsAccessibilityTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["describeSingleSeries" => false, "enabled" => false, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => "97b3936e191a9a3c1eb86ba19c961e92", "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b", "seriesDescriptionFormatter" => "3ce4fcfe8febdd161d40ae4f253e827f"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();
        $obj->setDescribeSingleSeries(false);
        $obj->setEnabled(false);
        $obj->setKeyboardNavigation(["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"]);
        $obj->setOnTableAnchorClick("65528797add8c35fe2ed3ba46ec9e1ee");
        $obj->setPointDateFormat("2a505d87116bc7c91a57716b84e2eb8e");
        $obj->setPointDateFormatter("7f0aa6cf2926725674efea2c087a716e");
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointDescriptionThreshold("97b3936e191a9a3c1eb86ba19c961e92");
        $obj->setScreenReaderSectionFormatter("73356fbe3da4d20b3022c13763b1973b");
        $obj->setSeriesDescriptionFormatter("3ce4fcfe8febdd161d40ae4f253e827f");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setDescribeSingleSeries()
     *
     * @return void.
     */
    public function testSetDescribeSingleSeries(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setDescribeSingleSeries(false);
        $this->assertFalse($obj->getDescribeSingleSeries());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setKeyboardNavigation(["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"]);
        $this->assertEquals(["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], $obj->getKeyboardNavigation());
    }

    /**
     * Tests setOnTableAnchorClick()
     *
     * @return void.
     */
    public function testSetOnTableAnchorClick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setOnTableAnchorClick("65528797add8c35fe2ed3ba46ec9e1ee");
        $this->assertEquals("65528797add8c35fe2ed3ba46ec9e1ee", $obj->getOnTableAnchorClick());
    }

    /**
     * Tests setPointDateFormat()
     *
     * @return void.
     */
    public function testSetPointDateFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setPointDateFormat("2a505d87116bc7c91a57716b84e2eb8e");
        $this->assertEquals("2a505d87116bc7c91a57716b84e2eb8e", $obj->getPointDateFormat());
    }

    /**
     * Tests setPointDateFormatter()
     *
     * @return void.
     */
    public function testSetPointDateFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setPointDateFormatter("7f0aa6cf2926725674efea2c087a716e");
        $this->assertEquals("7f0aa6cf2926725674efea2c087a716e", $obj->getPointDateFormatter());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointDescriptionThreshold()
     *
     * @return void.
     */
    public function testSetPointDescriptionThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setPointDescriptionThreshold("97b3936e191a9a3c1eb86ba19c961e92");
        $this->assertEquals("97b3936e191a9a3c1eb86ba19c961e92", $obj->getPointDescriptionThreshold());
    }

    /**
     * Tests setScreenReaderSectionFormatter()
     *
     * @return void.
     */
    public function testSetScreenReaderSectionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setScreenReaderSectionFormatter("73356fbe3da4d20b3022c13763b1973b");
        $this->assertEquals("73356fbe3da4d20b3022c13763b1973b", $obj->getScreenReaderSectionFormatter());
    }

    /**
     * Tests setSeriesDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetSeriesDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $obj->setSeriesDescriptionFormatter("3ce4fcfe8febdd161d40ae4f253e827f");
        $this->assertEquals("3ce4fcfe8febdd161d40ae4f253e827f", $obj->getSeriesDescriptionFormatter());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();

        $this->assertFalse($obj->getDescribeSingleSeries());
        $this->assertTrue($obj->getEnabled());
        $this->assertNull($obj->getKeyboardNavigation());
        $this->assertNull($obj->getOnTableAnchorClick());
        $this->assertNull($obj->getPointDateFormat());
        $this->assertNull($obj->getPointDateFormatter());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals("30", $obj->getPointDescriptionThreshold());
        $this->assertNull($obj->getScreenReaderSectionFormatter());
        $this->assertNull($obj->getSeriesDescriptionFormatter());
    }
}
