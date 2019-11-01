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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtForfaitSocial20Trait;

/**
 * Mt forfait social20 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtForfaitSocial20TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtForfaitSocial20() method.
     *
     * @return void
     */
    public function testSetMtForfaitSocial20() {

        $obj = new TestFloatMtForfaitSocial20Trait();

        $obj->setMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial20());
    }
}
