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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringMentionTrait;

/**
 * String mention trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringMentionTraitTest extends AbstractTestCase {

    /**
     * Tests setMention()
     *
     * @return void
     */
    public function testSetMention(): void {

        $obj = new TestStringMentionTrait();

        $obj->setMention("mention");
        $this->assertEquals("mention", $obj->getMention());
    }
}
