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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Treemap;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts levels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Treemap
 * @version 5.0.14
 */
class HighchartsLevelsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 5.0, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "level" => 32.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBorderDashStyle("8c4e9f2e21a77d83fc413d4c86d1cc81");
        $obj->setBorderWidth(5.0);
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setLayoutAlgorithm("strip");
        $obj->setLayoutStartingDirection("horizontal");
        $obj->setLevel(32.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBorderDashStyle()
     *
     * @return void.
     */
    public function testSetBorderDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setBorderDashStyle("8c4e9f2e21a77d83fc413d4c86d1cc81");
        $this->assertEquals("8c4e9f2e21a77d83fc413d4c86d1cc81", $obj->getBorderDashStyle());
    }

    /**
     * Tests setBorderWidth()
     *
     * @return void.
     */
    public function testSetBorderWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setBorderWidth(68.0);
        $this->assertEquals(68.0, $obj->getBorderWidth());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setLayoutAlgorithm()
     *
     * @return void.
     */
    public function testSetLayoutAlgorithm(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setLayoutAlgorithm("sliceAndDice");
        $this->assertEquals("sliceAndDice", $obj->getLayoutAlgorithm());

        $obj->setLayoutAlgorithm("squarified");
        $this->assertEquals("squarified", $obj->getLayoutAlgorithm());

        $obj->setLayoutAlgorithm("strip");
        $this->assertEquals("strip", $obj->getLayoutAlgorithm());

        $obj->setLayoutAlgorithm("stripes");
        $this->assertEquals("stripes", $obj->getLayoutAlgorithm());
    }

    /**
     * Tests setLayoutStartingDirection()
     *
     * @return void.
     */
    public function testSetLayoutStartingDirection(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setLayoutStartingDirection("horizontal");
        $this->assertEquals("horizontal", $obj->getLayoutStartingDirection());

        $obj->setLayoutStartingDirection("vertical");
        $this->assertEquals("vertical", $obj->getLayoutStartingDirection());
    }

    /**
     * Tests setLevel()
     *
     * @return void.
     */
    public function testSetLevel(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $obj->setLevel(72.0);
        $this->assertEquals(72.0, $obj->getLevel());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\HighchartsLevels();

        $this->assertNull($obj->getBorderColor());
        $this->assertNull($obj->getBorderDashStyle());
        $this->assertNull($obj->getBorderWidth());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getLayoutAlgorithm());
        $this->assertNull($obj->getLayoutStartingDirection());
        $this->assertNull($obj->getLevel());
    }
}
