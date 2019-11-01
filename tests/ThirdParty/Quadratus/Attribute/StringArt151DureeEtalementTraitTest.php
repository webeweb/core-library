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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArt151DureeEtalementTrait;

/**
 * Art151 duree etalement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArt151DureeEtalementTraitTest extends AbstractTestCase {

    /**
     * Tests the setArt151DureeEtalement() method.
     *
     * @return void
     */
    public function testSetArt151DureeEtalement() {

        $obj = new TestStringArt151DureeEtalementTrait();

        $obj->setArt151DureeEtalement("art151DureeEtalement");
        $this->assertEquals("art151DureeEtalement", $obj->getArt151DureeEtalement());
    }
}
