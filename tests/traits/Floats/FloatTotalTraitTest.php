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

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatTotalTrait;

/**
 * Float total trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatTotalTraitTest extends AbstractTestCase {

    /**
     * Test setTotal()
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new TestFloatTotalTrait();

        $obj->setTotal(0.123456789);
        $this->assertEquals(0.123456789, $obj->getTotal());
    }
}
