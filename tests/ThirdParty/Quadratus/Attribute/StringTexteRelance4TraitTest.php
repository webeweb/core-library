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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteRelance4Trait;

/**
 * Texte relance4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteRelance4TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteRelance4() method.
     *
     * @return void
     */
    public function testSetTexteRelance4() {

        $obj = new TestStringTexteRelance4Trait();

        $obj->setTexteRelance4("texteRelance4");
        $this->assertEquals("texteRelance4", $obj->getTexteRelance4());
    }
}
