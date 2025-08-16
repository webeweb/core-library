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

use WBW\Library\XmlTv\Model\EpisodeNum;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayEpisodeNumsTrait;

/**
 * Array episode numbers trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayEpisodeNumsTraitTest extends AbstractTestCase {

    /**
     * Test addEpisodeNum()
     *
     * @return void
     */
    public function testAddEpisodeNum(): void {

        // Set an Episode number mock.
        $episodeNum = new EpisodeNum();

        $obj = new TestArrayEpisodeNumsTrait();

        $obj->addEpisodeNum($episodeNum);
        $this->assertSame($episodeNum, $obj->getEpisodeNums()[0]);
        $this->assertEquals(1, $obj->getNumberEpisodeNums());
        $this->assertTrue($obj->hasEpisodeNums());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayEpisodeNumsTrait();

        $this->assertEquals([], $obj->getEpisodeNums());
        $this->assertEquals(0, $obj->getNumberEpisodeNums());
        $this->assertFalse($obj->hasEpisodeNums());
    }
}
