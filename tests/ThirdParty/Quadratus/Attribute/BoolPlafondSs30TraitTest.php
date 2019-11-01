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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPlafondSs30Trait;

/**
 * Plafond s s30 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPlafondSs30TraitTest extends AbstractTestCase {

    /**
     * Tests the setPlafondSs30() method.
     *
     * @return void
     */
    public function testSetPlafondSs30() {

        $obj = new TestBoolPlafondSs30Trait();

        $obj->setPlafondSs30(true);
        $this->assertEquals(true, $obj->getPlafondSs30());
    }
}
