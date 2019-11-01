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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIntitule4Trait;

/**
 * Intitule4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIntitule4TraitTest extends AbstractTestCase {

    /**
     * Tests the setIntitule4() method.
     *
     * @return void
     */
    public function testSetIntitule4() {

        $obj = new TestStringIntitule4Trait();

        $obj->setIntitule4("intitule4");
        $this->assertEquals("intitule4", $obj->getIntitule4());
    }
}
