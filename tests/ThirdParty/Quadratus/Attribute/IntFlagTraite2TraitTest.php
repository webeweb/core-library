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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntFlagTraite2Trait;

/**
 * Flag traite2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntFlagTraite2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFlagTraite2() method.
     *
     * @return void
     */
    public function testSetFlagTraite2() {

        $obj = new TestIntFlagTraite2Trait();

        $obj->setFlagTraite2(10);
        $this->assertEquals(10, $obj->getFlagTraite2());
    }
}
