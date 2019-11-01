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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment2Trait;

/**
 * T r s comment2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment2() method.
     *
     * @return void
     */
    public function testSetTrsComment2() {

        $obj = new TestStringTrsComment2Trait();

        $obj->setTrsComment2("trsComment2");
        $this->assertEquals("trsComment2", $obj->getTrsComment2());
    }
}
