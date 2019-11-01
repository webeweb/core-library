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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFtisNumCpt2Trait;

/**
 * F t i s num cpt2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFtisNumCpt2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFtisNumCpt2() method.
     *
     * @return void
     */
    public function testSetFtisNumCpt2() {

        $obj = new TestStringFtisNumCpt2Trait();

        $obj->setFtisNumCpt2("ftisNumCpt2");
        $this->assertEquals("ftisNumCpt2", $obj->getFtisNumCpt2());
    }
}
