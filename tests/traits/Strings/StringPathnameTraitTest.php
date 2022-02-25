<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringPathnameTrait;

/**
 * String pathname trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringPathnameTraitTest extends AbstractTestCase {

    /**
     * Tests setPathname()
     *
     * @return void
     */
    public function testSetPathname(): void {

        $obj = new TestStringPathnameTrait();

        $obj->setPathname("pathname");
        $this->assertEquals("pathname", $obj->getPathname());
    }
}
