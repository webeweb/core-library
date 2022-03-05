<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\ProgressBarInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestProgressBarTrait;

/**
 * Progress bar trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class ProgressBarTraitTest extends AbstractTestCase {

    /**
     * Tests setProgressBar()
     *
     * @return void
     */
    public function testSetProgressBar(): void {

        // Set a Progress bar mock.
        $progressBar = $this->getMockBuilder(ProgressBarInterface::class)->getMock();

        $obj = new TestProgressBarTrait();

        $obj->setProgressBar($progressBar);
        $this->assertSame($progressBar, $obj->getProgressBar());
    }
}
