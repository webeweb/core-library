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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteBTrait;

/**
 * Texte b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteBTraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteB() method.
     *
     * @return void
     */
    public function testSetTexteB() {

        $obj = new TestStringTexteBTrait();

        $obj->setTexteB("texteB");
        $this->assertEquals("texteB", $obj->getTexteB());
    }
}
