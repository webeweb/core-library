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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHtTaux196Trait;

/**
 * H t taux196 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHtTaux196TraitTest extends AbstractTestCase {

    /**
     * Tests the setHtTaux196() method.
     *
     * @return void
     */
    public function testSetHtTaux196() {

        $obj = new TestFloatHtTaux196Trait();

        $obj->setHtTaux196(10.092018);
        $this->assertEquals(10.092018, $obj->getHtTaux196());
    }
}
