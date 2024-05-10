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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Exporting;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts buttons test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Exporting
 * @version 5.0.14
 */
class HighchartsButtonsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $contextButton = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $exp = ["contextButton" => $contextButton->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();
        $obj->setContextButton($contextButton);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newContextButton()
     *
     * @return void.
     */
    public function testNewContextButton(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();

        $res = $obj->newContextButton();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton::class, $res);
    }

    /**
     * Tests setContextButton()
     *
     * @return void.
     */
    public function testSetContextButton(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton mock.
        $contextButton = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();

        $obj->setContextButton($contextButton);
        $this->assertSame($contextButton, $obj->getContextButton());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();

        $this->assertNull($obj->getContextButton());
    }
}
