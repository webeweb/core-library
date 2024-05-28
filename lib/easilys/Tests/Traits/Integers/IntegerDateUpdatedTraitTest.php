<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Traits\Integers;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Integers\TestIntegerDateUpdatedTrait;

/**
 * Integer date updated trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Integers
 */
class IntegerDateUpdatedTraitTest extends AbstractTestCase {

    /**
     * Test setDateUpdated()
     *
     * @return void
     */
    public function testSetDateUpdated(): void {

        $obj = new TestIntegerDateUpdatedTrait();

        $obj->setDateUpdated(1);
        $this->assertEquals(1, $obj->getDateUpdated());
    }
}
