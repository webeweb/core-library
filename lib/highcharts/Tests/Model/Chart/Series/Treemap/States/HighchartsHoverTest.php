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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Treemap\States;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Treemap\States
 * @version 5.0.14
 */
class HighchartsHoverTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["animation" => "6f1c25ed1523962f1bbf9dee9be5092b", "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 88.0, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => true, "opacity" => 53.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();
        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $obj->setBrightness(88.0);
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setEnabled(true);
        $obj->setOpacity(53.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $this->assertEquals("6f1c25ed1523962f1bbf9dee9be5092b", $obj->getAnimation());
    }

    /**
     * Tests setBorderColor()
     *
     * @return void.
     */
    public function testSetBorderColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");
        $this->assertEquals("97da935a74593c55d78be9d1295aa994", $obj->getBorderColor());
    }

    /**
     * Tests setBrightness()
     *
     * @return void.
     */
    public function testSetBrightness(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $obj->setBrightness(43.0);
        $this->assertEquals(43.0, $obj->getBrightness());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $obj->setEnabled(false);
        $this->assertFalse($obj->getEnabled());
    }

    /**
     * Tests setOpacity()
     *
     * @return void.
     */
    public function testSetOpacity(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $obj->setOpacity(99.0);
        $this->assertEquals(99.0, $obj->getOpacity());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\States\HighchartsHover();

        $this->assertEquals("{ \"duration\": 50 }", $obj->getAnimation());
        $this->assertNull($obj->getBorderColor());
        $this->assertEquals(0.1, $obj->getBrightness());
        $this->assertNull($obj->getColor());
        $this->assertTrue($obj->getEnabled());
        $this->assertEquals(0.75, $obj->getOpacity());
    }
}
