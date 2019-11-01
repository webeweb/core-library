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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteRelance2Trait;

/**
 * Texte relance2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteRelance2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteRelance2() method.
     *
     * @return void
     */
    public function testSetTexteRelance2() {

        $obj = new TestStringTexteRelance2Trait();

        $obj->setTexteRelance2("texteRelance2");
        $this->assertEquals("texteRelance2", $obj->getTexteRelance2());
    }
}
