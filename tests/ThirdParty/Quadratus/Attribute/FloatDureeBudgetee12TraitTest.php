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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDureeBudgetee12Trait;

/**
 * Duree budgetee12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDureeBudgetee12TraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeBudgetee12() method.
     *
     * @return void
     */
    public function testSetDureeBudgetee12() {

        $obj = new TestFloatDureeBudgetee12Trait();

        $obj->setDureeBudgetee12(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee12());
    }
}
