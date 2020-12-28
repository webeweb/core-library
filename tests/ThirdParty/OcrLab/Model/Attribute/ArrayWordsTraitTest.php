<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Model\Attribute\TestArrayWordsTrait;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Word;

/**
 * Array words trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Model\Attribute
 */
class ArrayWordsTraitTest extends AbstractTestCase {

    /**
     * Tests the addWord() method.
     *
     * @return void
     */
    public function testAddWord(): void {

        // Set a Word mock.
        $word = new Word();

        $obj = new TestArrayWordsTrait();

        $obj->addWord($word);
        $this->assertSame($word, $obj->getWords()[0]);
        $this->assertEquals(1, $obj->getNumberWords());
        $this->assertTrue($obj->hasWords());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayWordsTrait();

        $this->assertEquals([], $obj->getWords());
        $this->assertEquals(0, $obj->getNumberWords());
        $this->assertFalse($obj->hasWords());
    }
}