<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringLinkTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String link trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringLinkTraitTest extends AbstractTestCase {

    /**
     * Test setLink()
     *
     * @return void
     */
    public function testSetLink(): void {

        $obj = new TestStringLinkTrait();

        $obj->setLink("link");
        $this->assertEquals("link", $obj->getLink());
    }
}
