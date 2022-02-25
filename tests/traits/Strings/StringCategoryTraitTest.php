<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringCategoryTrait;

/**
 * String category trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringCategoryTraitTest extends AbstractTestCase {

    /**
     * Tests setCategory()
     *
     * @return void
     */
    public function testSetCategory(): void {

        $obj = new TestStringCategoryTrait();

        $obj->setCategory("category");
        $this->assertEquals("category", $obj->getCategory());
    }
}
