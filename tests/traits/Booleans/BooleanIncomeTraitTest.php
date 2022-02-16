<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Booleans;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanIncomeTrait;

/**
 * Boolean income trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanIncomeTraitTest extends AbstractTestCase {

    /**
     * Tests setIncome()
     *
     * @return void
     */
    public function testSetIncome(): void {

        $obj = new TestBooleanIncomeTrait();

        $obj->setIncome(true);
        $this->assertTrue($obj->getIncome());
    }
}
