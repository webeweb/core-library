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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase36Trait;

/**
 * Case36 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase36TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase36() method.
     *
     * @return void
     */
    public function testSetCase36() {

        $obj = new TestBoolCase36Trait();

        $obj->setCase36(true);
        $this->assertEquals(true, $obj->getCase36());
    }
}
