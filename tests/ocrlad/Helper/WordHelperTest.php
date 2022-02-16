<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Helper;

use WBW\Library\OcrLad\Helper\WordHelper;
use WBW\Library\OcrLad\Model\Word;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * Word helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Helper
 */
class WordHelperTest extends AbstractTestCase {

    /**
     * Tests implodeWords()
     *
     * @return void
     */
    public function testImplodeWords(): void {

        // Set a Word mocks.
        $word1 = (new Word())->setContent("Hello");
        $word2 = (new Word())->setContent("World");
        $word3 = (new Word())->setContent("!");

        $this->assertEquals("Hello World !", WordHelper::implodeWords([$word1, $word2, $word3]));
        $this->assertEquals("HelloWorld!", WordHelper::implodeWords([$word1, $word2, $word3], ""));
    }
}
