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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringUriTrait;

/**
 * String URI trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringUriTraitTest extends AbstractTestCase {

    /**
     * Tests setUri()
     *
     * @return void
     */
    public function testSetUri(): void {

        $obj = new TestStringUriTrait();

        $obj->setUri("Uri");
        $this->assertEquals("Uri", $obj->getUri());
    }
}
