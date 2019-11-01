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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolNonRemboursableTrait;

/**
 * Non remboursable trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolNonRemboursableTraitTest extends AbstractTestCase {

    /**
     * Tests the setNonRemboursable() method.
     *
     * @return void
     */
    public function testSetNonRemboursable() {

        $obj = new TestBoolNonRemboursableTrait();

        $obj->setNonRemboursable(true);
        $this->assertEquals(true, $obj->getNonRemboursable());
    }
}
