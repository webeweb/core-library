<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringDirectoryTrait;

/**
 * String directory trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringDirectoryTraitTest extends AbstractTestCase {

    /**
     * Tests setDirectory()
     *
     * @return void
     */
    public function testSetDirectory(): void {

        $obj = new TestStringDirectoryTrait();

        $obj->setDirectory("directory");
        $this->assertEquals("directory", $obj->getDirectory());
    }
}
