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
use WBW\Library\XmlTv\Statistic\Statistics;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Statistic\TestStatistics;

/**
 * Statistics test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Statistic
 */
class StatisticsTest extends AbstractTestCase {

    /**
     * Test getStatistic()
     *
     * @return void
     */
    public function testGetStatistic(): void {

        $obj = new TestStatistics();

        $this->assertArrayNotHasKey("key", $obj->getStatistics());

        $res = $obj->getStatistic("key");
        $this->assertInstanceOf(Statistic::class, $res);

        $this->assertArrayHasKey("key", $obj->getStatistics());
    }

    /**
     * Test parse()
     *
     * @return void
     */
    public function testParse(): void {

        // tv > programme > credits
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7);

        $obj = new Statistics();

        $res = $obj->parse($node)->getStatistics();
        $this->assertCount(13, $res);

        $this->assertArrayHasKey("credits", $res);
        $this->assertEquals("credits", $res["credits"]->getNodeName());
        $this->assertNull($res["credits"]->getAttrName());
        $this->assertEquals(190, $res["credits"]->getAvg());
        $this->assertEquals(1, $res["credits"]->getCount());
        $this->assertEquals(190, $res["credits"]->getMax());
        $this->assertEquals(190, $res["credits"]->getMin());

        $this->assertArrayHasKey("#text", $res);
        $this->assertEquals("#text", $res["#text"]->getNodeName());
        $this->assertNull($res["#text"]->getAttrName());

        $this->assertArrayHasKey("actor", $res);
        $this->assertEquals("actor", $res["actor"]->getNodeName());
        $this->assertNull($res["actor"]->getAttrName());
        $this->assertEquals(5, $res["actor"]->getAvg());
        $this->assertEquals(1, $res["actor"]->getCount());
        $this->assertEquals(5, $res["actor"]->getMax());
        $this->assertEquals(5, $res["actor"]->getMin());

        $this->assertArrayHasKey("actor>role", $res);
        $this->assertEquals("actor", $res["actor>role"]->getNodeName());
        $this->assertEquals("role", $res["actor>role"]->getAttrName());
        $this->assertEquals(4, $res["actor>role"]->getAvg());
        $this->assertEquals(1, $res["actor>role"]->getCount());
        $this->assertEquals(4, $res["actor>role"]->getMax());
        $this->assertEquals(4, $res["actor>role"]->getMin());

        $this->assertArrayHasKey("adapter", $res);
        $this->assertEquals("adapter", $res["adapter"]->getNodeName());
        $this->assertNull($res["adapter"]->getAttrName());
        $this->assertEquals(7, $res["adapter"]->getAvg());
        $this->assertEquals(1, $res["adapter"]->getCount());
        $this->assertEquals(7, $res["adapter"]->getMax());
        $this->assertEquals(7, $res["adapter"]->getMin());

        $this->assertArrayHasKey("commentator", $res);
        $this->assertEquals("commentator", $res["commentator"]->getNodeName());
        $this->assertNull($res["commentator"]->getAttrName());
        $this->assertEquals(11, $res["commentator"]->getAvg());
        $this->assertEquals(1, $res["commentator"]->getCount());
        $this->assertEquals(11, $res["commentator"]->getMax());
        $this->assertEquals(11, $res["commentator"]->getMin());

        $this->assertArrayHasKey("composer", $res);
        $this->assertEquals("composer", $res["composer"]->getNodeName());
        $this->assertNull($res["composer"]->getAttrName());
        $this->assertEquals(8, $res["composer"]->getAvg());
        $this->assertEquals(1, $res["composer"]->getCount());
        $this->assertEquals(8, $res["composer"]->getMax());
        $this->assertEquals(8, $res["composer"]->getMin());

        $this->assertArrayHasKey("director", $res);
        $this->assertEquals("director", $res["director"]->getNodeName());
        $this->assertNull($res["director"]->getAttrName());
        $this->assertEquals(8, $res["director"]->getAvg());
        $this->assertEquals(1, $res["director"]->getCount());
        $this->assertEquals(8, $res["director"]->getMax());
        $this->assertEquals(8, $res["director"]->getMin());

        $this->assertArrayHasKey("editor", $res);
        $this->assertEquals("editor", $res["editor"]->getNodeName());
        $this->assertNull($res["editor"]->getAttrName());
        $this->assertEquals(6, $res["editor"]->getAvg());
        $this->assertEquals(1, $res["editor"]->getCount());
        $this->assertEquals(6, $res["editor"]->getMax());
        $this->assertEquals(6, $res["editor"]->getMin());

        $this->assertArrayHasKey("guest", $res);
        $this->assertEquals("guest", $res["guest"]->getNodeName());
        $this->assertNull($res["guest"]->getAttrName());
        $this->assertEquals(5, $res["guest"]->getAvg());
        $this->assertEquals(1, $res["guest"]->getCount());
        $this->assertEquals(5, $res["guest"]->getMax());
        $this->assertEquals(5, $res["guest"]->getMin());

        $this->assertArrayHasKey("presenter", $res);
        $this->assertEquals("presenter", $res["presenter"]->getNodeName());
        $this->assertNull($res["presenter"]->getAttrName());
        $this->assertEquals(9, $res["presenter"]->getAvg());
        $this->assertEquals(1, $res["presenter"]->getCount());
        $this->assertEquals(9, $res["presenter"]->getMax());
        $this->assertEquals(9, $res["presenter"]->getMin());

        $this->assertArrayHasKey("producer", $res);
        $this->assertEquals("producer", $res["producer"]->getNodeName());
        $this->assertNull($res["producer"]->getAttrName());
        $this->assertEquals(8, $res["producer"]->getAvg());
        $this->assertEquals(1, $res["producer"]->getCount());
        $this->assertEquals(8, $res["producer"]->getMax());
        $this->assertEquals(8, $res["producer"]->getMin());

        $this->assertArrayHasKey("writer", $res);
        $this->assertEquals("writer", $res["writer"]->getNodeName());
        $this->assertNull($res["writer"]->getAttrName());
        $this->assertEquals(6, $res["writer"]->getAvg());
        $this->assertEquals(1, $res["writer"]->getCount());
        $this->assertEquals(6, $res["writer"]->getMax());
        $this->assertEquals(6, $res["writer"]->getMin());
    }

    /**
     * Test __toString()
     *
     * @return void
     */
    public function testToString(): void {

        // tv
        $node = $this->document->documentElement;

        $obj = new Statistics();
        $obj->parse($node);

        $res = file_get_contents(__DIR__ . "/StatisticsTest.testToString.txt");
        $this->assertRegExp("/$res/", $obj->__toString() . "\n");
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Statistics();

        $this->assertEquals([], $obj->getStatistics());
    }
}
