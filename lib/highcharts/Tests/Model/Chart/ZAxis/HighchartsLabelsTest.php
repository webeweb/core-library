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

namespace WBW\Library\Highcharts\Tests\Model\Chart\ZAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts labels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\ZAxis
 * @version 5.0.14
 */
class HighchartsLabelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 92.0, "distance" => 64.0, "enabled" => false, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 58.0, "reserveSpace" => false, "rotation" => 62.0, "staggerLines" => 5.0, "step" => 70.0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => true, "x" => 78.0, "y" => 50.0, "zIndex" => 0.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();
        $obj->setAlign("right");
        $obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);
        $obj->setAutoRotationLimit(92.0);
        $obj->setDistance(64.0);
        $obj->setEnabled(false);
        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $obj->setOverflow("justify");
        $obj->setPadding(58.0);
        $obj->setReserveSpace(false);
        $obj->setRotation(62.0);
        $obj->setStaggerLines(5.0);
        $obj->setStep(70.0);
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $obj->setUseHTML(true);
        $obj->setX(78.0);
        $obj->setY(50.0);
        $obj->setZIndex(0.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);
        $this->assertEquals(["autoRotation" => "df2870a8069e229823782cfb008a95ed"], $obj->getAutoRotation());
    }

    /**
     * Tests setAutoRotationLimit()
     *
     * @return void.
     */
    public function testSetAutoRotationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setAutoRotationLimit(42.0);
        $this->assertEquals(42.0, $obj->getAutoRotationLimit());
    }

    /**
     * Tests setDistance()
     *
     * @return void.
     */
    public function testSetDistance(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setDistance(54.0);
        $this->assertEquals(54.0, $obj->getDistance());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setFormat()
     *
     * @return void.
     */
    public function testSetFormat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");
        $this->assertEquals("1ddcb92ade31c8fbd370001f9b29a7d9", $obj->getFormat());
    }

    /**
     * Tests setFormatter()
     *
     * @return void.
     */
    public function testSetFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");
        $this->assertEquals("f2ffc59487832cbad265a8fef2133592", $obj->getFormatter());
    }

    /**
     * Tests setOverflow()
     *
     * @return void.
     */
    public function testSetOverflow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

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

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setPadding(96.0);
        $this->assertEquals(96.0, $obj->getPadding());
    }

    /**
     * Tests setReserveSpace()
     *
     * @return void.
     */
    public function testSetReserveSpace(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setReserveSpace(false);
        $this->assertFalse($obj->getReserveSpace());
    }

    /**
     * Tests setRotation()
     *
     * @return void.
     */
    public function testSetRotation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setRotation(72.0);
        $this->assertEquals(72.0, $obj->getRotation());
    }

    /**
     * Tests setStaggerLines()
     *
     * @return void.
     */
    public function testSetStaggerLines(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setStaggerLines(40.0);
        $this->assertEquals(40.0, $obj->getStaggerLines());
    }

    /**
     * Tests setStep()
     *
     * @return void.
     */
    public function testSetStep(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setStep(42.0);
        $this->assertEquals(42.0, $obj->getStep());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Tests setUseHTML()
     *
     * @return void.
     */
    public function testSetUseHTML(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setUseHTML(true);
        $this->assertTrue($obj->getUseHTML());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setX(0.0);
        $this->assertEquals(0.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setY(56.0);
        $this->assertEquals(56.0, $obj->getY());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

        $obj->setZIndex(86.0);
        $this->assertEquals(86.0, $obj->getZIndex());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsLabels();

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
