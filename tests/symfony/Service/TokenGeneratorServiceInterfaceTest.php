<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Service;

use WBW\Library\Symfony\Service\TokenGeneratorServiceInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Token generator service interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Service
 */
class TokenGeneratorServiceInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.service.token_generator", TokenGeneratorServiceInterface::SERVICE_NAME);
    }
}
