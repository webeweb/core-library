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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntBrNumFactTrait;

/**
 * B r num fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntBrNumFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setBrNumFact() method.
     *
     * @return void
     */
    public function testSetBrNumFact() {

        $obj = new TestIntBrNumFactTrait();

        $obj->setBrNumFact(10);
        $this->assertEquals(10, $obj->getBrNumFact());
    }
}
