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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete12Trait;

/**
 * Requete12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete12TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete12() method.
     *
     * @return void
     */
    public function testSetRequete12() {

        $obj = new TestStringRequete12Trait();

        $obj->setRequete12("requete12");
        $this->assertEquals("requete12", $obj->getRequete12());
    }
}
