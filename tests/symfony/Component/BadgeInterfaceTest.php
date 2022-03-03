<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component;

use WBW\Library\Symfony\Component\BadgeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Badge interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component
 */
class BadgeInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", BadgeInterface::BADGE_DANGER);
        $this->assertEquals("info", BadgeInterface::BADGE_INFO);
        $this->assertEquals("success", BadgeInterface::BADGE_SUCCESS);
        $this->assertEquals("warning", BadgeInterface::BADGE_WARNING);
    }
}
