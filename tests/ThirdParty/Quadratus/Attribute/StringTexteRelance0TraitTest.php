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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteRelance0Trait;

/**
 * Texte relance0 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteRelance0TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteRelance0() method.
     *
     * @return void
     */
    public function testSetTexteRelance0() {

        $obj = new TestStringTexteRelance0Trait();

        $obj->setTexteRelance0("texteRelance0");
        $this->assertEquals("texteRelance0", $obj->getTexteRelance0());
    }
}
