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

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringKeyTrait;

/**
 * String key trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringKeyTraitTest extends AbstractTestCase {

    /**
     * Test setKey()
     *
     * @return void
     */
    public function testSetKey(): void {

        $obj = new TestStringKeyTrait();

        $obj->setKey("key");
        $this->assertEquals("key", $obj->getKey());
    }
}
