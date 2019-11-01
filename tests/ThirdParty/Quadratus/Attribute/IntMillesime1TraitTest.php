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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMillesime1Trait;

/**
 * Millesime_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMillesime1TraitTest extends AbstractTestCase {

    /**
     * Tests the setMillesime1() method.
     *
     * @return void
     */
    public function testSetMillesime1() {

        $obj = new TestIntMillesime1Trait();

        $obj->setMillesime1(10);
        $this->assertEquals(10, $obj->getMillesime1());
    }
}
