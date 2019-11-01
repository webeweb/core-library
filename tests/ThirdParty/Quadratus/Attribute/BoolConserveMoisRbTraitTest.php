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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolConserveMoisRbTrait;

/**
 * Conserve mois r b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolConserveMoisRbTraitTest extends AbstractTestCase {

    /**
     * Tests the setConserveMoisRb() method.
     *
     * @return void
     */
    public function testSetConserveMoisRb() {

        $obj = new TestBoolConserveMoisRbTrait();

        $obj->setConserveMoisRb(true);
        $this->assertEquals(true, $obj->getConserveMoisRb());
    }
}
