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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq7Trait;

/**
 * Nom req7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq7TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq7() method.
     *
     * @return void
     */
    public function testSetNomReq7() {

        $obj = new TestStringNomReq7Trait();

        $obj->setNomReq7("nomReq7");
        $this->assertEquals("nomReq7", $obj->getNomReq7());
    }
}
