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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsArtPied2Trait;

/**
 * T r s art pied2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsArtPied2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsArtPied2() method.
     *
     * @return void
     */
    public function testSetTrsArtPied2() {

        $obj = new TestStringTrsArtPied2Trait();

        $obj->setTrsArtPied2("trsArtPied2");
        $this->assertEquals("trsArtPied2", $obj->getTrsArtPied2());
    }
}
