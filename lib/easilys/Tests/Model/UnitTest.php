<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\Unit;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Unit test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class UnitTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Unit();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLabel());
    }
}
