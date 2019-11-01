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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPoste2Trait;

/**
 * Poste2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPoste2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPoste2() method.
     *
     * @return void
     */
    public function testSetPoste2() {

        $obj = new TestStringPoste2Trait();

        $obj->setPoste2("poste2");
        $this->assertEquals("poste2", $obj->getPoste2());
    }
}
