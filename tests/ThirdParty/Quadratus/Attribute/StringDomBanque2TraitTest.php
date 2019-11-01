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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDomBanque2Trait;

/**
 * Dom banque2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDomBanque2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDomBanque2() method.
     *
     * @return void
     */
    public function testSetDomBanque2() {

        $obj = new TestStringDomBanque2Trait();

        $obj->setDomBanque2("domBanque2");
        $this->assertEquals("domBanque2", $obj->getDomBanque2());
    }
}
