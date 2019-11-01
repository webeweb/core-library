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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds139Trait;

/**
 * T d s139 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds139TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds139() method.
     *
     * @return void
     */
    public function testSetTds139() {

        $obj = new TestStringTds139Trait();

        $obj->setTds139("tds139");
        $this->assertEquals("tds139", $obj->getTds139());
    }
}
