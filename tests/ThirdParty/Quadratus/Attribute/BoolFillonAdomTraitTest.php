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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFillonAdomTrait;

/**
 * Fillon a d o m trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFillonAdomTraitTest extends AbstractTestCase {

    /**
     * Tests the setFillonAdom() method.
     *
     * @return void
     */
    public function testSetFillonAdom() {

        $obj = new TestBoolFillonAdomTrait();

        $obj->setFillonAdom(true);
        $this->assertEquals(true, $obj->getFillonAdom());
    }
}
