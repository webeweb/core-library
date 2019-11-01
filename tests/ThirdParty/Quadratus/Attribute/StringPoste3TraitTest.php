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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPoste3Trait;

/**
 * Poste3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPoste3TraitTest extends AbstractTestCase {

    /**
     * Tests the setPoste3() method.
     *
     * @return void
     */
    public function testSetPoste3() {

        $obj = new TestStringPoste3Trait();

        $obj->setPoste3("poste3");
        $this->assertEquals("poste3", $obj->getPoste3());
    }
}
