<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringLinkTrait;

/**
 * String link trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringLinkTraitTest extends AbstractTestCase {

    /**
     * Tests setLink()
     *
     * @return void
     */
    public function testSetLink(): void {

        $obj = new TestStringLinkTrait();

        $obj->setLink("link");
        $this->assertEquals("link", $obj->getLink());
    }
}
