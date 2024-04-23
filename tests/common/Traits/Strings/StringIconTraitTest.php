<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringIconTrait;

/**
 * String icon trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringIconTraitTest extends AbstractTestCase {

    /**
     * Test setIcon()
     *
     * @return void
     */
    public function testSetIcon(): void {

        $obj = new TestStringIconTrait();

        $obj->setIcon("icon");
        $this->assertEquals("icon", $obj->getIcon());
    }
}
