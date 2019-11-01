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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectationFrn4Trait;

/**
 * Lib affectation frn4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectationFrn4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectationFrn4() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn4() {

        $obj = new TestStringLibAffectationFrn4Trait();

        $obj->setLibAffectationFrn4("libAffectationFrn4");
        $this->assertEquals("libAffectationFrn4", $obj->getLibAffectationFrn4());
    }
}
