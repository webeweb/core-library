<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Provider;

use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Test login()
     *
     * @return void
     */
    public function testLogin(): void {

        try {

            $res = ApiProvider::login($this->easilys["endpoint"], $this->easilys["username"], $this->easilys["password"]);

            $this->assertEquals($this->easilys["endpoint"], $res->getEndpointPath());
            $this->assertNotEmpty($res->getAccessToken());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }
}
