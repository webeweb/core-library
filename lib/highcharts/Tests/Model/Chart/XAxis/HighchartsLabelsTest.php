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

namespace WBW\Library\Highcharts\Tests\Model\Chart\XAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 49.0, "distance" => 62.0, "enabled" => false, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 93.0, "reserveSpace" => true, "rotation" => 1.0, "staggerLines" => 71.0, "step" => 54.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => false, "x" => 66.0, "y" => 44.0, "zIndex" => 16.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();
        $obj->setAlign("right");
        $obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);
        $obj->setAutoRotationLimit(49.0);
        $obj->setDistance(62.0);
        $obj->setEnabled(false);
        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setOverflow("justify");
        $obj->setPadding(93.0);
        $obj->setReserveSpace(true);
        $obj->setRotation(1.0);
        $obj->setStaggerLines(71.0);
        $obj->setStep(54.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(false);
        $obj->setX(66.0);
        $obj->setY(44.0);
        $obj->setZIndex(16.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setAlign("center");
        $this->assertEquals("center", $obj->getAlign());

        $obj->setAlign("left");
        $this->assertEquals("left", $obj->getAlign());

        $obj->setAlign("right");
        $this->assertEquals("right", $obj->getAlign());
    }

    /**
     * Tests setAutoRotation()
     *
     * @return void.
     */
    public function testSetAutoRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);
        $this->assertEquals(["autoRotation" => "df2870a8069e229823782cfb008a95ed"], $obj->getAutoRotation());
    }

    /**
     * Tests setAutoRotationLimit()
     *
     * @return void.
     */
    public function testSetAutoRotationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setAutoRotationLimit(66.0);
        $this->assertEquals(66.0, $obj->getAutoRotationLimit());
    }

    /**
     * Tests setDistance()
     *
     * @return void.
     */
    public function testSetDistance(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setDistance(29.0);
        $this->assertEquals(29.0, $obj->getDistance());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setFormat()
     *
     * @return void.
     */
    public function testSetFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $this->assertEquals("1ddcb92ade31c8fbd370001f9b29a7d9", $obj->getFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setOverflow()
     *
     * @return void.
     */
    public function testSetOverflow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setOverflow(null);
        $this->assertNull($obj->getOverflow());

        $obj->setOverflow("justify");
        $this->assertEquals("justify", $obj->getOverflow());
    }

    /**
     * Tests setPadding()
     *
     * @return void.
     */
    public function testSetPadding(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setPadding(96.0);
        $this->assertEquals(96.0, $obj->getPadding());
    }

    /**
     * Tests setReserveSpace()
     *
     * @return void.
     */
    public function testSetReserveSpace(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setReserveSpace(true);
        $this->assertTrue($obj->getReserveSpace());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setRotation(46.0);
        $this->assertEquals(46.0, $obj->getRotation());
    }

    /**
     * Tests setStaggerLines()
     *
     * @return void.
     */
    public function testSetStaggerLines(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setStaggerLines(34.0);
        $this->assertEquals(34.0, $obj->getStaggerLines());
    }

    /**
     * Tests setStep()
     *
     * @return void.
     */
    public function testSetStep(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setStep(41.0);
        $this->assertEquals(41.0, $obj->getStep());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setUseHTML(false);
        $this->assertFalse($obj->getUseHTML());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setX(5.0);
        $this->assertEquals(5.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setY(5.0);
        $this->assertEquals(5.0, $obj->getY());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $obj->setZIndex(72.0);
        $this->assertEquals(72.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();

        $this->assertNull($obj->getAlign());
        $this->assertEquals([-45], $obj->getAutoRotation());
        $this->assertEquals(80, $obj->getAutoRotationLimit());
        $this->assertEquals(15, $obj->getDistance());
        $this->assertTrue($obj->getEnabled());
        $this->assertEquals("{value}", $obj->getFormat());
        $this->assertNull($obj->getFormatter());
        $this->assertNull($obj->getOverflow());
        $this->assertEquals(5, $obj->getPadding());
        $this->assertTrue($obj->getReserveSpace());
        $this->assertEquals(0, $obj->getRotation());
        $this->assertNull($obj->getStaggerLines());
        $this->assertNull($obj->getStep());
        $this->assertEquals(["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], $obj->getStyle());
        $this->assertFalse($obj->getUseHTML());
        $this->assertEquals(0, $obj->getX());
        $this->assertNull($obj->getY());
        $this->assertEquals(7, $obj->getZIndex());
    }
}
