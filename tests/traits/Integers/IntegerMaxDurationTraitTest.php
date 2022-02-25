<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerMaxDurationTrait;

/**
 * Integer max duration trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerMaxDurationTraitTest extends AbstractTestCase {

    /**
     * Tests setMaxDuration()
     *
     * @return void
     */
    public function testSetMaxDuration(): void {

        $obj = new TestIntegerMaxDurationTrait();

        $obj->setMaxDuration(60);
        $this->assertEquals(60, $obj->getMaxDuration());
    }
}
