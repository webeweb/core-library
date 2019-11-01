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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq3Trait;

/**
 * Nom req3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq3() method.
     *
     * @return void
     */
    public function testSetNomReq3() {

        $obj = new TestStringNomReq3Trait();

        $obj->setNomReq3("nomReq3");
        $this->assertEquals("nomReq3", $obj->getNomReq3());
    }
}
