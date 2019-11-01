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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz47Ca12Trait;

/**
 * z47 c a12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz47Ca12TraitTest extends AbstractTestCase {

    /**
     * Tests the setz47Ca12() method.
     *
     * @return void
     */
    public function testSetz47Ca12() {

        $obj = new TestFloatz47Ca12Trait();

        $obj->setz47Ca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz47Ca12());
    }
}
