<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Document;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Word;

/**
 * Document  test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Model
 */
class DocumentTest extends AbstractTestCase {

    /**
     * Tests the addWord() method.
     *
     * @return void
     */
    public function testAddWord() {

        // Set a Word mock.
        $word = new Word();

        $obj = new Document();

        $obj->addWord($word);
        $this->assertSame($word, $obj->getWords()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Document();

        $this->assertNull($obj->getFilename());
        $this->assertEquals([], $obj->getPages());
        $this->assertEquals([], $obj->getWords());
    }
}