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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Chart\ResetZoomButton;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts position test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Chart\ResetZoomButton
 * @version 5.0.14
 */
class HighchartsPositionTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["align" => "f792d1afb0399dce47533bead9d71a8a", "verticalAlign" => "bottom", "x" => 13.0, "y" => 3.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\ResetZoomButton\HighchartsPosition();
        $obj->setAlign("f792d1afb0399dce47533bead9d71a8a");
        $obj->setVerticalAlign("bottom");
        $obj->setX(13.0);
        $obj->setY(3.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAlign()
     *
     * @return void.
     */
    public function testSetAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\ResetZoomButton\HighchartsPosition();

        $obj->setAlign("f792d1afb0399dce47533bead9d71a8a");
        $this->assertEquals("f792d1afb0399dce47533bead9d71a8a", $obj->getAlign());
    }

    /**
     * Tests setVerticalAlign()
     *
     * @return void.
     */
    public function testSetVerticalAlign(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\ResetZoomButton\HighchartsPosition();

        $obj->setVerticalAlign("bottom");
        $this->assertEquals("bottom", $obj->getVerticalAlign());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\ResetZoomButton\HighchartsPosition();

        $obj->setX(92.0);
        $this->assertEquals(92.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\ResetZoomButton\HighchartsPosition();

        $obj->setY(35.0);
        $this->assertEquals(35.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\ResetZoomButton\HighchartsPosition();

        $this->assertNull($obj->getAlign());
        $this->assertEquals("top", $obj->getVerticalAlign());
        $this->assertEquals(-10, $obj->getX());
        $this->assertEquals(10, $obj->getY());
    }
}
