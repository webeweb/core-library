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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringNafCodeTrait;

/**
 * String NAF code trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringNafCodeTraitTest extends AbstractTestCase {

    /**
     * Test setNafCode()
     *
     * @return void
     */
    public function testSetNafCode(): void {

        $obj = new TestStringNafCodeTrait();

        $obj->setNafCode("nafCode");
        $this->assertEquals("nafCode", $obj->getNafCode());
    }
}
