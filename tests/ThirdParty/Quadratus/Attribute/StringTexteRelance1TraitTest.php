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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteRelance1Trait;

/**
 * Texte relance1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteRelance1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteRelance1() method.
     *
     * @return void
     */
    public function testSetTexteRelance1() {

        $obj = new TestStringTexteRelance1Trait();

        $obj->setTexteRelance1("texteRelance1");
        $this->assertEquals("texteRelance1", $obj->getTexteRelance1());
    }
}
