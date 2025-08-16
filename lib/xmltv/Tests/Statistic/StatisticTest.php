<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Statistic;

use WBW\Library\XmlTv\Statistic\Statistic;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Statistic test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Statistic
 */
class StatisticTest extends AbstractTestCase {

    /**
     * Test add()
     *
     * @return void
     */
    public function testAdd(): void {

        $obj = new Statistic();

        $obj->add("0123456789");
        $this->assertEquals(1, $obj->getCount());
        $this->assertEquals(10, $obj->getMin());
        $this->assertEquals(10, $obj->getMax());
        $this->assertEquals(10, $obj->getAvg());

        $obj->add(null);
        $this->assertEquals(2, $obj->getCount());
        $this->assertEquals(0, $obj->getMin());
        $this->assertEquals(10, $obj->getMax());
        $this->assertEquals(5.0, $obj->getAvg());

        $obj->add("01234567890123456789");
        $this->assertEquals(3, $obj->getCount());
        $this->assertEquals(0, $obj->getMin());
        $this->assertEquals(20, $obj->getMax());
        $this->assertEquals(12.5, $obj->getAvg());
    }

    /**
     * Test setAttrName()
     *
     * @return void
     */
    public function testSetAttrName(): void {

        $obj = new Statistic();

        $obj->setAttrName("attrName");
        $this->assertEquals("attrName", $obj->getAttrName());
    }

    /**
     * Test setAvg()
     *
     * @return void
     */
    public function testSetAvg(): void {

        $obj = new Statistic();

        $obj->setAvg(1.0);
        $this->assertEquals(1.0, $obj->getAvg());
    }

    /**
     * Test setCount()
     *
     * @return void
     */
    public function testSetCount(): void {

        $obj = new Statistic();

        $obj->setCount(100);
        $this->assertEquals(100, $obj->getCount());
    }

    /**
     * Test setMax()
     *
     * @return void
     */
    public function testSetMax(): void {

        $obj = new Statistic();

        $obj->setMax(2);
        $this->assertEquals(2, $obj->getMax());
    }

    /**
     * Test setMin()
     *
     * @return void
     */
    public function testSetMin(): void {

        $obj = new Statistic();

        $obj->setMin(1);
        $this->assertEquals(1, $obj->getMin());
    }

    /**
     * Test setNodeName()
     *
     * @return void
     */
    public function testSetNodeName(): void {

        $obj = new Statistic();

        $obj->setNodeName("nodeName");
        $this->assertEquals("nodeName", $obj->getNodeName());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(" %-' 16s   %-' 19s   % 6d   % 6d   % 6d   %' 9.2f", Statistic::CONTENT_FORMAT);
        $this->assertEquals("------------------ --------------------- -------- -------- -------- -----------", Statistic::HEADER_FORMAT);
        $this->assertEquals(" Node               Attribute             Count    Min      Max      Avg", Statistic::TITLES_FORMAT);

        $obj = new Statistic();

        $this->assertNull($obj->getAttrName());
        $this->assertEquals(0, $obj->getAvg());
        $this->assertEquals(0, $obj->getCount());
        $this->assertEquals(0, $obj->getMax());
        $this->assertNull($obj->getMin());
        $this->assertNull($obj->getNodeName());
    }
}
