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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantSommeIsolPlaf5Trait;

/**
 * Montant somme isol plaf5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantSommeIsolPlaf5TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantSommeIsolPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5() {

        $obj = new TestFloatMontantSommeIsolPlaf5Trait();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }
}
