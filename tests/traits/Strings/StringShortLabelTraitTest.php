<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringShortLabelTrait;

/**
 * String short label trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringShortLabelTraitTest extends AbstractTestCase {

    /**
     * Tests setShortLabel()
     *
     * @return void
     */
    public function testSetShortLabel(): void {

        $obj = new TestStringShortLabelTrait();

        $obj->setShortLabel("shortLabel");
        $this->assertEquals("shortLabel", $obj->getShortLabel());
    }
}
