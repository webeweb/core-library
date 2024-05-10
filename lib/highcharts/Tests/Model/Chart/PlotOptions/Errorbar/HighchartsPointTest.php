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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Errorbar;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts point test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Errorbar
 * @version 5.0.14
 */
class HighchartsPointTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\Point\HighchartsEvents();

        $exp = ["events" => $events->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();
        $obj->setEvents($events);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\Point\HighchartsEvents::class, $res);
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\Point\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\Point\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();

        $this->assertNull($obj->getEvents());
    }
}
