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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds138Trait;

/**
 * T d s138 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds138TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds138() method.
     *
     * @return void
     */
    public function testSetTds138() {

        $obj = new TestStringTds138Trait();

        $obj->setTds138("tds138");
        $this->assertEquals("tds138", $obj->getTds138());
    }
}
