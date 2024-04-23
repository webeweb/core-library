<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringVatNumberTrait;

/**
 * String VAT number trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringVatNumberTraitTest extends AbstractTestCase {

    /**
     * Test setVatNumber()
     *
     * @return void
     */
    public function testSetVatNumber(): void {

        $obj = new TestStringVatNumberTrait();

        $obj->setVatNumber("vatNumber");
        $this->assertEquals("vatNumber", $obj->getVatNumber());
    }
}
