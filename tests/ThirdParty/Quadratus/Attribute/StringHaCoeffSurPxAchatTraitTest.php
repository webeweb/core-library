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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringHaCoeffSurPxAchatTrait;

/**
 * H a_ coeff sur px achat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringHaCoeffSurPxAchatTraitTest extends AbstractTestCase {

    /**
     * Tests the setHaCoeffSurPxAchat() method.
     *
     * @return void
     */
    public function testSetHaCoeffSurPxAchat() {

        $obj = new TestStringHaCoeffSurPxAchatTrait();

        $obj->setHaCoeffSurPxAchat("haCoeffSurPxAchat");
        $this->assertEquals("haCoeffSurPxAchat", $obj->getHaCoeffSurPxAchat());
    }
}
