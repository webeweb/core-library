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
 * Highcharts events test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsEventsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59", "pointInBreak" => "84525ae3843d52f899c93a7e8d266492", "setExtremes" => "057f72c70fe8778e16e200860308778c"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();
        $obj->setAfterBreaks("2aee0ecaa51b86ca6fb2f52e53055d9c");
        $obj->setAfterSetExtremes("782a209aa49fe0f760e3d9379f843e13");
        $obj->setPointBreak("0b72c42e9ef65da30a50c4374ac0ea59");
        $obj->setPointInBreak("84525ae3843d52f899c93a7e8d266492");
        $obj->setSetExtremes("057f72c70fe8778e16e200860308778c");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAfterBreaks()
     *
     * @return void.
     */
    public function testSetAfterBreaks(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();

        $obj->setAfterBreaks("2aee0ecaa51b86ca6fb2f52e53055d9c");
        $this->assertEquals("2aee0ecaa51b86ca6fb2f52e53055d9c", $obj->getAfterBreaks());
    }

    /**
     * Tests setAfterSetExtremes()
     *
     * @return void.
     */
    public function testSetAfterSetExtremes(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();

        $obj->setAfterSetExtremes("782a209aa49fe0f760e3d9379f843e13");
        $this->assertEquals("782a209aa49fe0f760e3d9379f843e13", $obj->getAfterSetExtremes());
    }

    /**
     * Tests setPointBreak()
     *
     * @return void.
     */
    public function testSetPointBreak(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();

        $obj->setPointBreak("0b72c42e9ef65da30a50c4374ac0ea59");
        $this->assertEquals("0b72c42e9ef65da30a50c4374ac0ea59", $obj->getPointBreak());
    }

    /**
     * Tests setPointInBreak()
     *
     * @return void.
     */
    public function testSetPointInBreak(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();

        $obj->setPointInBreak("84525ae3843d52f899c93a7e8d266492");
        $this->assertEquals("84525ae3843d52f899c93a7e8d266492", $obj->getPointInBreak());
    }

    /**
     * Tests setSetExtremes()
     *
     * @return void.
     */
    public function testSetSetExtremes(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();

        $obj->setSetExtremes("057f72c70fe8778e16e200860308778c");
        $this->assertEquals("057f72c70fe8778e16e200860308778c", $obj->getSetExtremes());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();

        $this->assertNull($obj->getAfterBreaks());
        $this->assertNull($obj->getAfterSetExtremes());
        $this->assertNull($obj->getPointBreak());
        $this->assertNull($obj->getPointInBreak());
        $this->assertNull($obj->getSetExtremes());
    }
}
