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

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts drilldown test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsDrilldownTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => false, "animation" => "6f1c25ed1523962f1bbf9dee9be5092b", "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();
        $obj->setActiveAxisLabelStyle(["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"]);
        $obj->setActiveDataLabelStyle(["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"]);
        $obj->setAllowPointDrilldown(false);
        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $obj->setDrillUpButton(["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]);
        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setActiveAxisLabelStyle()
     *
     * @return void.
     */
    public function testSetActiveAxisLabelStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj->setActiveAxisLabelStyle(["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"]);
        $this->assertEquals(["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], $obj->getActiveAxisLabelStyle());
    }

    /**
     * Tests setActiveDataLabelStyle()
     *
     * @return void.
     */
    public function testSetActiveDataLabelStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj->setActiveDataLabelStyle(["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"]);
        $this->assertEquals(["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], $obj->getActiveDataLabelStyle());
    }

    /**
     * Tests setAllowPointDrilldown()
     *
     * @return void.
     */
    public function testSetAllowPointDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj->setAllowPointDrilldown(false);
        $this->assertFalse($obj->getAllowPointDrilldown());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $this->assertEquals("6f1c25ed1523962f1bbf9dee9be5092b", $obj->getAnimation());
    }

    /**
     * Tests setDrillUpButton()
     *
     * @return void.
     */
    public function testSetDrillUpButton(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj->setDrillUpButton(["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]);
        $this->assertEquals(["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"], $obj->getDrillUpButton());
    }

    /**
     * Tests setSeries()
     *
     * @return void.
     */
    public function testSetSeries(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);
        $this->assertEquals(["series" => "bef99584217af744e404ed44a33af589"], $obj->getSeries());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();

        $this->assertEquals(["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], $obj->getActiveAxisLabelStyle());
        $this->assertEquals(["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], $obj->getActiveDataLabelStyle());
        $this->assertTrue($obj->getAllowPointDrilldown());
        $this->assertNull($obj->getAnimation());
        $this->assertNull($obj->getDrillUpButton());
        $this->assertNull($obj->getSeries());
    }
}
