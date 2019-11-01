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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIntitule1Trait;

/**
 * Intitule1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIntitule1TraitTest extends AbstractTestCase {

    /**
     * Tests the setIntitule1() method.
     *
     * @return void
     */
    public function testSetIntitule1() {

        $obj = new TestStringIntitule1Trait();

        $obj->setIntitule1("intitule1");
        $this->assertEquals("intitule1", $obj->getIntitule1());
    }
}
