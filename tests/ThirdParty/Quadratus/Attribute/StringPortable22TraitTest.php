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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPortable22Trait;

/**
 * Portable22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPortable22TraitTest extends AbstractTestCase {

    /**
     * Tests the setPortable22() method.
     *
     * @return void
     */
    public function testSetPortable22() {

        $obj = new TestStringPortable22Trait();

        $obj->setPortable22("portable22");
        $this->assertEquals("portable22", $obj->getPortable22());
    }
}
