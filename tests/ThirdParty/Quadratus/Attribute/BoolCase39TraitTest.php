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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase39Trait;

/**
 * Case39 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase39TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase39() method.
     *
     * @return void
     */
    public function testSetCase39() {

        $obj = new TestBoolCase39Trait();

        $obj->setCase39(true);
        $this->assertEquals(true, $obj->getCase39());
    }
}
