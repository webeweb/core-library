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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectation6Trait;

/**
 * Lib affectation6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectation6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectation6() method.
     *
     * @return void
     */
    public function testSetLibAffectation6() {

        $obj = new TestStringLibAffectation6Trait();

        $obj->setLibAffectation6("libAffectation6");
        $this->assertEquals("libAffectation6", $obj->getLibAffectation6());
    }
}
