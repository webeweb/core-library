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

use WBW\Library\Common\Model\System\HardDiskInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestHardDiskTrait;

/**
 * Hard disk trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class HardDiskTraitTest extends AbstractTestCase {

    /**
     * Test setHardDisk()
     *
     * @return void
     */
    public function testSetHardDisk(): void {

        // Set a Hard disk mock.
        $hardDisk = $this->getMockBuilder(HardDiskInterface::class)->getMock();

        $obj = new TestHardDiskTrait();
        $obj->setHardDisk($hardDisk);

        $this->assertSame($hardDisk, $obj->getHardDisk());
    }
}
