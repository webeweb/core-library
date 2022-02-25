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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringHashSha256Trait;

/**
 * String hash "SHA256" trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringHashSha256TraitTest extends AbstractTestCase {

    /**
     * Tests setHashSha256()
     *
     * @return void
     */
    public function testSetHashSha256(): void {

        $obj = new TestStringHashSha256Trait();

        $obj->setHashSha256("hashSha256");
        $this->assertEquals("hashSha256", $obj->getHashSha256());
    }
}
