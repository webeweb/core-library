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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantSommeIsolBrut3Trait;

/**
 * Montant somme isol brut3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantSommeIsolBrut3TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantSommeIsolBrut3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3() {

        $obj = new TestFloatMontantSommeIsolBrut3Trait();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }
}
