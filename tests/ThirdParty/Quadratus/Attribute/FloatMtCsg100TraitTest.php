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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtCsg100Trait;

/**
 * Mt c s g100 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtCsg100TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtCsg100() method.
     *
     * @return void
     */
    public function testSetMtCsg100() {

        $obj = new TestFloatMtCsg100Trait();

        $obj->setMtCsg100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCsg100());
    }
}
