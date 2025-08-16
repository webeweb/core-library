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

use WBW\Library\XmlTv\Model\Review;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayReviewsTrait;

/**
 * Array reviews trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayReviewsTraitTest extends AbstractTestCase {

    /**
     * Test addReview()
     *
     * @return void
     */
    public function testAddReview(): void {

        // Set a Review mock.
        $review = new Review();

        $obj = new TestArrayReviewsTrait();

        $obj->addReview($review);
        $this->assertSame($review, $obj->getReviews()[0]);
        $this->assertEquals(1, $obj->getNumberReviews());
        $this->assertTrue($obj->hasReviews());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayReviewsTrait();

        $this->assertEquals([], $obj->getReviews());
        $this->assertEquals(0, $obj->getNumberReviews());
        $this->assertFalse($obj->hasReviews());
    }
}
