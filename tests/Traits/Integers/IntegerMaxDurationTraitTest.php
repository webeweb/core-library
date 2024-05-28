<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerMaxDurationTrait;

/**
 * Integer max duration trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerMaxDurationTraitTest extends AbstractTestCase {

    /**
     * Test setMaxDuration()
     *
     * @return void
     */
    public function testSetMaxDuration(): void {

        $obj = new TestIntegerMaxDurationTrait();

        $obj->setMaxDuration(60);
        $this->assertEquals(60, $obj->getMaxDuration());
    }
}
