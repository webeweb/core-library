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

namespace WBW\Library\QueryBuilder\Tests\Model;

use JsonSerializable;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilter;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterSet;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterSetInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder filter set test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderFilterSetTest extends AbstractTestCase {

    /**
     * Test addFilter()
     *
     * @return void
     */
    public function testAddFilter(): void {

        // Set a QueryBuilder filter mock.
        $qbFilter = $this->getMockBuilder(QueryBuilderFilterInterface::class)->getMock();
        $qbFilter->expects($this->any())->method("getId")->willReturn("id");

        $obj = new QueryBuilderFilterSet();

        $this->assertSame($obj, $obj->addFilter($qbFilter));
        $this->assertNull($obj->getDecorator("id"));
        $this->assertSame($qbFilter, $obj->getFilter("id"));
        $this->assertCount(1, $obj->getFilters());
    }

    /**
     * Test addFilter()
     *
     * @return void
     */
    public function testAddFilterWithSameId(): void {

        // Set a QueryBuilder filter mock.
        $qbFilter = $this->getMockBuilder(QueryBuilderFilterInterface::class)->getMock();
        $qbFilter->expects($this->any())->method("getId")->willReturn("id");

        $obj = new QueryBuilderFilterSet();

        $this->assertSame($obj, $obj->addFilter($qbFilter));
        $this->assertSame($obj, $obj->addFilter($qbFilter));
        $this->assertCount(1, $obj->getFilters());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new QueryBuilderFilterSet();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test removeFilter()
     *
     * @return void
     */
    public function testRemoveFilter(): void {

        // Set a QueryBuilder filter mock.
        $qbFilter = $this->getMockBuilder(QueryBuilderFilterInterface::class)->getMock();
        $qbFilter->expects($this->any())->method("getId")->willReturn("id");

        $obj = new QueryBuilderFilterSet();
        $obj->addFilter($qbFilter);

        $this->assertSame($obj, $obj->removeFilter(new QueryBuilderFilter("bad", QueryBuilderTypeInterface::TYPE_INTEGER, [QueryBuilderOperatorInterface::OPERATOR_EQUAL])));
        $this->assertCount(1, $obj->getFilters());

        $this->assertSame($obj, $obj->removeFilter($qbFilter));
        $this->assertCount(0, $obj->getFilters());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QueryBuilderFilterSet();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(QueryBuilderFilterSetInterface::class, $obj);

        $this->assertNull($obj->getDecorator("id"));
        $this->assertNull($obj->getFilter("id"));
        $this->assertEquals([], $obj->getFilters());
    }
}
