<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Model;

use WBW\Library\Common\Model\System\MemoryInterface;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\System\Tests\Fixtures\Model\TestMemoryTrait;

/**
 * Memory trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
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
