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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRegleTrait;

/**
 * Regle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRegleTraitTest extends AbstractTestCase {

    /**
     * Tests the setRegle() method.
     *
     * @return void
     */
    public function testSetRegle() {

        $obj = new TestStringRegleTrait();

        $obj->setRegle("regle");
        $this->assertEquals("regle", $obj->getRegle());
    }
}
