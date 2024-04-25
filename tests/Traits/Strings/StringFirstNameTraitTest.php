<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringFirstNameTrait;

/**
 * String first name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringFirstNameTraitTest extends AbstractTestCase {

    /**
     * Test setFirstName()
     *
     * @return void
     */
    public function testSetFirstName(): void {

        $obj = new TestStringFirstNameTrait();

        $obj->setFirstName("firstname");
        $this->assertEquals("firstname", $obj->getFirstName());
    }
}
