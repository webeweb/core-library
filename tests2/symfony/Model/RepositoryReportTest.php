<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Common\Model\Repository\RepositoryDetailInterface;
use WBW\Library\Common\Model\Repository\RepositoryReportInterface;
use WBW\Library\Symfony\Model\RepositoryReport;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Repository report test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryReportTest extends AbstractTestCase {

    /**
     * Test addDetail()
     *
     * @return void
     */
    public function testAddDetail(): void {

        // Set a Repository detail mock.
        $detail = $this->getMockBuilder(RepositoryDetailInterface::class)->getMock();

        $obj = new RepositoryReport();

        $obj->addDetail($detail);
        $this->assertSame($detail, $obj->getDetails()[0]);
    }

    /**
     * Test setCount()
     *
     * @return void
     */
    public function testSetCount(): void {

        $obj = new RepositoryReport();

        $obj->setCount(1);
        $this->assertEquals(1, $obj->getCount());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepositoryReport();

        $this->assertInstanceOf(RepositoryReportInterface::class, $obj);

        $this->assertNull($obj->getCount());
        $this->assertNull($obj->getEntity());
        $this->assertNull($obj->getTable());

        $this->assertEquals([], $obj->getDetails());
    }
}
