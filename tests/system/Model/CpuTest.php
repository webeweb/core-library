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

use JsonSerializable;
use WBW\Library\System\Model\Cpu;
use WBW\Library\System\Model\CpuInterface;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Current processor usage test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class CpuTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Cpu();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(CpuInterface::class, $obj);
    }
}
