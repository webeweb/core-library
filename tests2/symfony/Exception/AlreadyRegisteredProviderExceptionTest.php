<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Exception;

use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Already registered provider exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Exception
 */
class AlreadyRegisteredProviderExceptionTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new AlreadyRegisteredProviderException($provider);

        $this->assertEquals('The provider "' . get_class($provider) . '" is already registered', $obj->getMessage());
    }
}
