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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0030Trait;

/**
 * z0030 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0030TraitTest extends AbstractTestCase {

    /**
     * Tests the setz0030() method.
     *
     * @return void
     */
    public function testSetz0030() {

        $obj = new TestFloatz0030Trait();

        $obj->setz0030(10.092018);
        $this->assertEquals(10.092018, $obj->getz0030());
    }
}
