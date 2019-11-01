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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectationFrn1Trait;

/**
 * Lib affectation frn1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectationFrn1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectationFrn1() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn1() {

        $obj = new TestStringLibAffectationFrn1Trait();

        $obj->setLibAffectationFrn1("libAffectationFrn1");
        $this->assertEquals("libAffectationFrn1", $obj->getLibAffectationFrn1());
    }
}
