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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat18CreditTvaca12Trait;

/**
 * 18 credit t v a c a12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float18CreditTvaca12TraitTest extends AbstractTestCase {

    /**
     * Tests the set18CreditTvaca12() method.
     *
     * @return void
     */
    public function testSet18CreditTvaca12() {

        $obj = new TestFloat18CreditTvaca12Trait();

        $obj->set18CreditTvaca12(10.092018);
        $this->assertEquals(10.092018, $obj->get18CreditTvaca12());
    }
}
