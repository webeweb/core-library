<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringVatNumberTrait;

/**
 * String VAT number trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringVatNumberTraitTest extends AbstractTestCase {

    /**
     * Tests setVatNumber()
     *
     * @return void
     */
    public function testSetVatNumber(): void {

        $obj = new TestStringVatNumberTrait();

        $obj->setVatNumber("vatNumber");
        $this->assertEquals("vatNumber", $obj->getVatNumber());
    }
}
