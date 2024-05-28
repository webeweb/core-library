<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringUidTrait;

/**
 * String UID trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringUidTraitTest extends AbstractTestCase {

    /**
     * Test setUid()
     *
     * @return void
     */
    public function testSetUid(): void {

        $obj = new TestStringUidTrait();

        $obj->setUid("uid");
        $this->assertEquals("uid", $obj->getUid());
    }
}
