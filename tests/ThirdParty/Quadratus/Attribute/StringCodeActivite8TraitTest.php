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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeActivite8Trait;

/**
 * Code activite8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeActivite8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeActivite8() method.
     *
     * @return void
     */
    public function testSetCodeActivite8() {

        $obj = new TestStringCodeActivite8Trait();

        $obj->setCodeActivite8("codeActivite8");
        $this->assertEquals("codeActivite8", $obj->getCodeActivite8());
    }
}
