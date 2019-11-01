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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteRelance3Trait;

/**
 * Texte relance3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteRelance3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteRelance3() method.
     *
     * @return void
     */
    public function testSetTexteRelance3() {

        $obj = new TestStringTexteRelance3Trait();

        $obj->setTexteRelance3("texteRelance3");
        $this->assertEquals("texteRelance3", $obj->getTexteRelance3());
    }
}
