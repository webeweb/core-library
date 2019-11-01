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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCritereBool2Trait;

/**
 * Critere bool2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCritereBool2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereBool2() method.
     *
     * @return void
     */
    public function testSetCritereBool2() {

        $obj = new TestBoolCritereBool2Trait();

        $obj->setCritereBool2(true);
        $this->assertEquals(true, $obj->getCritereBool2());
    }
}
