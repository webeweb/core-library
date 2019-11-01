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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringUniteDateAncienCollegeTrait;

/**
 * Unite date ancien college trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringUniteDateAncienCollegeTraitTest extends AbstractTestCase {

    /**
     * Tests the setUniteDateAncienCollege() method.
     *
     * @return void
     */
    public function testSetUniteDateAncienCollege() {

        $obj = new TestStringUniteDateAncienCollegeTrait();

        $obj->setUniteDateAncienCollege("uniteDateAncienCollege");
        $this->assertEquals("uniteDateAncienCollege", $obj->getUniteDateAncienCollege());
    }
}
