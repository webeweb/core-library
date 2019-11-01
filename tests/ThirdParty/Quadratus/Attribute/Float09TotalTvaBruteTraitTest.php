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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat09TotalTvaBruteTrait;

/**
 * 09 total t v a brute trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float09TotalTvaBruteTraitTest extends AbstractTestCase {

    /**
     * Tests the set09TotalTvaBrute() method.
     *
     * @return void
     */
    public function testSet09TotalTvaBrute() {

        $obj = new TestFloat09TotalTvaBruteTrait();

        $obj->set09TotalTvaBrute(10.092018);
        $this->assertEquals(10.092018, $obj->get09TotalTvaBrute());
    }
}
