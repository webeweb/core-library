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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq4Trait;

/**
 * Nom req4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq4() method.
     *
     * @return void
     */
    public function testSetNomReq4() {

        $obj = new TestStringNomReq4Trait();

        $obj->setNomReq4("nomReq4");
        $this->assertEquals("nomReq4", $obj->getNomReq4());
    }
}
