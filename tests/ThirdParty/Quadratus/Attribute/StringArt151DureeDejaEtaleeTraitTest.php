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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArt151DureeDejaEtaleeTrait;

/**
 * Art151 duree deja etalee trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArt151DureeDejaEtaleeTraitTest extends AbstractTestCase {

    /**
     * Tests the setArt151DureeDejaEtalee() method.
     *
     * @return void
     */
    public function testSetArt151DureeDejaEtalee() {

        $obj = new TestStringArt151DureeDejaEtaleeTrait();

        $obj->setArt151DureeDejaEtalee("art151DureeDejaEtalee");
        $this->assertEquals("art151DureeDejaEtalee", $obj->getArt151DureeDejaEtalee());
    }
}
