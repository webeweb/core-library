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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Responsive;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts rules test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Responsive
 * @version 5.0.14
 */
class HighchartsRulesTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "condition" => ["condition" => "3f9178c25b78ed8bed19091bcb62e266"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules();
        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);
        $obj->setCondition(["condition" => "3f9178c25b78ed8bed19091bcb62e266"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setChartOptions()
     *
     * @return void.
     */
    public function testSetChartOptions(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules();

        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);
        $this->assertEquals(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], $obj->getChartOptions());
    }

    /**
     * Tests setCondition()
     *
     * @return void.
     */
    public function testSetCondition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules();

        $obj->setCondition(["condition" => "3f9178c25b78ed8bed19091bcb62e266"]);
        $this->assertEquals(["condition" => "3f9178c25b78ed8bed19091bcb62e266"], $obj->getCondition());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules();

        $this->assertNull($obj->getChartOptions());
        $this->assertNull($obj->getCondition());
    }
}
