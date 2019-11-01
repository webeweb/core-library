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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille7Trait;

/**
 * Famille7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille7TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille7() method.
     *
     * @return void
     */
    public function testSetFamille7() {

        $obj = new TestStringFamille7Trait();

        $obj->setFamille7("famille7");
        $this->assertEquals("famille7", $obj->getFamille7());
    }
}
