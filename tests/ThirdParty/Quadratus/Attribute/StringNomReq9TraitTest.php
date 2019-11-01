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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq9Trait;

/**
 * Nom req9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq9TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq9() method.
     *
     * @return void
     */
    public function testSetNomReq9() {

        $obj = new TestStringNomReq9Trait();

        $obj->setNomReq9("nomReq9");
        $this->assertEquals("nomReq9", $obj->getNomReq9());
    }
}
