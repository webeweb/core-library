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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsArtPiedTrait;

/**
 * T r s art pied trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsArtPiedTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsArtPied() method.
     *
     * @return void
     */
    public function testSetTrsArtPied() {

        $obj = new TestStringTrsArtPiedTrait();

        $obj->setTrsArtPied("trsArtPied");
        $this->assertEquals("trsArtPied", $obj->getTrsArtPied());
    }
}
