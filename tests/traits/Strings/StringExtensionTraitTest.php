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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringExtensionTrait;

/**
 * String extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setExtension()
     *
     * @return void
     */
    public function testSetExtension(): void {

        $obj = new TestStringExtensionTrait();

        $obj->setExtension("extension");
        $this->assertEquals("extension", $obj->getExtension());
    }
}
