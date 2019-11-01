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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDesignation5Trait;

/**
 * Designation5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDesignation5TraitTest extends AbstractTestCase {

    /**
     * Tests the setDesignation5() method.
     *
     * @return void
     */
    public function testSetDesignation5() {

        $obj = new TestStringDesignation5Trait();

        $obj->setDesignation5("designation5");
        $this->assertEquals("designation5", $obj->getDesignation5());
    }
}
