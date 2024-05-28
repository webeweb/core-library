<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Traits\Strings;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Strings\TestStringDateUpdatedTrait;

/**
 * String date updated trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class StringDateUpdatedTraitTest extends AbstractTestCase {

    /**
     * Test setDateUpdated()
     *
     * @return void
     */
    public function testSetDateUpdated(): void {

        $obj = new TestStringDateUpdatedTrait();

        $obj->setDateUpdated("dateUpdated");
        $this->assertEquals("dateUpdated", $obj->getDateUpdated());
    }
}
