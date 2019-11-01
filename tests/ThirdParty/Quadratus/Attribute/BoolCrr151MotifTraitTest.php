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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCrr151MotifTrait;

/**
 * C r r151 motif trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCrr151MotifTraitTest extends AbstractTestCase {

    /**
     * Tests the setCrr151Motif() method.
     *
     * @return void
     */
    public function testSetCrr151Motif() {

        $obj = new TestBoolCrr151MotifTrait();

        $obj->setCrr151Motif(true);
        $this->assertEquals(true, $obj->getCrr151Motif());
    }
}
