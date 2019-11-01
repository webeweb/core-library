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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment4Trait;

/**
 * T r s comment4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment4TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment4() method.
     *
     * @return void
     */
    public function testSetTrsComment4() {

        $obj = new TestStringTrsComment4Trait();

        $obj->setTrsComment4("trsComment4");
        $this->assertEquals("trsComment4", $obj->getTrsComment4());
    }
}
