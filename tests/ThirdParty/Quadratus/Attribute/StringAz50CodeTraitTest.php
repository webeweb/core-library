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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAz50CodeTrait;

/**
 * Az50 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAz50CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz50Code() method.
     *
     * @return void
     */
    public function testSetAz50Code() {

        $obj = new TestStringAz50CodeTrait();

        $obj->setAz50Code("az50Code");
        $this->assertEquals("az50Code", $obj->getAz50Code());
    }
}
