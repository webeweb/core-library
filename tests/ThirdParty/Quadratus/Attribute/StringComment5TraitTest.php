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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment5Trait;

/**
 * Comment5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment5TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment5() method.
     *
     * @return void
     */
    public function testSetComment5() {

        $obj = new TestStringComment5Trait();

        $obj->setComment5("comment5");
        $this->assertEquals("comment5", $obj->getComment5());
    }
}
