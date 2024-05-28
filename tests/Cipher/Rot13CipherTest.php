<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Cipher;

use WBW\Library\Common\Cipher\Rot13Cipher;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Cipher\TestRot13Cipher;

/**
 * ROT 13 cipher test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Cipher
 */
class Rot13CipherTest extends AbstractTestCase {

    /**
     * Test alphabet()
     *
     * @return void
     */
    public function testAlphabet(): void {

        $this->assertCount(26, TestRot13Cipher::alphabet());
    }

    /**
     * Test decode()
     *
     * @return void
     */
    public function testDecode(): void {

        $this->assertNull(Rot13Cipher::decode(null));
        $this->assertEquals("", Rot13Cipher::decode(""));
        $this->assertEquals("HELLO WORLD !", Rot13Cipher::decode("URYYB JBEYQ !"));
        $this->assertEquals("Hello world !", Rot13Cipher::decode("Uryyb jbeyq !"));
    }

    /**
     * Test encode()
     *
     * @return void
     */
    public function testEncode(): void {

        $this->assertNull(Rot13Cipher::encode(null));
        $this->assertEquals("", Rot13Cipher::encode(""));
        $this->assertEquals("URYYB JBEYQ !", Rot13Cipher::encode("HELLO WORLD !"));
        $this->assertEquals("Uryyb jbeyq !", Rot13Cipher::encode("Hello world !"));
    }
}
