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

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringLangTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String lang trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringLangTraitTest extends AbstractTestCase {

    /**
     * Test setLang()
     *
     * @return void
     */
    public function testSetLang(): void {

        $obj = new TestStringLangTrait();

        $obj->setLang("lang");
        $this->assertEquals("lang", $obj->getLang());
    }
}
