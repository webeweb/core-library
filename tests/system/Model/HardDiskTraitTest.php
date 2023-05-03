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

use WBW\Library\System\Model\HardDiskInterface;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\System\Tests\Fixtures\Model\TestHardDiskTrait;

/**
 * Hard disk trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
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
