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

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringSaltTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String salt trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringSaltTraitTest extends AbstractTestCase {

    /**
     * Test setSalt()
     *
     * @return void
     */
    public function testSetSalt(): void {

        $obj = new TestStringSaltTrait();

        $obj->setSalt("salt");
        $this->assertEquals("salt", $obj->getSalt());
    }
}
