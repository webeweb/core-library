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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAdresseRue2Trait;

/**
 * Adresse rue2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAdresseRue2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAdresseRue2() method.
     *
     * @return void
     */
    public function testSetAdresseRue2() {

        $obj = new TestStringAdresseRue2Trait();

        $obj->setAdresseRue2("adresseRue2");
        $this->assertEquals("adresseRue2", $obj->getAdresseRue2());
    }
}
