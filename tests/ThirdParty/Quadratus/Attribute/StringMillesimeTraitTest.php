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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMillesimeTrait;

/**
 * Millesime trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMillesimeTraitTest extends AbstractTestCase {

    /**
     * Tests the setMillesime() method.
     *
     * @return void
     */
    public function testSetMillesime() {

        $obj = new TestStringMillesimeTrait();

        $obj->setMillesime("millesime");
        $this->assertEquals("millesime", $obj->getMillesime());
    }
}
