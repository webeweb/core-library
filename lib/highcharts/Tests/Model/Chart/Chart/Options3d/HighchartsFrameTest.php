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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Chart\Options3d;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts frame test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Chart\Options3d
 * @version 5.0.14
 */
class HighchartsFrameTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $back   = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();
        $bottom = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom();
        $side   = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide();

        $exp = ["back" => $back->jsonSerialize(), "bottom" => $bottom->jsonSerialize(), "side" => $side->jsonSerialize(), "top" => ["top" => "b28354b543375bfa94dabaeda722927f"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();
        $obj->setBack($back);
        $obj->setBottom($bottom);
        $obj->setSide($side);
        $obj->setTop(["top" => "b28354b543375bfa94dabaeda722927f"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newBack()
     *
     * @return void.
     */
    public function testNewBack(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $res = $obj->newBack();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack::class, $res);
    }

    /**
     * Tests newBottom()
     *
     * @return void.
     */
    public function testNewBottom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $res = $obj->newBottom();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom::class, $res);
    }

    /**
     * Tests newSide()
     *
     * @return void.
     */
    public function testNewSide(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $res = $obj->newSide();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide::class, $res);
    }

    /**
     * Tests setBack()
     *
     * @return void.
     */
    public function testSetBack(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack mock.
        $back = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $obj->setBack($back);
        $this->assertSame($back, $obj->getBack());
    }

    /**
     * Tests setBottom()
     *
     * @return void.
     */
    public function testSetBottom(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom mock.
        $bottom = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $obj->setBottom($bottom);
        $this->assertSame($bottom, $obj->getBottom());
    }

    /**
     * Tests setSide()
     *
     * @return void.
     */
    public function testSetSide(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide mock.
        $side = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $obj->setSide($side);
        $this->assertSame($side, $obj->getSide());
    }

    /**
     * Tests setTop()
     *
     * @return void.
     */
    public function testSetTop(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $obj->setTop(["top" => "b28354b543375bfa94dabaeda722927f"]);
        $this->assertEquals(["top" => "b28354b543375bfa94dabaeda722927f"], $obj->getTop());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $this->assertNull($obj->getBack());
        $this->assertNull($obj->getBottom());
        $this->assertNull($obj->getSide());
        $this->assertNull($obj->getTop());
    }
}
