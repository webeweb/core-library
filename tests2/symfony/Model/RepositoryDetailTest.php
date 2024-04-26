<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Common\Model\Repository\RepositoryDetailInterface;
use WBW\Library\Symfony\Model\RepositoryDetail;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Repository detail test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryDetailTest extends AbstractTestCase {

    /**
     * Test getAveragePercent()
     *
     * @return void
     */
    public function testGetAveragePercent(): void {

        $obj = new RepositoryDetail();

        $this->assertNull($obj->getAveragePercent());

        $obj->setAvailable(-1);
        $obj->setAverage(null);
        $this->assertNull($obj->getAveragePercent());

        $obj->setAvailable(1);
        $obj->setAverage(null);
        $this->assertNull($obj->getAveragePercent());

        $obj->setAvailable(null);
        $obj->setAverage(1);
        $this->assertNull($obj->getAveragePercent());

        $obj->setAvailable(8);
        $obj->setAverage(3.57);
        $this->assertEquals(44.625, $obj->getAveragePercent());
    }

    /**
     * Test setAvailable()
     *
     * @return void
     */
    public function testSetAvailable(): void {

        $obj = new RepositoryDetail();

        $obj->setAvailable(255);
        $this->assertEquals(255, $obj->getAvailable());
    }

    /**
     * Test setColumn()
     *
     * @return void
     */
    public function testSetColumn(): void {

        $obj = new RepositoryDetail();

        $obj->setColumn("column");
        $this->assertEquals("column", $obj->getColumn());
    }

    /**
     * Test setField()
     *
     * @return void
     */
    public function testSetField(): void {

        $obj = new RepositoryDetail();

        $obj->setField("field");
        $this->assertEquals("field", $obj->getField());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepositoryDetail();

        $this->assertInstanceOf(RepositoryDetailInterface::class, $obj);

        $this->assertNull($obj->getAverage());
        $this->assertNull($obj->getMaximum());
        $this->assertNull($obj->getMinimum());
        $this->assertNull($obj->getRepositoryReport());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getAvailable());
        $this->assertNull($obj->getColumn());
        $this->assertNull($obj->getField());
    }
}
