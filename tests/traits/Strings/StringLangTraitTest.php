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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringLangTrait;

/**
 * String lang trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringLangTraitTest extends AbstractTestCase {

    /**
     * Tests setLang()
     *
     * @return void
     */
    public function testSetLang(): void {

        $obj = new TestStringLangTrait();

        $obj->setLang("lang");
        $this->assertEquals("lang", $obj->getLang());
    }
}
