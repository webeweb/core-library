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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBudgetCommande11Trait;

/**
 * Budget commande11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBudgetCommande11TraitTest extends AbstractTestCase {

    /**
     * Tests the setBudgetCommande11() method.
     *
     * @return void
     */
    public function testSetBudgetCommande11() {

        $obj = new TestFloatBudgetCommande11Trait();

        $obj->setBudgetCommande11(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande11());
    }
}
