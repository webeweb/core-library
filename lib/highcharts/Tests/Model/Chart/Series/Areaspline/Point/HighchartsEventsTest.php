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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Areaspline\Point;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts events test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Areaspline\Point
 * @version 5.0.14
 */
class HighchartsEventsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42", "unselect" => "223f2d725e5f4ddb92b585d87421adbd", "update" => "3ac340832f29c11538fbe2d6f75e8bcc"];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();
        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");
        $obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");
        $obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");
        $obj->setRemove("0f6969d7052da9261e31ddb6e88c136e");
        $obj->setSelect("99938282f04071859941e18f16efcf42");
        $obj->setUnselect("223f2d725e5f4ddb92b585d87421adbd");
        $obj->setUpdate("3ac340832f29c11538fbe2d6f75e8bcc");

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setClick()
     *
     * @return void.
     */
    public function testSetClick(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");
        $this->assertEquals("a8affc088cbca89fa20dbd98c91362e4", $obj->getClick());
    }

    /**
     * Tests setMouseOut()
     *
     * @return void.
     */
    public function testSetMouseOut(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");
        $this->assertEquals("efc487f286f5bca976fafe58cb6e7895", $obj->getMouseOut());
    }

    /**
     * Tests setMouseOver()
     *
     * @return void.
     */
    public function testSetMouseOver(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");
        $this->assertEquals("1f1a5f011c50a092eb06446d724dd573", $obj->getMouseOver());
    }

    /**
     * Tests setRemove()
     *
     * @return void.
     */
    public function testSetRemove(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setRemove("0f6969d7052da9261e31ddb6e88c136e");
        $this->assertEquals("0f6969d7052da9261e31ddb6e88c136e", $obj->getRemove());
    }

    /**
     * Tests setSelect()
     *
     * @return void.
     */
    public function testSetSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setSelect("99938282f04071859941e18f16efcf42");
        $this->assertEquals("99938282f04071859941e18f16efcf42", $obj->getSelect());
    }

    /**
     * Tests setUnselect()
     *
     * @return void.
     */
    public function testSetUnselect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setUnselect("223f2d725e5f4ddb92b585d87421adbd");
        $this->assertEquals("223f2d725e5f4ddb92b585d87421adbd", $obj->getUnselect());
    }

    /**
     * Tests setUpdate()
     *
     * @return void.
     */
    public function testSetUpdate(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $obj->setUpdate("3ac340832f29c11538fbe2d6f75e8bcc");
        $this->assertEquals("3ac340832f29c11538fbe2d6f75e8bcc", $obj->getUpdate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Areaspline\Point\HighchartsEvents();

        $this->assertNull($obj->getClick());
        $this->assertNull($obj->getMouseOut());
        $this->assertNull($obj->getMouseOver());
        $this->assertNull($obj->getRemove());
        $this->assertNull($obj->getSelect());
        $this->assertNull($obj->getUnselect());
        $this->assertNull($obj->getUpdate());
    }
}
