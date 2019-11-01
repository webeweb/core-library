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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds133Trait;

/**
 * T d s133 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds133TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds133() method.
     *
     * @return void
     */
    public function testSetTds133() {

        $obj = new TestStringTds133Trait();

        $obj->setTds133("tds133");
        $this->assertEquals("tds133", $obj->getTds133());
    }
}
