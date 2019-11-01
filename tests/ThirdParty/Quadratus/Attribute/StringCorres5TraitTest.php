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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres5Trait;

/**
 * Corres5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres5() method.
     *
     * @return void
     */
    public function testSetCorres5() {

        $obj = new TestStringCorres5Trait();

        $obj->setCorres5("corres5");
        $this->assertEquals("corres5", $obj->getCorres5());
    }
}
