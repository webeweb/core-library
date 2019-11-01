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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment5Trait;

/**
 * T r s comment5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment5TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment5() method.
     *
     * @return void
     */
    public function testSetTrsComment5() {

        $obj = new TestStringTrsComment5Trait();

        $obj->setTrsComment5("trsComment5");
        $this->assertEquals("trsComment5", $obj->getTrsComment5());
    }
}
