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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBudgetCommande1Trait;

/**
 * Budget commande1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBudgetCommande1TraitTest extends AbstractTestCase {

    /**
     * Tests the setBudgetCommande1() method.
     *
     * @return void
     */
    public function testSetBudgetCommande1() {

        $obj = new TestFloatBudgetCommande1Trait();

        $obj->setBudgetCommande1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande1());
    }
}
