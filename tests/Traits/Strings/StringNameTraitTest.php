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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringNameTrait;

/**
 * String name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringNameTraitTest extends AbstractTestCase {

    /**
     * Test setName()
     *
     * @return void
     */
    public function testSetName(): void {

        $obj = new TestStringNameTrait();

        $obj->setName("name");
        $this->assertEquals("name", $obj->getName());
    }
}
