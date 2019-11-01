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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHtTaux7Trait;

/**
 * H t taux7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHtTaux7TraitTest extends AbstractTestCase {

    /**
     * Tests the setHtTaux7() method.
     *
     * @return void
     */
    public function testSetHtTaux7() {

        $obj = new TestFloatHtTaux7Trait();

        $obj->setHtTaux7(10.092018);
        $this->assertEquals(10.092018, $obj->getHtTaux7());
    }
}
