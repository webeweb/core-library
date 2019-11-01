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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment3Trait;

/**
 * Comment3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment3TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment3() method.
     *
     * @return void
     */
    public function testSetComment3() {

        $obj = new TestStringComment3Trait();

        $obj->setComment3("comment3");
        $this->assertEquals("comment3", $obj->getComment3());
    }
}
