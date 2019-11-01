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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres8Trait;

/**
 * Corres8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres8() method.
     *
     * @return void
     */
    public function testSetCorres8() {

        $obj = new TestStringCorres8Trait();

        $obj->setCorres8("corres8");
        $this->assertEquals("corres8", $obj->getCorres8());
    }
}
