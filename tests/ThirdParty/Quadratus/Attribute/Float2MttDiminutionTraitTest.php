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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat2MttDiminutionTrait;

/**
 * 2 mtt diminution trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float2MttDiminutionTraitTest extends AbstractTestCase {

    /**
     * Tests the set2MttDiminution() method.
     *
     * @return void
     */
    public function testSet2MttDiminution() {

        $obj = new TestFloat2MttDiminutionTrait();

        $obj->set2MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttDiminution());
    }
}
