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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat2BTaxeDue7Trait;

/**
 * 2 b taxe due7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float2BTaxeDue7TraitTest extends AbstractTestCase {

    /**
     * Tests the set2BTaxeDue7() method.
     *
     * @return void
     */
    public function testSet2BTaxeDue7() {

        $obj = new TestFloat2BTaxeDue7Trait();

        $obj->set2BTaxeDue7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BTaxeDue7());
    }
}
