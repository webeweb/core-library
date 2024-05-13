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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Line\Data\Marker;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts states test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Line\Data\Marker
 * @version 5.0.14
 */
class HighchartsStatesTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $hover  = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();
        $select = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsSelect();

        $exp = ["hover" => $hover->jsonSerialize(), "select" => $select->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\HighchartsStates();
        $obj->setHover($hover);
        $obj->setSelect($select);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newHover()
     *
     * @return void.
     */
    public function testNewHover(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\HighchartsStates();

        $res = $obj->newHover();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover::class, $res);
    }

    /**
     * Tests newSelect()
     *
     * @return void.
     */
    public function testNewSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\HighchartsStates();

        $res = $obj->newSelect();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsSelect::class, $res);
    }

    /**
     * Tests setHover()
     *
     * @return void.
     */
    public function testSetHover(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover mock.
        $hover = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\HighchartsStates();

        $obj->setHover($hover);
        $this->assertSame($hover, $obj->getHover());
    }

    /**
     * Tests setSelect()
     *
     * @return void.
     */
    public function testSetSelect(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsSelect mock.
        $select = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsSelect();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\HighchartsStates();

        $obj->setSelect($select);
        $this->assertSame($select, $obj->getSelect());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\HighchartsStates();

        $this->assertNull($obj->getHover());
        $this->assertNull($obj->getSelect());
    }
}
