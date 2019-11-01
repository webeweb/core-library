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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtBureauTrait;

/**
 * At bureau trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtBureauTraitTest extends AbstractTestCase {

    /**
     * Tests the setAtBureau() method.
     *
     * @return void
     */
    public function testSetAtBureau() {

        $obj = new TestStringAtBureauTrait();

        $obj->setAtBureau("atBureau");
        $this->assertEquals("atBureau", $obj->getAtBureau());
    }
}
