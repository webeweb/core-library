<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeCreatedTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time created trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeCreatedTraitTest extends AbstractTestCase {

    /**
     * Test setCreated()
     *
     * @return void
     */
    public function testSetCreated(): void {

        // Set a created mock.
        $created = new DateTime();

        $obj = new TestDateTimeCreatedTrait();

        $obj->setCreated($created);
        $this->assertSame($created, $obj->getCreated());
    }
}
