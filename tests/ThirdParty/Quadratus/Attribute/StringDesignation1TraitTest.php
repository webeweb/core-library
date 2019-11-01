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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDesignation1Trait;

/**
 * Designation1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDesignation1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDesignation1() method.
     *
     * @return void
     */
    public function testSetDesignation1() {

        $obj = new TestStringDesignation1Trait();

        $obj->setDesignation1("designation1");
        $this->assertEquals("designation1", $obj->getDesignation1());
    }
}
