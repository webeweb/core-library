<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Badge;

use WBW\Library\Symfony\Assets\Badge\BadgeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\Badge\TestBadgeTrait;

/**
 * Badge trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Badge
 */
class BadgeTraitTest extends AbstractTestCase {

    /**
     * Tests setBadge()
     *
     * @return void
     */
    public function testSetBadge(): void {

        // Set a Badge mock.
        $badge = $this->getMockBuilder(BadgeInterface::class)->getMock();

        $obj = new TestBadgeTrait();

        $obj->setBadge($badge);
        $this->assertSame($badge, $obj->getBadge());
    }
}
