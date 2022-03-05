<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Service;

use WBW\Library\Symfony\Service\PhantomJSServiceTrait;

/**
 * Test PhantomJS service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Service
 */
class TestPhantomJSServiceTrait {

    use PhantomJSServiceTrait {
        setPhantomJSService as public;
    }
}
