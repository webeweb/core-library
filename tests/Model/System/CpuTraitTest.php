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

namespace WBW\Library\Common\Tests\Model\System;

use WBW\Library\Common\Model\System\CpuInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestCpuTrait;

/**
 * Current processor usage trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class CpuTraitTest extends AbstractTestCase {

    /**
     * Test setCpu()
     *
     * @return void
     */
    public function testSetCpu(): void {

        // Set a Current processor usage mock.
        $cpu = $this->getMockBuilder(CpuInterface::class)->getMock();

        $obj = new TestCpuTrait();
        $obj->setCpu($cpu);

        $this->assertSame($cpu, $obj->getCpu());
    }
}
