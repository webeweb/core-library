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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeNuit1Trait;

/**
 * Code prime nuit1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeNuit1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeNuit1() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit1() {

        $obj = new TestStringCodePrimeNuit1Trait();

        $obj->setCodePrimeNuit1("codePrimeNuit1");
        $this->assertEquals("codePrimeNuit1", $obj->getCodePrimeNuit1());
    }
}
