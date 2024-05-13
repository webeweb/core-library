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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Pane;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts background test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Pane
 * @version 5.0.14
 */
class HighchartsBackgroundTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 22.0, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => "4af6d1c19dac6f0e026e724be31aa5f6", "outerRadius" => "fcbebf64e522be59666d285fa4c098b1", "shape" => "arc"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();
        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderWidth(22.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setInnerRadius("4af6d1c19dac6f0e026e724be31aa5f6");
        $obj->setOuterRadius("fcbebf64e522be59666d285fa4c098b1");
        $obj->setShape("arc");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBackgroundColor()
     *
     * @return void.
     */
    public function testSetBackgroundColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");
        $this->assertEquals("930f2a43179a7ae5fc25ed873223e99f", $obj->getBackgroundColor());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setBorderWidth(28.0);
        $this->assertEquals(28.0, $obj->getBorderWidth());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setInnerRadius()
     *
     * @return void.
     */
    public function testSetInnerRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setInnerRadius("4af6d1c19dac6f0e026e724be31aa5f6");
        $this->assertEquals("4af6d1c19dac6f0e026e724be31aa5f6", $obj->getInnerRadius());
    }

    /**
     * Tests setOuterRadius()
     *
     * @return void.
     */
    public function testSetOuterRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setOuterRadius("fcbebf64e522be59666d285fa4c098b1");
        $this->assertEquals("fcbebf64e522be59666d285fa4c098b1", $obj->getOuterRadius());
    }

    /**
     * Tests setShape()
     *
     * @return void.
     */
    public function testSetShape(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $obj->setShape("arc");
        $this->assertEquals("arc", $obj->getShape());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground();

        $this->assertNull($obj->getBackgroundColor());
        $this->assertEquals("#cccccc", $obj->getBorderColor());
        $this->assertEquals(1, $obj->getBorderWidth());
        $this->assertEquals("highcharts-pane", $obj->getClassName());
        $this->assertEquals("0", $obj->getInnerRadius());
        $this->assertEquals("105%", $obj->getOuterRadius());
        $this->assertEquals("solid", $obj->getShape());
    }
}
