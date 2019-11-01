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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeNuit2Trait;

/**
 * Code prime nuit2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeNuit2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeNuit2() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit2() {

        $obj = new TestStringCodePrimeNuit2Trait();

        $obj->setCodePrimeNuit2("codePrimeNuit2");
        $this->assertEquals("codePrimeNuit2", $obj->getCodePrimeNuit2());
    }
}
