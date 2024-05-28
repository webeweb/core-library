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

namespace WBW\Library\Highcharts\Tests\Model\Chart\YAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts breaks test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsBreaksTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["breakSize" => 1.0, "from" => 17.0, "repeat" => 74.0, "to" => 60.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsBreaks();
        $obj->setBreakSize(1.0);
        $obj->setFrom(17.0);
        $obj->setRepeat(74.0);
        $obj->setTo(60.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBreakSize()
     *
     * @return void.
     */
    public function testSetBreakSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsBreaks();

        $obj->setBreakSize(78.0);
        $this->assertEquals(78.0, $obj->getBreakSize());
    }

    /**
     * Tests setFrom()
     *
     * @return void.
     */
    public function testSetFrom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsBreaks();

        $obj->setFrom(43.0);
        $this->assertEquals(43.0, $obj->getFrom());
    }

    /**
     * Tests setRepeat()
     *
     * @return void.
     */
    public function testSetRepeat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsBreaks();

        $obj->setRepeat(94.0);
        $this->assertEquals(94.0, $obj->getRepeat());
    }

    /**
     * Tests setTo()
     *
     * @return void.
     */
    public function testSetTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsBreaks();

        $obj->setTo(27.0);
        $this->assertEquals(27.0, $obj->getTo());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsBreaks();

        $this->assertEquals(0, $obj->getBreakSize());
        $this->assertNull($obj->getFrom());
        $this->assertEquals(0, $obj->getRepeat());
        $this->assertNull($obj->getTo());
    }
}
