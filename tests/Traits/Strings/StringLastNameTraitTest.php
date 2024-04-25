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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringLastNameTrait;

/**
 * String last name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringLastNameTraitTest extends AbstractTestCase {

    /**
     * Test setLastName()
     *
     * @return void
     */
    public function testSetLastName(): void {

        $obj = new TestStringLastNameTrait();

        $obj->setLastName("lastname");
        $this->assertEquals("lastname", $obj->getLastName());
    }
}
