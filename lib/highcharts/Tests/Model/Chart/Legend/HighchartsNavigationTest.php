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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Legend;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts navigation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Legend
 * @version 5.0.14
 */
class HighchartsNavigationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => "6f1c25ed1523962f1bbf9dee9be5092b", "arrowSize" => 28.0, "enabled" => false, "inactiveColor" => "b3a75fd77d41e4b05a9ca48090851664", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();
        $obj->setActiveColor("e696f1ec7e5059eee9c79e452a2547cd");
        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $obj->setArrowSize(28.0);
        $obj->setEnabled(false);
        $obj->setInactiveColor("b3a75fd77d41e4b05a9ca48090851664");
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setActiveColor()
     *
     * @return void.
     */
    public function testSetActiveColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj->setActiveColor("e696f1ec7e5059eee9c79e452a2547cd");
        $this->assertEquals("e696f1ec7e5059eee9c79e452a2547cd", $obj->getActiveColor());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $this->assertEquals("6f1c25ed1523962f1bbf9dee9be5092b", $obj->getAnimation());
    }

    /**
     * Tests setArrowSize()
     *
     * @return void.
     */
    public function testSetArrowSize(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj->setArrowSize(97.0);
        $this->assertEquals(97.0, $obj->getArrowSize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj->setEnabled(false);
        $this->assertEquals(false, $obj->getEnabled());
    }

    /**
     * Tests setInactiveColor()
     *
     * @return void.
     */
    public function testSetInactiveColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj->setInactiveColor("b3a75fd77d41e4b05a9ca48090851664");
        $this->assertEquals("b3a75fd77d41e4b05a9ca48090851664", $obj->getInactiveColor());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();

        $this->assertEquals("#003399", $obj->getActiveColor());
        $this->assertEquals("true", $obj->getAnimation());
        $this->assertEquals(12, $obj->getArrowSize());
        $this->assertEquals(true, $obj->getEnabled());
        $this->assertEquals("#cccccc", $obj->getInactiveColor());
        $this->assertNull($obj->getStyle());
    }
}
