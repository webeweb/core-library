<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\System;

use JsonSerializable;
use WBW\Library\Common\Model\System\OperatingSystem;
use WBW\Library\Common\Model\System\OperatingSystemInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Operating system test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class OperatingSystemTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new OperatingSystem();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setCodename()
     *
     * @return void
     */
    public function testSetCodename(): void {

        $obj = new OperatingSystem();

        $obj->setCodename("codename");
        $this->assertEquals("codename", $obj->getCodename());
    }

    /**
     * Test setRelease()
     *
     * @return void
     */
    public function testSetRelease(): void {

        $obj = new OperatingSystem();

        $obj->setRelease("release");
        $this->assertEquals("release", $obj->getRelease());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new OperatingSystem();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(OperatingSystemInterface::class, $obj);

        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getId());

        $this->assertNull($obj->getCodename());
        $this->assertNull($obj->getRelease());
    }
}
