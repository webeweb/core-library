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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef9Trait;

/**
 * Code ref9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef9() method.
     *
     * @return void
     */
    public function testSetCodeRef9() {

        $obj = new TestStringCodeRef9Trait();

        $obj->setCodeRef9("codeRef9");
        $this->assertEquals("codeRef9", $obj->getCodeRef9());
    }
}
