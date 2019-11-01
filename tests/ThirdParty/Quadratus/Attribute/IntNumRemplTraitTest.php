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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNumRemplTrait;

/**
 * Num rempl trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNumRemplTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumRempl() method.
     *
     * @return void
     */
    public function testSetNumRempl() {

        $obj = new TestIntNumRemplTrait();

        $obj->setNumRempl(10);
        $this->assertEquals(10, $obj->getNumRempl());
    }
}
