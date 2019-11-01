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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeJf2Trait;

/**
 * Code prime j f2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeJf2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeJf2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJf2() {

        $obj = new TestStringCodePrimeJf2Trait();

        $obj->setCodePrimeJf2("codePrimeJf2");
        $this->assertEquals("codePrimeJf2", $obj->getCodePrimeJf2());
    }
}
