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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantSommeIsolPlaf4Trait;

/**
 * Montant somme isol plaf4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantSommeIsolPlaf4TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantSommeIsolPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4() {

        $obj = new TestFloatMontantSommeIsolPlaf4Trait();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }
}
