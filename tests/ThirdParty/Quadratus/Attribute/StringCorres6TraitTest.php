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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres6Trait;

/**
 * Corres6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres6TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres6() method.
     *
     * @return void
     */
    public function testSetCorres6() {

        $obj = new TestStringCorres6Trait();

        $obj->setCorres6("corres6");
        $this->assertEquals("corres6", $obj->getCorres6());
    }
}
