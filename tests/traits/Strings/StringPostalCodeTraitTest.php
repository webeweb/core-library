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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringPostalCodeTrait;

/**
 * String postal code trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringPostalCodeTraitTest extends AbstractTestCase {

    /**
     * Tests setPostalCode()
     *
     * @return void
     */
    public function testSetPostalCode(): void {

        $obj = new TestStringPostalCodeTrait();

        $obj->setPostalCode("postalCode");
        $this->assertEquals("postalCode", $obj->getPostalCode());
    }
}
