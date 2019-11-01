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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIntitule2Trait;

/**
 * Intitule2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIntitule2TraitTest extends AbstractTestCase {

    /**
     * Tests the setIntitule2() method.
     *
     * @return void
     */
    public function testSetIntitule2() {

        $obj = new TestStringIntitule2Trait();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }
}
