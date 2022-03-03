<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Theme;

use WBW\Library\Symfony\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestApplicationThemeProviderTrait;

/**
 * Application theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class ApplicationThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setApplicationThemeProvider()
     *
     * @return void
     */
    public function testSetApplicationThemeProvider(): void {

        // Set an Application theme provider mock.
        $applicationThemeProvider = $this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock();

        $obj = new TestApplicationThemeProviderTrait();

        $obj->setApplicationThemeProvider($applicationThemeProvider);
        $this->assertSame($applicationThemeProvider, $obj->getApplicationThemeProvider());
    }
}
