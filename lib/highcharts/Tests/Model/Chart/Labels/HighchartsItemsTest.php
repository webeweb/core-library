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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Labels;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts items test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Labels
 * @version 5.0.14
 */
class HighchartsItemsTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["html" => "fc35fdc70d5fc69d269883a822c7a53e", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems();
        $obj->setHtml("fc35fdc70d5fc69d269883a822c7a53e");
        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setHtml()
     *
     * @return void.
     */
    public function testSetHtml(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems();

        $obj->setHtml("fc35fdc70d5fc69d269883a822c7a53e");
        $this->assertEquals("fc35fdc70d5fc69d269883a822c7a53e", $obj->getHtml());
    }

    /**
     * Tests setStyle()
     *
     * @return void.
     */
    public function testSetStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems();

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);
        $this->assertEquals(["style" => "a1b01e734b573fca08eb1a65e6df9a38"], $obj->getStyle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems();

        $this->assertNull($obj->getHtml());
        $this->assertNull($obj->getStyle());
    }
}
