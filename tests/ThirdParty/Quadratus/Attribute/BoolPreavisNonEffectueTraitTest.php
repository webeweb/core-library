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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPreavisNonEffectueTrait;

/**
 * Preavis non effectue trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPreavisNonEffectueTraitTest extends AbstractTestCase {

    /**
     * Tests the setPreavisNonEffectue() method.
     *
     * @return void
     */
    public function testSetPreavisNonEffectue() {

        $obj = new TestBoolPreavisNonEffectueTrait();

        $obj->setPreavisNonEffectue(true);
        $this->assertEquals(true, $obj->getPreavisNonEffectue());
    }
}
