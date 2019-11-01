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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase38Trait;

/**
 * Case38 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase38TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase38() method.
     *
     * @return void
     */
    public function testSetCase38() {

        $obj = new TestBoolCase38Trait();

        $obj->setCase38(true);
        $this->assertEquals(true, $obj->getCase38());
    }
}
