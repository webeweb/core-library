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

use WBW\Library\XmlTv\Model\Commentator;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayCommentatorsTrait;

/**
 * Array commentators trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayCommentatorsTraitTest extends AbstractTestCase {

    /**
     * Test addCommentator()
     *
     * @return void
     */
    public function testAddCommentator(): void {

        // Set a Commentator mock.
        $commentator = new Commentator();

        $obj = new TestArrayCommentatorsTrait();

        $obj->addCommentator($commentator);
        $this->assertSame($commentator, $obj->getCommentators()[0]);
        $this->assertEquals(1, $obj->getNumberCommentators());
        $this->assertTrue($obj->hasCommentators());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayCommentatorsTrait();

        $this->assertEquals([], $obj->getCommentators());
        $this->assertEquals(0, $obj->getNumberCommentators());
        $this->assertFalse($obj->hasCommentators());
    }
}
