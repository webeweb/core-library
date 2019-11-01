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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille9Trait;

/**
 * Famille9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille9TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille9() method.
     *
     * @return void
     */
    public function testSetFamille9() {

        $obj = new TestStringFamille9Trait();

        $obj->setFamille9("famille9");
        $this->assertEquals("famille9", $obj->getFamille9());
    }
}
