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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringzRbtbicTrait;

/**
 * z r b t b i c trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringzRbtbicTraitTest extends AbstractTestCase {

    /**
     * Tests the setzRbtbic() method.
     *
     * @return void
     */
    public function testSetzRbtbic() {

        $obj = new TestStringzRbtbicTrait();

        $obj->setzRbtbic("zRbtbic");
        $this->assertEquals("zRbtbic", $obj->getzRbtbic());
    }
}
