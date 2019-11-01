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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeNaf3Trait;

/**
 * Code naf3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeNaf3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeNaf3() method.
     *
     * @return void
     */
    public function testSetCodeNaf3() {

        $obj = new TestStringCodeNaf3Trait();

        $obj->setCodeNaf3("codeNaf3");
        $this->assertEquals("codeNaf3", $obj->getCodeNaf3());
    }
}
