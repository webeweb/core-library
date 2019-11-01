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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeActivite9Trait;

/**
 * Code activite9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeActivite9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeActivite9() method.
     *
     * @return void
     */
    public function testSetCodeActivite9() {

        $obj = new TestStringCodeActivite9Trait();

        $obj->setCodeActivite9("codeActivite9");
        $this->assertEquals("codeActivite9", $obj->getCodeActivite9());
    }
}
