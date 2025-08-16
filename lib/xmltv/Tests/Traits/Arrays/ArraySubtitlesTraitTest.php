<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Arrays;

use WBW\Library\XmlTv\Model\Subtitles;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArraySubtitlesTrait;

/**
 * Array subtitles trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArraySubtitlesTraitTest extends AbstractTestCase {

    /**
     * Test addSubtitles()
     *
     * @return void
     */
    public function testAddSubtitles(): void {

        // Set a Subtitles mock.
        $subtitles = new Subtitles();

        $obj = new TestArraySubtitlesTrait();

        $obj->addSubtitles($subtitles);
        $this->assertSame($subtitles, $obj->getSubtitles()[0]);
        $this->assertEquals(1, $obj->getNumberSubtitles());
        $this->assertTrue($obj->hasSubtitles());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArraySubtitlesTrait();

        $this->assertEquals([], $obj->getSubtitles());
        $this->assertEquals(0, $obj->getNumberSubtitles());
        $this->assertFalse($obj->hasSubtitles());
    }
}
