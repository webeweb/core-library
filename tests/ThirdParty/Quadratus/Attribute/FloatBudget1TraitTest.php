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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBudget1Trait;

/**
 * Budget1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBudget1TraitTest extends AbstractTestCase {

    /**
     * Tests the setBudget1() method.
     *
     * @return void
     */
    public function testSetBudget1() {

        $obj = new TestFloatBudget1Trait();

        $obj->setBudget1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget1());
    }
}
