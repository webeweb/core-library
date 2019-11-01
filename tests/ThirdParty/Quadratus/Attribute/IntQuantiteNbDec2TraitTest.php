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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntQuantiteNbDec2Trait;

/**
 * Quantite nb dec2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntQuantiteNbDec2TraitTest extends AbstractTestCase {

    /**
     * Tests the setQuantiteNbDec2() method.
     *
     * @return void
     */
    public function testSetQuantiteNbDec2() {

        $obj = new TestIntQuantiteNbDec2Trait();

        $obj->setQuantiteNbDec2(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec2());
    }
}
