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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq10Trait;

/**
 * Nom req10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq10TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq10() method.
     *
     * @return void
     */
    public function testSetNomReq10() {

        $obj = new TestStringNomReq10Trait();

        $obj->setNomReq10("nomReq10");
        $this->assertEquals("nomReq10", $obj->getNomReq10());
    }
}
