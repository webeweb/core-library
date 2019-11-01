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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef6Trait;

/**
 * Code ref6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef6TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef6() method.
     *
     * @return void
     */
    public function testSetCodeRef6() {

        $obj = new TestStringCodeRef6Trait();

        $obj->setCodeRef6("codeRef6");
        $this->assertEquals("codeRef6", $obj->getCodeRef6());
    }
}
