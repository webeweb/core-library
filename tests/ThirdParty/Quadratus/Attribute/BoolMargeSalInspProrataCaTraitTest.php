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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolMargeSalInspProrataCaTrait;

/**
 * Marge sal insp prorata c a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolMargeSalInspProrataCaTraitTest extends AbstractTestCase {

    /**
     * Tests the setMargeSalInspProrataCa() method.
     *
     * @return void
     */
    public function testSetMargeSalInspProrataCa() {

        $obj = new TestBoolMargeSalInspProrataCaTrait();

        $obj->setMargeSalInspProrataCa(true);
        $this->assertEquals(true, $obj->getMargeSalInspProrataCa());
    }
}
