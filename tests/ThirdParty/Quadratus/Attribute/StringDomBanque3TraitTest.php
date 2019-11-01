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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDomBanque3Trait;

/**
 * Dom banque3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDomBanque3TraitTest extends AbstractTestCase {

    /**
     * Tests the setDomBanque3() method.
     *
     * @return void
     */
    public function testSetDomBanque3() {

        $obj = new TestStringDomBanque3Trait();

        $obj->setDomBanque3("domBanque3");
        $this->assertEquals("domBanque3", $obj->getDomBanque3());
    }
}
