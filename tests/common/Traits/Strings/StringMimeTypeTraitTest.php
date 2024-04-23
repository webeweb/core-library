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

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringMimeTypeTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String mime type trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringMimeTypeTraitTest extends AbstractTestCase {

    /**
     * Test setMimeType()
     *
     * @return void
     */
    public function testSetMimeType(): void {

        $obj = new TestStringMimeTypeTrait();

        $obj->setMimeType("mimeType");
        $this->assertEquals("mimeType", $obj->getMimeType());
    }
}
