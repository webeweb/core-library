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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Responsive\Rules;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts condition test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Responsive\Rules
 * @version 5.0.14
 */
class HighchartsConditionTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 14.0, "maxWidth" => 40.0, "minHeight" => 50.0, "minWidth" => 71.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();
        $obj->setCallback("924a8ceeac17f54d3be3f8cdf1c04eb2");
        $obj->setMaxHeight(14.0);
        $obj->setMaxWidth(40.0);
        $obj->setMinHeight(50.0);
        $obj->setMinWidth(71.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setCallback()
     *
     * @return void.
     */
    public function testSetCallback(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();

        $obj->setCallback("924a8ceeac17f54d3be3f8cdf1c04eb2");
        $this->assertEquals("924a8ceeac17f54d3be3f8cdf1c04eb2", $obj->getCallback());
    }

    /**
     * Tests setMaxHeight()
     *
     * @return void.
     */
    public function testSetMaxHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();

        $obj->setMaxHeight(71.0);
        $this->assertEquals(71.0, $obj->getMaxHeight());
    }

    /**
     * Tests setMaxWidth()
     *
     * @return void.
     */
    public function testSetMaxWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();

        $obj->setMaxWidth(90.0);
        $this->assertEquals(90.0, $obj->getMaxWidth());
    }

    /**
     * Tests setMinHeight()
     *
     * @return void.
     */
    public function testSetMinHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();

        $obj->setMinHeight(51.0);
        $this->assertEquals(51.0, $obj->getMinHeight());
    }

    /**
     * Tests setMinWidth()
     *
     * @return void.
     */
    public function testSetMinWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();

        $obj->setMinWidth(51.0);
        $this->assertEquals(51.0, $obj->getMinWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition();

        $this->assertNull($obj->getCallback());
        $this->assertNull($obj->getMaxHeight());
        $this->assertNull($obj->getMaxWidth());
        $this->assertEquals(0, $obj->getMinHeight());
        $this->assertEquals(0, $obj->getMinWidth());
    }
}
