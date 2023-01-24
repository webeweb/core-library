<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringVersionTrait;

/**
 * String version trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringVersionTraitTest extends AbstractTestCase {

    /**
     * Tests setVersion()
     *
     * @return void
     */
    public function testSetVersion(): void {

        $obj = new TestStringVersionTrait();

        $obj->setVersion("Version");
        $this->assertEquals("Version", $obj->getVersion());
    }
}
