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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq2Trait;

/**
 * Nom req2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq2() method.
     *
     * @return void
     */
    public function testSetNomReq2() {

        $obj = new TestStringNomReq2Trait();

        $obj->setNomReq2("nomReq2");
        $this->assertEquals("nomReq2", $obj->getNomReq2());
    }
}
