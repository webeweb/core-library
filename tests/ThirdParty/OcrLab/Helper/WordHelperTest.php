<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Helper;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Helper\WordHelper;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Word;

/**
 * Word helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Helper
 */
class WordHelperTest extends AbstractTestCase {

    /**
     * Tests the implodeWords() method.
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