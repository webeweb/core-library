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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBudgetCommande10Trait;

/**
 * Budget commande10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBudgetCommande10TraitTest extends AbstractTestCase {

    /**
     * Tests the setBudgetCommande10() method.
     *
     * @return void
     */
    public function testSetBudgetCommande10() {

        $obj = new TestFloatBudgetCommande10Trait();

        $obj->setBudgetCommande10(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande10());
    }
}
