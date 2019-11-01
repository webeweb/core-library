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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFtisNumCpt1Trait;

/**
 * F t i s num cpt1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFtisNumCpt1TraitTest extends AbstractTestCase {

    /**
     * Tests the setFtisNumCpt1() method.
     *
     * @return void
     */
    public function testSetFtisNumCpt1() {

        $obj = new TestStringFtisNumCpt1Trait();

        $obj->setFtisNumCpt1("ftisNumCpt1");
        $this->assertEquals("ftisNumCpt1", $obj->getFtisNumCpt1());
    }
}
