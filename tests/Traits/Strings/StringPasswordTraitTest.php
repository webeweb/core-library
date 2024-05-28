<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringPasswordTrait;

/**
 * String password trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringPasswordTraitTest extends AbstractTestCase {

    /**
     * Test setPassword()
     *
     * @return void
     */
    public function testSetPassword(): void {

        $obj = new TestStringPasswordTrait();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }
}
