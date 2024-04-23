<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringAvatarTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String avatar trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringAvatarTraitTest extends AbstractTestCase {

    /**
     * Test setAvatar()
     *
     * @return void
     */
    public function testSetAvatar(): void {

        $obj = new TestStringAvatarTrait();

        $obj->setAvatar("avatar");
        $this->assertEquals("avatar", $obj->getAvatar());
    }
}
