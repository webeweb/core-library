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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBudgetCommande12Trait;

/**
 * Budget commande12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBudgetCommande12TraitTest extends AbstractTestCase {

    /**
     * Tests the setBudgetCommande12() method.
     *
     * @return void
     */
    public function testSetBudgetCommande12() {

        $obj = new TestFloatBudgetCommande12Trait();

        $obj->setBudgetCommande12(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande12());
    }
}
