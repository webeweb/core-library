<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerYearTrait;

/**
 * Integer year trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerYearTraitTest extends AbstractTestCase {

    /**
     * Tests setYear()
     *
     * @return void
     */
    public function testSetYear(): void {

        $obj = new TestIntegerYearTrait();

        $obj->setYear(2023);
        $this->assertEquals(2023, $obj->getYear());
    }
}
