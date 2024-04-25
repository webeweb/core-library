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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringCommentTrait;

/**
 * String comment trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringCommentTraitTest extends AbstractTestCase {

    /**
     * Test setComment()
     *
     * @return void
     */
    public function testSetComment(): void {

        $obj = new TestStringCommentTrait();

        $obj->setComment("comment");
        $this->assertEquals("comment", $obj->getComment());
    }
}
