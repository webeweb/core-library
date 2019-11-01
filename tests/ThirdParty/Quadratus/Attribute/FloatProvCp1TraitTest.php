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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatProvCp1Trait;

/**
 * Prov c p_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatProvCp1TraitTest extends AbstractTestCase {

    /**
     * Tests the setProvCp1() method.
     *
     * @return void
     */
    public function testSetProvCp1() {

        $obj = new TestFloatProvCp1Trait();

        $obj->setProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCp1());
    }
}
