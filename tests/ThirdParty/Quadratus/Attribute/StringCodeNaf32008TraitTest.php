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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeNaf32008Trait;

/**
 * Code n a f3_2008 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeNaf32008TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeNaf32008() method.
     *
     * @return void
     */
    public function testSetCodeNaf32008() {

        $obj = new TestStringCodeNaf32008Trait();

        $obj->setCodeNaf32008("codeNaf32008");
        $this->assertEquals("codeNaf32008", $obj->getCodeNaf32008());
    }
}
