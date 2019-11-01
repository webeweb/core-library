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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase45Trait;

/**
 * Case45 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase45TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase45() method.
     *
     * @return void
     */
    public function testSetCase45() {

        $obj = new TestBoolCase45Trait();

        $obj->setCase45(true);
        $this->assertEquals(true, $obj->getCase45());
    }
}
