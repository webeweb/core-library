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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment9Trait;

/**
 * T r s comment9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment9TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment9() method.
     *
     * @return void
     */
    public function testSetTrsComment9() {

        $obj = new TestStringTrsComment9Trait();

        $obj->setTrsComment9("trsComment9");
        $this->assertEquals("trsComment9", $obj->getTrsComment9());
    }
}
