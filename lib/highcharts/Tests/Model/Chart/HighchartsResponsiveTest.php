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

namespace WBW\Library\Highcharts\Tests\Model\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts responsive test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsResponsiveTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["rules" => ["rules" => "a4f86f7bfc24194b276c22e0ef158197"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive();
        $obj->setRules(["rules" => "a4f86f7bfc24194b276c22e0ef158197"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setRules()
     *
     * @return void.
     */
    public function testSetRules(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive();

        $obj->setRules(["rules" => "a4f86f7bfc24194b276c22e0ef158197"]);
        $this->assertEquals(["rules" => "a4f86f7bfc24194b276c22e0ef158197"], $obj->getRules());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive();

        $this->assertNull($obj->getRules());
    }
}
