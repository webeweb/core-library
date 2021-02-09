<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringAccountingCodeTrait;

/**
 * String accounting code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringAccountingCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAccountingCode() method.
     *
     * @return void
     */
    public function testSetAccountingCode(): void {

        $obj = new TestStringAccountingCodeTrait();

        $obj->setAccountingCode("accountingCode");
        $this->assertEquals("accountingCode", $obj->getAccountingCode());
    }
}
