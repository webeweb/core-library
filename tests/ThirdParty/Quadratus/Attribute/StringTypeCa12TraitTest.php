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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeCa12Trait;

/**
 * Type c a12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeCa12TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeCa12() method.
     *
     * @return void
     */
    public function testSetTypeCa12() {

        $obj = new TestStringTypeCa12Trait();

        $obj->setTypeCa12("typeCa12");
        $this->assertEquals("typeCa12", $obj->getTypeCa12());
    }
}
