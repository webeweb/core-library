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
 * Highcharts navigation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart
 * @version 5.0.14
 */
class HighchartsNavigationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $buttonOptions = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $exp = ["buttonOptions" => $buttonOptions->jsonSerialize(), "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"], "menuItemStyle" => ["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"], "menuStyle" => ["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();
        $obj->setButtonOptions($buttonOptions);
        $obj->setMenuItemHoverStyle(["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"]);
        $obj->setMenuItemStyle(["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"]);
        $obj->setMenuStyle(["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newButtonOptions()
     *
     * @return void.
     */
    public function testNewButtonOptions(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $res = $obj->newButtonOptions();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions::class, $res);
    }

    /**
     * Tests setButtonOptions()
     *
     * @return void.
     */
    public function testSetButtonOptions(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions mock.
        $buttonOptions = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $obj->setButtonOptions($buttonOptions);
        $this->assertSame($buttonOptions, $obj->getButtonOptions());
    }

    /**
     * Tests setMenuItemHoverStyle()
     *
     * @return void.
     */
    public function testSetMenuItemHoverStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $obj->setMenuItemHoverStyle(["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"]);
        $this->assertEquals(["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"], $obj->getMenuItemHoverStyle());
    }

    /**
     * Tests setMenuItemStyle()
     *
     * @return void.
     */
    public function testSetMenuItemStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $obj->setMenuItemStyle(["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"]);
        $this->assertEquals(["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"], $obj->getMenuItemStyle());
    }

    /**
     * Tests setMenuStyle()
     *
     * @return void.
     */
    public function testSetMenuStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $obj->setMenuStyle(["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]);
        $this->assertEquals(["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"], $obj->getMenuStyle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();

        $this->assertNull($obj->getButtonOptions());
        $this->assertEquals(["background" => "#335cad", "color" => "#ffffff"], $obj->getMenuItemHoverStyle());
        $this->assertEquals(["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"], $obj->getMenuItemStyle());
        $this->assertEquals(["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"], $obj->getMenuStyle());
    }
}
