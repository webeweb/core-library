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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq11Trait;

/**
 * Nom req11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq11TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq11() method.
     *
     * @return void
     */
    public function testSetNomReq11() {

        $obj = new TestStringNomReq11Trait();

        $obj->setNomReq11("nomReq11");
        $this->assertEquals("nomReq11", $obj->getNomReq11());
    }
}
