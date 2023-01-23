<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\RepositoryDetail;
use WBW\Library\Symfony\Model\RepositoryDetailInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Repository detail test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryDetailTest extends AbstractTestCase {

    /**
     * Tests setAvailable()
     *
     * @return void
     */
    public function testSetAvailable(): void {

        $obj = new RepositoryDetail();

        $obj->setAvailable(255);
        $this->assertEquals(255, $obj->getAvailable());
    }

    /**
     * Tests setAverage()
     *
     * @return void
     */
    public function testSetAverage(): void {

        $obj = new RepositoryDetail();

        $obj->setAverage(0.1);
        $this->assertEquals(0.1, $obj->getAverage());
    }

    /**
     * Tests setColumn()
     *
     * @return void
     */
    public function testSetColumn(): void {

        $obj = new RepositoryDetail();

        $obj->setColumn("column");
        $this->assertEquals("column", $obj->getColumn());
    }

    /**
     * Tests setField()
     *
     * @return void
     */
    public function testSetField(): void {

        $obj = new RepositoryDetail();

        $obj->setField("field");
        $this->assertEquals("field", $obj->getField());
    }

    /**
     * Tests setMaximum()
     *
     * @return void
     */
    public function testSetMaximum(): void {

        $obj = new RepositoryDetail();

        $obj->setMaximum(180);
        $this->assertEquals(180, $obj->getMaximum());
    }

    /**
     * Tests setMinimum()
     *
     * @return void
     */
    public function testSetMinimum(): void {

        $obj = new RepositoryDetail();

        $obj->setMinimum(90);
        $this->assertEquals(90, $obj->getMinimum());
    }

    /**
     * Tests __construct()
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

        $this->assertNull($obj->getAvailable());
        $this->assertNull($obj->getColumn());
        $this->assertNull($obj->getField());
    }
}
