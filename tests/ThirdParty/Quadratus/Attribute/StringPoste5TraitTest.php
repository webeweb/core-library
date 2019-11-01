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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPoste5Trait;

/**
 * Poste5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPoste5TraitTest extends AbstractTestCase {

    /**
     * Tests the setPoste5() method.
     *
     * @return void
     */
    public function testSetPoste5() {

        $obj = new TestStringPoste5Trait();

        $obj->setPoste5("poste5");
        $this->assertEquals("poste5", $obj->getPoste5());
    }
}
