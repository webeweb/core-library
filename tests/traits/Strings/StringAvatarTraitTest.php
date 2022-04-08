<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringAvatarTrait;

/**
 * String avatar trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringAvatarTraitTest extends AbstractTestCase {

    /**
     * Tests setAvatar()
     *
     * @return void
     */
    public function testSetAvatar(): void {

        $obj = new TestStringAvatarTrait();

        $obj->setAvatar("avatar");
        $this->assertEquals("avatar", $obj->getAvatar());
    }
}
