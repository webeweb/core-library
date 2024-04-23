<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringHashSha256Trait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String hash "SHA256" trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringHashSha256TraitTest extends AbstractTestCase {

    /**
     * Test setHashSha256()
     *
     * @return void
     */
    public function testSetHashSha256(): void {

        $obj = new TestStringHashSha256Trait();

        $obj->setHashSha256("hashSha256");
        $this->assertEquals("hashSha256", $obj->getHashSha256());
    }
}
