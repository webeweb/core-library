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

use WBW\Library\Common\Model\System\OperatingSystemInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestOperatingSystemTrait;

/**
 * Operating system trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class OperatingSystemTraitTest extends AbstractTestCase {

    /**
     * Test setOperatingSystem()
     *
     * @return void
     */
    public function testSetOperatingSystem(): void {

        // Set a Operating system mock.
        $operatingSystem = $this->getMockBuilder(OperatingSystemInterface::class)->getMock();

        $obj = new TestOperatingSystemTrait();
        $obj->setOperatingSystem($operatingSystem);

        $this->assertSame($operatingSystem, $obj->getOperatingSystem());
    }
}
