<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Provider;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Provider\TestAbstractRequest;
use WBW\Library\Common\Provider\RequestInterface;

/**
 * Abstract request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Provider
 */
class AbstractRequestTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractRequest();

        $this->assertInstanceOf(RequestInterface::class, $obj);
    }
}
