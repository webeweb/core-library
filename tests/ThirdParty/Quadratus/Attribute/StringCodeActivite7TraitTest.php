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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeActivite7Trait;

/**
 * Code activite7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeActivite7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeActivite7() method.
     *
     * @return void
     */
    public function testSetCodeActivite7() {

        $obj = new TestStringCodeActivite7Trait();

        $obj->setCodeActivite7("codeActivite7");
        $this->assertEquals("codeActivite7", $obj->getCodeActivite7());
    }
}
