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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringStreetNameTrait;

/**
 * String street name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringStreetNameTraitTest extends AbstractTestCase {

    /**
     * Test setStreetName()
     *
     * @return void
     */
    public function testSetStreetName(): void {

        $obj = new TestStringStreetNameTrait();

        $obj->setStreetName("streetName");
        $this->assertEquals("streetName", $obj->getStreetName());
    }
}
