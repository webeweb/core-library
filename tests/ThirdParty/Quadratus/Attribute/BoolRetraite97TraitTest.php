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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRetraite97Trait;

/**
 * Retraite97 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRetraite97TraitTest extends AbstractTestCase {

    /**
     * Tests the setRetraite97() method.
     *
     * @return void
     */
    public function testSetRetraite97() {

        $obj = new TestBoolRetraite97Trait();

        $obj->setRetraite97(true);
        $this->assertEquals(true, $obj->getRetraite97());
    }
}
