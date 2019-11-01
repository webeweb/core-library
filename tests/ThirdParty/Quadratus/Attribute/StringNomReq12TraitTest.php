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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq12Trait;

/**
 * Nom req12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq12TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq12() method.
     *
     * @return void
     */
    public function testSetNomReq12() {

        $obj = new TestStringNomReq12Trait();

        $obj->setNomReq12("nomReq12");
        $this->assertEquals("nomReq12", $obj->getNomReq12());
    }
}
