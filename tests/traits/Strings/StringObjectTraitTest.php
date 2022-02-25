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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringObjectTrait;

/**
 * String object trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringObjectTraitTest extends AbstractTestCase {

    /**
     * Tests setObject()
     *
     * @return void
     */
    public function testSetObject(): void {

        $obj = new TestStringObjectTrait();

        $obj->setObject("object");
        $this->assertEquals("object", $obj->getObject());
    }
}
