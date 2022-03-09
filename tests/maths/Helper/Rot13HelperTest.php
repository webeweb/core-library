<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Tests\Helper;

use WBW\Library\Maths\Helper\Rot13Helper;
use WBW\Library\Maths\Tests\AbstractTestCase;
use WBW\Library\Maths\Tests\Helper\Fixtures\TestRot13Helper;

/**
 * ROT 13 helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class Rot13HelperTest extends AbstractTestCase {

    /**
     * Tests alphabet()
     *
     * @return void
     */
    public function testAlphabet(): void {

        $this->assertCount(26, TestRot13Helper::alphabet());
    }

    /**
     * Tests decode()
     *
     * @return void
     */
    public function testDecode(): void {

        $this->assertNull(Rot13Helper::decode(null));
        $this->assertEquals("", Rot13Helper::decode(""));
        $this->assertEquals("HELLO WORLD !", Rot13Helper::decode("URYYB JBEYQ !"));
        $this->assertEquals("Hello world !", Rot13Helper::decode("Uryyb jbeyq !"));
    }

    /**
     * Tests encode()
     *
     * @return void
     */
    public function testEncode(): void {

        $this->assertNull(Rot13Helper::encode(null));
        $this->assertEquals("", Rot13Helper::encode(""));
        $this->assertEquals("URYYB JBEYQ !", Rot13Helper::encode("HELLO WORLD !"));
        $this->assertEquals("Uryyb jbeyq !", Rot13Helper::encode("Hello world !"));
    }
}
