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

use WBW\Library\Maths\Helper\Rot47Helper;
use WBW\Library\Maths\Tests\AbstractTestCase;
use WBW\Library\Maths\Tests\Helper\Fixtures\TestRot47Helper;

/**
 * ROT 47 helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class Rot47HelperTest extends AbstractTestCase {

    /**
     * Tests alphabet()
     *
     * @return void
     */
    public function testAlphabet(): void {

        $this->assertCount(94, TestRot47Helper::alphabet());
    }

    /**
     * Tests decode()
     *
     * @return void
     */
    public function testDecode(): void {

        $this->assertNull(Rot47Helper::decode(null));
        $this->assertEquals("", Rot47Helper::decode(""));
        $this->assertEquals("HELLO WORLD !", Rot47Helper::decode("wt{{~ (~#{s P"));
        $this->assertEquals("Hello world !", Rot47Helper::decode("w6==@ H@C=5 P"));
    }

    /**
     * Tests encode()
     *
     * @return void
     */
    public function testEncode(): void {

        $this->assertNull(Rot47Helper::encode(null));
        $this->assertEquals("", Rot47Helper::encode(""));
        $this->assertEquals("wt{{~ (~#{s P", Rot47Helper::encode("HELLO WORLD !"));
        $this->assertEquals("w6==@ H@C=5 P", Rot47Helper::encode("Hello world !"));
    }
}
