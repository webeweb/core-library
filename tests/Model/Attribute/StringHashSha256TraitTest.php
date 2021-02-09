<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringHashSha256Trait;

/**
 * String hash "SHA256" trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringHashSha256TraitTest extends AbstractTestCase {

    /**
     * Tests the setHashSha256() method.
     *
     * @return void
     */
    public function testSetHashSha256(): void {

        $obj = new TestStringHashSha256Trait();

        $obj->setHashSha256("hashSha256");
        $this->assertEquals("hashSha256", $obj->getHashSha256());
    }
}
