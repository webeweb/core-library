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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringNafCodeTrait;

/**
 * String NAF code trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringNafCodeTraitTest extends AbstractTestCase {

    /**
     * Tests setNafCode()
     *
     * @return void
     */
    public function testSetNafCode(): void {

        $obj = new TestStringNafCodeTrait();

        $obj->setNafCode("nafCode");
        $this->assertEquals("nafCode", $obj->getNafCode());
    }
}
