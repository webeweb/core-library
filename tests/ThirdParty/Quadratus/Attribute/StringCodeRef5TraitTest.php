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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef5Trait;

/**
 * Code ref5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef5() method.
     *
     * @return void
     */
    public function testSetCodeRef5() {

        $obj = new TestStringCodeRef5Trait();

        $obj->setCodeRef5("codeRef5");
        $this->assertEquals("codeRef5", $obj->getCodeRef5());
    }
}
