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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringzRbtibanTrait;

/**
 * z r b t i b a n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringzRbtibanTraitTest extends AbstractTestCase {

    /**
     * Tests the setzRbtiban() method.
     *
     * @return void
     */
    public function testSetzRbtiban() {

        $obj = new TestStringzRbtibanTrait();

        $obj->setzRbtiban("zRbtiban");
        $this->assertEquals("zRbtiban", $obj->getzRbtiban());
    }
}
