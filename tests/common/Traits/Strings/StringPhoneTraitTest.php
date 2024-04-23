<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringPhoneTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String phone trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringPhoneTraitTest extends AbstractTestCase {

    /**
     * Test setPhone()
     *
     * @return void
     */
    public function testSetPhone(): void {

        $obj = new TestStringPhoneTrait();

        $obj->setPhone("phone");
        $this->assertEquals("phone", $obj->getPhone());
    }
}
