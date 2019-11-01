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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq5Trait;

/**
 * Nom req5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq5TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq5() method.
     *
     * @return void
     */
    public function testSetNomReq5() {

        $obj = new TestStringNomReq5Trait();

        $obj->setNomReq5("nomReq5");
        $this->assertEquals("nomReq5", $obj->getNomReq5());
    }
}
