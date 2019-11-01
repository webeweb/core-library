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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat1MttAugmentationTrait;

/**
 * 1 mtt augmentation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float1MttAugmentationTraitTest extends AbstractTestCase {

    /**
     * Tests the set1MttAugmentation() method.
     *
     * @return void
     */
    public function testSet1MttAugmentation() {

        $obj = new TestFloat1MttAugmentationTrait();

        $obj->set1MttAugmentation(10.092018);
        $this->assertEquals(10.092018, $obj->get1MttAugmentation());
    }
}
