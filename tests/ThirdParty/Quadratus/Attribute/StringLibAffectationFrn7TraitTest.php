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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectationFrn7Trait;

/**
 * Lib affectation frn7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectationFrn7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectationFrn7() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn7() {

        $obj = new TestStringLibAffectationFrn7Trait();

        $obj->setLibAffectationFrn7("libAffectationFrn7");
        $this->assertEquals("libAffectationFrn7", $obj->getLibAffectationFrn7());
    }
}
