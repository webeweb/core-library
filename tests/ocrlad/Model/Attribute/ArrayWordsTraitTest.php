<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Model\Attribute;

use WBW\Library\OcrLad\Model\Word;
use WBW\Library\OcrLad\Tests\AbstractTestCase;
use WBW\Library\OcrLad\Tests\Fixtures\Model\Attribute\TestArrayWordsTrait;

/**
 * Array words trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Model\Attribute
 */
class ArrayWordsTraitTest extends AbstractTestCase {

    /**
     * Tests addWord()
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
}
