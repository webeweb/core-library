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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolYaDroitsCollabTrait;

/**
 * Ya droits collab trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolYaDroitsCollabTraitTest extends AbstractTestCase {

    /**
     * Tests the setYaDroitsCollab() method.
     *
     * @return void
     */
    public function testSetYaDroitsCollab() {

        $obj = new TestBoolYaDroitsCollabTrait();

        $obj->setYaDroitsCollab(true);
        $this->assertEquals(true, $obj->getYaDroitsCollab());
    }
}
