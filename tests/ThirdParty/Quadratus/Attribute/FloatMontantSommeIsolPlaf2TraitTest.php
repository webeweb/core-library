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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantSommeIsolPlaf2Trait;

/**
 * Montant somme isol plaf2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantSommeIsolPlaf2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantSommeIsolPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2() {

        $obj = new TestFloatMontantSommeIsolPlaf2Trait();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }
}
