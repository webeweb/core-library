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

use WBW\Library\Common\Model\System\MemoryInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestMemoryTrait;

/**
 * Memory trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class MemoryTraitTest extends AbstractTestCase {

    /**
     * Test setMemory()
     *
     * @return void
     */
    public function testSetMemory(): void {

        // Set a Memory mock.
        $memory = $this->getMockBuilder(MemoryInterface::class)->getMock();

        $obj = new TestMemoryTrait();
        $obj->setMemory($memory);

        $this->assertSame($memory, $obj->getMemory());
    }
}
