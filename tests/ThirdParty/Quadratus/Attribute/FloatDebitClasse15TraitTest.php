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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDebitClasse15Trait;

/**
 * Debit classe15 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDebitClasse15TraitTest extends AbstractTestCase {

    /**
     * Tests the setDebitClasse15() method.
     *
     * @return void
     */
    public function testSetDebitClasse15() {

        $obj = new TestFloatDebitClasse15Trait();

        $obj->setDebitClasse15(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClasse15());
    }
}
