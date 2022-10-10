<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider;

use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Javascript provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class JavascriptProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("application/javascript", JavascriptProviderInterface::JAVASCRIPT_PROVIDER_CONTENT_TYPE);
        $this->assertEquals("js", JavascriptProviderInterface::JAVASCRIPT_PROVIDER_EXTENSION);
        $this->assertEquals("wbw.core.provider.javascript", JavascriptProviderInterface::JAVASCRIPT_PROVIDER_TAG_NAME);
    }
}
