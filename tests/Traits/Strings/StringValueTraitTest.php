<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringValueTrait;

/**
 * String value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringValueTraitTest extends AbstractTestCase {

    /**
     * Test setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestStringValueTrait();

        $obj->setValue("Value");
        $this->assertEquals("Value", $obj->getValue());
    }
}
