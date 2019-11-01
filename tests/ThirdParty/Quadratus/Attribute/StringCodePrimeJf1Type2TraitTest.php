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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeJf1Type2Trait;

/**
 * Code prime j f1 type2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeJf1Type2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeJf1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJf1Type2() {

        $obj = new TestStringCodePrimeJf1Type2Trait();

        $obj->setCodePrimeJf1Type2("codePrimeJf1Type2");
        $this->assertEquals("codePrimeJf1Type2", $obj->getCodePrimeJf1Type2());
    }
}
