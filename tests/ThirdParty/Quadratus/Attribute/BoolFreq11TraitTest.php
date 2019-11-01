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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFreq11Trait;

/**
 * Freq11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFreq11TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq11() method.
     *
     * @return void
     */
    public function testSetFreq11() {

        $obj = new TestBoolFreq11Trait();

        $obj->setFreq11(true);
        $this->assertEquals(true, $obj->getFreq11());
    }
}
