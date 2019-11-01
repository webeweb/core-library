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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPathFormatTrait;

/**
 * Path_ format trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPathFormatTraitTest extends AbstractTestCase {

    /**
     * Tests the setPathFormat() method.
     *
     * @return void
     */
    public function testSetPathFormat() {

        $obj = new TestStringPathFormatTrait();

        $obj->setPathFormat("pathFormat");
        $this->assertEquals("pathFormat", $obj->getPathFormat());
    }
}
