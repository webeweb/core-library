<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\ProgressBarInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Progress bar interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class ProgressBarInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", ProgressBarInterface::PROGRESS_BAR_DANGER);
        $this->assertEquals("info", ProgressBarInterface::PROGRESS_BAR_INFO);
        $this->assertEquals("success", ProgressBarInterface::PROGRESS_BAR_SUCCESS);
        $this->assertEquals("warning", ProgressBarInterface::PROGRESS_BAR_WARNING);
    }
}
