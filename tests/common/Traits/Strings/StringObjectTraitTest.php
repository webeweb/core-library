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

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringObjectTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String object trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringObjectTraitTest extends AbstractTestCase {

    /**
     * Test setObject()
     *
     * @return void
     */
    public function testSetObject(): void {

        $obj = new TestStringObjectTrait();

        $obj->setObject("object");
        $this->assertEquals("object", $obj->getObject());
    }
}
