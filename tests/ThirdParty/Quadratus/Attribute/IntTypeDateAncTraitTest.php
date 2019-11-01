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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTypeDateAncTrait;

/**
 * Type date anc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTypeDateAncTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeDateAnc() method.
     *
     * @return void
     */
    public function testSetTypeDateAnc() {

        $obj = new TestIntTypeDateAncTrait();

        $obj->setTypeDateAnc(10);
        $this->assertEquals(10, $obj->getTypeDateAnc());
    }
}
