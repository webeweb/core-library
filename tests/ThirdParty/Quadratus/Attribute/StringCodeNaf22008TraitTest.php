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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeNaf22008Trait;

/**
 * Code n a f2_2008 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeNaf22008TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeNaf22008() method.
     *
     * @return void
     */
    public function testSetCodeNaf22008() {

        $obj = new TestStringCodeNaf22008Trait();

        $obj->setCodeNaf22008("codeNaf22008");
        $this->assertEquals("codeNaf22008", $obj->getCodeNaf22008());
    }
}
