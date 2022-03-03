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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringIdentifierTrait;

/**
 * String identifier trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringIdentifierTraitTest extends AbstractTestCase {

    /**
     * Tests setIdentifier()
     *
     * @return void
     */
    public function testSetIdentifier(): void {

        $obj = new TestStringIdentifierTrait();

        $obj->setIdentifier("identifier");
        $this->assertEquals("identifier", $obj->getIdentifier());
    }
}
