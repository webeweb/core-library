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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat4MttDiminutionTrait;

/**
 * 4 mtt diminution trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float4MttDiminutionTraitTest extends AbstractTestCase {

    /**
     * Tests the set4MttDiminution() method.
     *
     * @return void
     */
    public function testSet4MttDiminution() {

        $obj = new TestFloat4MttDiminutionTrait();

        $obj->set4MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get4MttDiminution());
    }
}
