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
use WBW\Library\Symfony\Tests\Fixtures\Service\TestTokenGeneratorServiceTrait;

/**
 * Token generator service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Service
 */
class TokenGeneratorServiceTraitTest extends AbstractTestCase {

    /**
     * Tests setTokenGeneratorService()
     *
     * @return void
     */
    public function testSetTokenGeneratorService(): void {

        // Set a Token generator service mock.
        $tokenGeneratorService = $this->getMockBuilder(TokenGeneratorServiceInterface::class)->getMock();

        $obj = new TestTokenGeneratorServiceTrait();

        $obj->setTokenGeneratorService($tokenGeneratorService);
        $this->assertSame($tokenGeneratorService, $obj->getTokenGeneratorService());
    }
}
