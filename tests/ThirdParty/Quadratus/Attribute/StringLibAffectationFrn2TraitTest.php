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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectationFrn2Trait;

/**
 * Lib affectation frn2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectationFrn2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectationFrn2() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn2() {

        $obj = new TestStringLibAffectationFrn2Trait();

        $obj->setLibAffectationFrn2("libAffectationFrn2");
        $this->assertEquals("libAffectationFrn2", $obj->getLibAffectationFrn2());
    }
}
