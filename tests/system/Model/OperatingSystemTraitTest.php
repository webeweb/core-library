<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Model;

use WBW\Library\System\Model\OperatingSystemInterface;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\System\Tests\Fixtures\Model\TestOperatingSystemTrait;

/**
 * Operating system trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class OperatingSystemTraitTest extends AbstractTestCase {

    /**
     * Tests setOperatingSystem()
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
