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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNote3Trait;

/**
 * Note3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNote3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNote3() method.
     *
     * @return void
     */
    public function testSetNote3() {

        $obj = new TestStringNote3Trait();

        $obj->setNote3("note3");
        $this->assertEquals("note3", $obj->getNote3());
    }
}
