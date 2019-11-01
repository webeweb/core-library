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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEdDucsOptBtpTrait;

/**
 * Ed d u c s opt b t p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEdDucsOptBtpTraitTest extends AbstractTestCase {

    /**
     * Tests the setEdDucsOptBtp() method.
     *
     * @return void
     */
    public function testSetEdDucsOptBtp() {

        $obj = new TestStringEdDucsOptBtpTrait();

        $obj->setEdDucsOptBtp("edDucsOptBtp");
        $this->assertEquals("edDucsOptBtp", $obj->getEdDucsOptBtp());
    }
}
