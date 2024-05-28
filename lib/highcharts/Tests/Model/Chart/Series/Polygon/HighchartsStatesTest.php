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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts states test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon
 * @version 5.0.14
 */
class HighchartsStatesTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $hover = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\States\HighchartsHover();

        $exp = ["hover" => $hover->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsStates();
        $obj->setHover($hover);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newHover()
     *
     * @return void.
     */
    public function testNewHover(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsStates();

        $res = $obj->newHover();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Polygon\States\HighchartsHover::class, $res);
    }

    /**
     * Tests setHover()
     *
     * @return void.
     */
    public function testSetHover(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Polygon\States\HighchartsHover mock.
        $hover = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\States\HighchartsHover();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsStates();

        $obj->setHover($hover);
        $this->assertSame($hover, $obj->getHover());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsStates();

        $this->assertNull($obj->getHover());
    }
}
