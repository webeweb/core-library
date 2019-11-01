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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment3Trait;

/**
 * T r s comment3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment3() method.
     *
     * @return void
     */
    public function testSetTrsComment3() {

        $obj = new TestStringTrsComment3Trait();

        $obj->setTrsComment3("trsComment3");
        $this->assertEquals("trsComment3", $obj->getTrsComment3());
    }
}
