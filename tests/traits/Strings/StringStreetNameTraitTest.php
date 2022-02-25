<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringStreetNameTrait;

/**
 * String street name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringStreetNameTraitTest extends AbstractTestCase {

    /**
     * Tests setStreetName()
     *
     * @return void
     */
    public function testSetStreetName(): void {

        $obj = new TestStringStreetNameTrait();

        $obj->setStreetName("streetName");
        $this->assertEquals("streetName", $obj->getStreetName());
    }
}
