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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolQwsUtiliserLogoCabinetTrait;

/**
 * Q w s utiliser logo cabinet trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolQwsUtiliserLogoCabinetTraitTest extends AbstractTestCase {

    /**
     * Tests the setQwsUtiliserLogoCabinet() method.
     *
     * @return void
     */
    public function testSetQwsUtiliserLogoCabinet() {

        $obj = new TestBoolQwsUtiliserLogoCabinetTrait();

        $obj->setQwsUtiliserLogoCabinet(true);
        $this->assertEquals(true, $obj->getQwsUtiliserLogoCabinet());
    }
}
