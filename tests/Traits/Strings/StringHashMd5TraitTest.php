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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringHashMd5Trait;

/**
 * String hash "MD5" trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringHashMd5TraitTest extends AbstractTestCase {

    /**
     * Test setHashMd5()
     *
     * @return void
     */
    public function testSetHashMd5(): void {

        $obj = new TestStringHashMd5Trait();

        $obj->setHashMd5("hashMd5");
        $this->assertEquals("hashMd5", $obj->getHashMd5());
    }
}
