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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNoteMemoTrait;

/**
 * Note memo trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNoteMemoTraitTest extends AbstractTestCase {

    /**
     * Tests the setNoteMemo() method.
     *
     * @return void
     */
    public function testSetNoteMemo() {

        $obj = new TestStringNoteMemoTrait();

        $obj->setNoteMemo("noteMemo");
        $this->assertEquals("noteMemo", $obj->getNoteMemo());
    }
}
