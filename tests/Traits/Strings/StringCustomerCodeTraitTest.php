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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringCustomerCodeTrait;

/**
 * String customer code trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringCustomerCodeTraitTest extends AbstractTestCase {

    /**
     * Test setCustomerCode()
     *
     * @return void
     */
    public function testSetCustomerCode(): void {

        $obj = new TestStringCustomerCodeTrait();

        $obj->setCustomerCode("customerCode");
        $this->assertEquals("customerCode", $obj->getCustomerCode());
    }
}
