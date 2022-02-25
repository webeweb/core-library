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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringKeyTrait;

/**
 * String key trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringKeyTraitTest extends AbstractTestCase {

    /**
     * Tests setKey()
     *
     * @return void
     */
    public function testSetKey(): void {

        $obj = new TestStringKeyTrait();

        $obj->setKey("key");
        $this->assertEquals("key", $obj->getKey());
    }
}
