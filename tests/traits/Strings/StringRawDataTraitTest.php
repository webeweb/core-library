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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringRawDataTrait;

/**
 * String raw data trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringRawDataTraitTest extends AbstractTestCase {

    /**
     * Tests setRawData()
     *
     * @return void
     */
    public function testSetRawData(): void {

        $obj = new TestStringRawDataTrait();

        $obj->setRawData("rawData");
        $this->assertEquals("rawData", $obj->getRawData());
    }
}
