<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringStyleTrait;

/**
 * String style trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringStyleTraitTest extends AbstractTestCase {

    /**
     * Tests setStyle()
     *
     * @return void
     */
    public function testSetStyle(): void {

        $obj = new TestStringStyleTrait();

        $obj->setStyle("style");
        $this->assertEquals("style", $obj->getStyle());
    }
}
