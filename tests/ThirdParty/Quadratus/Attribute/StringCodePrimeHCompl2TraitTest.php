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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeHCompl2Trait;

/**
 * Code prime h compl2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeHCompl2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeHCompl2() method.
     *
     * @return void
     */
    public function testSetCodePrimeHCompl2() {

        $obj = new TestStringCodePrimeHCompl2Trait();

        $obj->setCodePrimeHCompl2("codePrimeHCompl2");
        $this->assertEquals("codePrimeHCompl2", $obj->getCodePrimeHCompl2());
    }
}
