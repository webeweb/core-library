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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCritereBool1Trait;

/**
 * Critere bool1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCritereBool1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereBool1() method.
     *
     * @return void
     */
    public function testSetCritereBool1() {

        $obj = new TestBoolCritereBool1Trait();

        $obj->setCritereBool1(true);
        $this->assertEquals(true, $obj->getCritereBool1());
    }
}
