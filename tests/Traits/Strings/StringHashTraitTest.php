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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringHashTrait;

/**
 * String hash trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringHashTraitTest extends AbstractTestCase {

    /**
     * Test setHash()
     *
     * @return void
     */
    public function testSetHash(): void {

        $obj = new TestStringHashTrait();

        $obj->setHash("hash");
        $this->assertEquals("hash", $obj->getHash());
    }
}
