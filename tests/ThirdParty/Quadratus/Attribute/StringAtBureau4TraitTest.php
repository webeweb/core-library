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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtBureau4Trait;

/**
 * At bureau4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtBureau4TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtBureau4() method.
     *
     * @return void
     */
    public function testSetAtBureau4() {

        $obj = new TestStringAtBureau4Trait();

        $obj->setAtBureau4("atBureau4");
        $this->assertEquals("atBureau4", $obj->getAtBureau4());
    }
}
