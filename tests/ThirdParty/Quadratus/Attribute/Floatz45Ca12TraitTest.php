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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz45Ca12Trait;

/**
 * z45 c a12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz45Ca12TraitTest extends AbstractTestCase {

    /**
     * Tests the setz45Ca12() method.
     *
     * @return void
     */
    public function testSetz45Ca12() {

        $obj = new TestFloatz45Ca12Trait();

        $obj->setz45Ca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz45Ca12());
    }
}
