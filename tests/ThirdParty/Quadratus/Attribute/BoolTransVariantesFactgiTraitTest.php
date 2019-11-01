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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTransVariantesFactgiTrait;

/**
 * Trans variantes f a c t_ g i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTransVariantesFactgiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTransVariantesFactgi() method.
     *
     * @return void
     */
    public function testSetTransVariantesFactgi() {

        $obj = new TestBoolTransVariantesFactgiTrait();

        $obj->setTransVariantesFactgi(true);
        $this->assertEquals(true, $obj->getTransVariantesFactgi());
    }
}
