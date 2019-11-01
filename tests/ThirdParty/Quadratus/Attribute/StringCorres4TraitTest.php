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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres4Trait;

/**
 * Corres4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres4() method.
     *
     * @return void
     */
    public function testSetCorres4() {

        $obj = new TestStringCorres4Trait();

        $obj->setCorres4("corres4");
        $this->assertEquals("corres4", $obj->getCorres4());
    }
}
