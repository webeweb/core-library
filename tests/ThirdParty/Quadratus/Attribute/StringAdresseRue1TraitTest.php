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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAdresseRue1Trait;

/**
 * Adresse rue1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAdresseRue1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAdresseRue1() method.
     *
     * @return void
     */
    public function testSetAdresseRue1() {

        $obj = new TestStringAdresseRue1Trait();

        $obj->setAdresseRue1("adresseRue1");
        $this->assertEquals("adresseRue1", $obj->getAdresseRue1());
    }
}
