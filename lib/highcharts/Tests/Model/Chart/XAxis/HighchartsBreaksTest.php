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

namespace WBW\Library\Highcharts\Tests\Model\Chart\XAxis;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts breaks test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsBreaksTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["breakSize" => 90.0, "from" => 35.0, "repeat" => 38.0, "to" => 46.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks();
        $obj->setBreakSize(90.0);
        $obj->setFrom(35.0);
        $obj->setRepeat(38.0);
        $obj->setTo(46.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setBreakSize()
     *
     * @return void.
     */
    public function testSetBreakSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks();

        $obj->setBreakSize(90.0);
        $this->assertEquals(90.0, $obj->getBreakSize());
    }

    /**
     * Tests setFrom()
     *
     * @return void.
     */
    public function testSetFrom(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks();

        $obj->setFrom(4.0);
        $this->assertEquals(4.0, $obj->getFrom());
    }

    /**
     * Tests setRepeat()
     *
     * @return void.
     */
    public function testSetRepeat(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks();

        $obj->setRepeat(38.0);
        $this->assertEquals(38.0, $obj->getRepeat());
    }

    /**
     * Tests setTo()
     *
     * @return void.
     */
    public function testSetTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks();

        $obj->setTo(20.0);
        $this->assertEquals(20.0, $obj->getTo());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks();

        $this->assertEquals(0, $obj->getBreakSize());
        $this->assertNull($obj->getFrom());
        $this->assertEquals(0, $obj->getRepeat());
        $this->assertNull($obj->getTo());
    }
}
