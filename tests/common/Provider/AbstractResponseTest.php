<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Provider;

use WBW\Library\Common\Provider\ResponseInterface;
use WBW\Library\common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Provider\TestAbstractResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Provider
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractResponse();

        $this->assertInstanceOf(ResponseInterface::class, $obj);

        $this->assertNull($obj->getRawResponse());
    }
}
