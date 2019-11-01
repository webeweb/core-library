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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolDeductionHSupFillonTrait;

/**
 * Deduction h sup fillon trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolDeductionHSupFillonTraitTest extends AbstractTestCase {

    /**
     * Tests the setDeductionHSupFillon() method.
     *
     * @return void
     */
    public function testSetDeductionHSupFillon() {

        $obj = new TestBoolDeductionHSupFillonTrait();

        $obj->setDeductionHSupFillon(true);
        $this->assertEquals(true, $obj->getDeductionHSupFillon());
    }
}
