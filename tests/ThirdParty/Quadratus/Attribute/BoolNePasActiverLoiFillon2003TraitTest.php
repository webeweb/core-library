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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolNePasActiverLoiFillon2003Trait;

/**
 * Ne pas activer loi fillon2003 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolNePasActiverLoiFillon2003TraitTest extends AbstractTestCase {

    /**
     * Tests the setNePasActiverLoiFillon2003() method.
     *
     * @return void
     */
    public function testSetNePasActiverLoiFillon2003() {

        $obj = new TestBoolNePasActiverLoiFillon2003Trait();

        $obj->setNePasActiverLoiFillon2003(true);
        $this->assertEquals(true, $obj->getNePasActiverLoiFillon2003());
    }
}
