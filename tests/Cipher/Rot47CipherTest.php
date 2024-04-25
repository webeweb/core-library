<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Cipher;

use WBW\Library\Common\Cipher\Rot47Cipher;
use WBW\Library\Common\Tests\Fixtures\Cipher\TestRot47Cipher;
use WBW\Library\Maths\Tests\AbstractTestCase;

/**
 * ROT 47 cipher test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Cipher
 */
class Rot47CipherTest extends AbstractTestCase {

    /**
     * Test alphabet()
     *
     * @return void
     */
    public function testAlphabet(): void {

        $this->assertCount(94, TestRot47Cipher::alphabet());
    }

    /**
     * Test decode()
     *
     * @return void
     */
    public function testDecode(): void {

        $this->assertNull(Rot47Cipher::decode(null));
        $this->assertEquals("", Rot47Cipher::decode(""));
        $this->assertEquals("HELLO WORLD !", Rot47Cipher::decode("wt{{~ (~#{s P"));
        $this->assertEquals("Hello world !", Rot47Cipher::decode("w6==@ H@C=5 P"));
    }

    /**
     * Test encode()
     *
     * @return void
     */
    public function testEncode(): void {

        $this->assertNull(Rot47Cipher::encode(null));
        $this->assertEquals("", Rot47Cipher::encode(""));
        $this->assertEquals("wt{{~ (~#{s P", Rot47Cipher::encode("HELLO WORLD !"));
        $this->assertEquals("w6==@ H@C=5 P", Rot47Cipher::encode("Hello world !"));
    }
}
