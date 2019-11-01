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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres1Trait;

/**
 * Corres1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres1() method.
     *
     * @return void
     */
    public function testSetCorres1() {

        $obj = new TestStringCorres1Trait();

        $obj->setCorres1("corres1");
        $this->assertEquals("corres1", $obj->getCorres1());
    }
}
