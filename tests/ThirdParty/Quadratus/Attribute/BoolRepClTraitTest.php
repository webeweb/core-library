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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRepClTrait;

/**
 * Rep c l trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRepClTraitTest extends AbstractTestCase {

    /**
     * Tests the setRepCl() method.
     *
     * @return void
     */
    public function testSetRepCl() {

        $obj = new TestBoolRepClTrait();

        $obj->setRepCl(true);
        $this->assertEquals(true, $obj->getRepCl());
    }
}
