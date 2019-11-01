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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIntitule3Trait;

/**
 * Intitule3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIntitule3TraitTest extends AbstractTestCase {

    /**
     * Tests the setIntitule3() method.
     *
     * @return void
     */
    public function testSetIntitule3() {

        $obj = new TestStringIntitule3Trait();

        $obj->setIntitule3("intitule3");
        $this->assertEquals("intitule3", $obj->getIntitule3());
    }
}
