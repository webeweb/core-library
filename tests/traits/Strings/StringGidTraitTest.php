<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringGidTrait;

/**
 * String GID trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringGidTraitTest extends AbstractTestCase {

    /**
     * Tests setGid()
     *
     * @return void
     */
    public function testSetGid(): void {

        $obj = new TestStringGidTrait();

        $obj->setGid("gid");
        $this->assertEquals("gid", $obj->getGid());
    }
}
