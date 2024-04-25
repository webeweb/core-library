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

use WBW\Library\System\Model\CpuInterface;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\System\Tests\Fixtures\Model\TestCpuTrait;

/**
 * Current processor usage trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class CpuTraitTest extends AbstractTestCase {

    /**
     * Test setCpu()
     *
     * @return void
     */
    public function testSetCpu(): void {

        // Set a Cpu mock.
        $cpu = $this->getMockBuilder(CpuInterface::class)->getMock();

        $obj = new TestCpuTrait();
        $obj->setCpu($cpu);

        $this->assertSame($cpu, $obj->getCpu());
    }
}
