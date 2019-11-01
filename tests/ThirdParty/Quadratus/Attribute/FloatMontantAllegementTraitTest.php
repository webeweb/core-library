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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantAllegementTrait;

/**
 * Montant allegement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantAllegementTraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantAllegement() method.
     *
     * @return void
     */
    public function testSetMontantAllegement() {

        $obj = new TestFloatMontantAllegementTrait();

        $obj->setMontantAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAllegement());
    }
}
