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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntEmetteur3Trait;

/**
 * Emetteur3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntEmetteur3TraitTest extends AbstractTestCase {

    /**
     * Tests the setEmetteur3() method.
     *
     * @return void
     */
    public function testSetEmetteur3() {

        $obj = new TestIntEmetteur3Trait();

        $obj->setEmetteur3(10);
        $this->assertEquals(10, $obj->getEmetteur3());
    }
}
