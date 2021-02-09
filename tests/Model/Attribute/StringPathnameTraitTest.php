<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringPathnameTrait;

/**
 * String pathname trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringPathnameTraitTest extends AbstractTestCase {

    /**
     * Tests the setPathname() method.
     *
     * @return void
     */
    public function testSetPathname(): void {

        $obj = new TestStringPathnameTrait();

        $obj->setPathname("pathname");
        $this->assertEquals("pathname", $obj->getPathname());
    }
}
