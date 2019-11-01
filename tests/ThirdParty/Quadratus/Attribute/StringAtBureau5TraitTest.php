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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtBureau5Trait;

/**
 * At bureau5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtBureau5TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtBureau5() method.
     *
     * @return void
     */
    public function testSetAtBureau5() {

        $obj = new TestStringAtBureau5Trait();

        $obj->setAtBureau5("atBureau5");
        $this->assertEquals("atBureau5", $obj->getAtBureau5());
    }
}
