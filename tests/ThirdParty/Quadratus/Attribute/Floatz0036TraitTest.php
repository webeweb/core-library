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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0036Trait;

/**
 * z0036 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0036TraitTest extends AbstractTestCase {

    /**
     * Tests the setz0036() method.
     *
     * @return void
     */
    public function testSetz0036() {

        $obj = new TestFloatz0036Trait();

        $obj->setz0036(10.092018);
        $this->assertEquals(10.092018, $obj->getz0036());
    }
}
