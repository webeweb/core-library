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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCoeffFillonMoins20Trait;

/**
 * Coeff fillon moins20 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCoeffFillonMoins20TraitTest extends AbstractTestCase {

    /**
     * Tests the setCoeffFillonMoins20() method.
     *
     * @return void
     */
    public function testSetCoeffFillonMoins20() {

        $obj = new TestBoolCoeffFillonMoins20Trait();

        $obj->setCoeffFillonMoins20(true);
        $this->assertEquals(true, $obj->getCoeffFillonMoins20());
    }
}
