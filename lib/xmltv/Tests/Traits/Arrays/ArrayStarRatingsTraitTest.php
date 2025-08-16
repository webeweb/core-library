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

use WBW\Library\XmlTv\Model\StarRating;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayStarRatingsTrait;

/**
 * Array star ratings trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayStarRatingsTraitTest extends AbstractTestCase {

    /**
     * Test addStarRating()
     *
     * @return void
     */
    public function testAddStarRating(): void {

        // Set a Star rating mock.
        $starRating = new StarRating();

        $obj = new TestArrayStarRatingsTrait();

        $obj->addStarRating($starRating);
        $this->assertSame($starRating, $obj->getStarRatings()[0]);
        $this->assertEquals(1, $obj->getNumberStarRatings());
        $this->assertTrue($obj->hasStarRatings());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayStarRatingsTrait();

        $this->assertEquals([], $obj->getStarRatings());
        $this->assertEquals(0, $obj->getNumberStarRatings());
        $this->assertFalse($obj->hasStarRatings());
    }
}
