<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringHashTrait;

/**
 * String hash trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringHashTraitTest extends AbstractTestCase {

    /**
     * Tests setHash()
     *
     * @return void
     */
    public function testSetHash(): void {

        $obj = new TestStringHashTrait();

        $obj->setHash("hash");
        $this->assertEquals("hash", $obj->getHash());
    }
}
