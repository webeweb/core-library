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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringSaltTrait;

/**
 * String salt trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringSaltTraitTest extends AbstractTestCase {

    /**
     * Tests setSalt()
     *
     * @return void
     */
    public function testSetSalt(): void {

        $obj = new TestStringSaltTrait();

        $obj->setSalt("salt");
        $this->assertEquals("salt", $obj->getSalt());
    }
}
