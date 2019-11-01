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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantSommeIsolPlafTrait;

/**
 * Montant somme isol plaf trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantSommeIsolPlafTraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantSommeIsolPlaf() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf() {

        $obj = new TestFloatMontantSommeIsolPlafTrait();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }
}
