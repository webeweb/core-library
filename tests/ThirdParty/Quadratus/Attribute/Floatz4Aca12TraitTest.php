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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz4Aca12Trait;

/**
 * z4 a c a12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz4Aca12TraitTest extends AbstractTestCase {

    /**
     * Tests the setz4Aca12() method.
     *
     * @return void
     */
    public function testSetz4Aca12() {

        $obj = new TestFloatz4Aca12Trait();

        $obj->setz4Aca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4Aca12());
    }
}
