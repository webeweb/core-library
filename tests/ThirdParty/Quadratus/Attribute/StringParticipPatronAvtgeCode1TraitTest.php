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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringParticipPatronAvtgeCode1Trait;

/**
 * Particip patron avtge_ code1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringParticipPatronAvtgeCode1TraitTest extends AbstractTestCase {

    /**
     * Tests the setParticipPatronAvtgeCode1() method.
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeCode1() {

        $obj = new TestStringParticipPatronAvtgeCode1Trait();

        $obj->setParticipPatronAvtgeCode1("participPatronAvtgeCode1");
        $this->assertEquals("participPatronAvtgeCode1", $obj->getParticipPatronAvtgeCode1());
    }
}
