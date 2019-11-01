<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDureeBudgetee7Trait;

/**
 * Duree budgetee7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDureeBudgetee7TraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeBudgetee7() method.
     *
     * @return void
     */
    public function testSetDureeBudgetee7() {

        $obj = new TestFloatDureeBudgetee7Trait();

        $obj->setDureeBudgetee7(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee7());
    }
}
