<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerYearTrait;

/**
 * Integer year trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerYearTraitTest extends AbstractTestCase {

    /**
     * Test setYear()
     *
     * @return void
     */
    public function testSetYear(): void {

        $obj = new TestIntegerYearTrait();

        $obj->setYear(2023);
        $this->assertEquals(2023, $obj->getYear());
    }
}
