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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolUseDtDernXFerTrait;

/**
 * Use dt dern x fer trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolUseDtDernXFerTraitTest extends AbstractTestCase {

    /**
     * Tests the setUseDtDernXFer() method.
     *
     * @return void
     */
    public function testSetUseDtDernXFer() {

        $obj = new TestBoolUseDtDernXFerTrait();

        $obj->setUseDtDernXFer(true);
        $this->assertEquals(true, $obj->getUseDtDernXFer());
    }
}
