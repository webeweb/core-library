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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectationFrn3Trait;

/**
 * Lib affectation frn3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectationFrn3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectationFrn3() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn3() {

        $obj = new TestStringLibAffectationFrn3Trait();

        $obj->setLibAffectationFrn3("libAffectationFrn3");
        $this->assertEquals("libAffectationFrn3", $obj->getLibAffectationFrn3());
    }
}
