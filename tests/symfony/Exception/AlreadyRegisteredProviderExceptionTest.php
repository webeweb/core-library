<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Exception;

use WBW\Library\Symfony\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Already registered provider exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Exception
 */
class AlreadyRegisteredProviderExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Provider mock.
        $provider = new RedColorProvider();

        $obj = new AlreadyRegisteredProviderException($provider);

        $this->assertEquals('The provider "WBW\\Library\\Symfony\\Color\\MaterialDesignColorPalette\\RedColorProvider" is already registered', $obj->getMessage());
    }
}
