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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz8004Trait;

/**
 * z8004 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz8004TraitTest extends AbstractTestCase {

    /**
     * Tests the setz8004() method.
     *
     * @return void
     */
    public function testSetz8004() {

        $obj = new TestFloatz8004Trait();

        $obj->setz8004(10.092018);
        $this->assertEquals(10.092018, $obj->getz8004());
    }
}
