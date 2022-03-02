<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Exception;

use WBW\Library\Symfony\Exception\RedirectResponseException;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Redirect response exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Exception
 */
class RedirectResponseExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $originUrl   = "https://github.com/webeweb";
        $redirectUrl = "https://github.com";

        $obj = new RedirectResponseException($redirectUrl, $originUrl);

        $this->assertEquals('You\'re not allowed to access to "https://github.com/webeweb"', $obj->getMessage());

        $this->assertEquals($originUrl, $obj->getOriginUrl());
        $this->assertEquals($redirectUrl, $obj->getRedirectUrl());
    }
}
