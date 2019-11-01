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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeJf1Trait;

/**
 * Code prime j f1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeJf1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeJf1() method.
     *
     * @return void
     */
    public function testSetCodePrimeJf1() {

        $obj = new TestStringCodePrimeJf1Trait();

        $obj->setCodePrimeJf1("codePrimeJf1");
        $this->assertEquals("codePrimeJf1", $obj->getCodePrimeJf1());
    }
}
