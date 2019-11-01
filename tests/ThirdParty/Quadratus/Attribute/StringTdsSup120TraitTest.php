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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTdsSup120Trait;

/**
 * T d s sup120 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTdsSup120TraitTest extends AbstractTestCase {

    /**
     * Tests the setTdsSup120() method.
     *
     * @return void
     */
    public function testSetTdsSup120() {

        $obj = new TestStringTdsSup120Trait();

        $obj->setTdsSup120("tdsSup120");
        $this->assertEquals("tdsSup120", $obj->getTdsSup120());
    }
}
