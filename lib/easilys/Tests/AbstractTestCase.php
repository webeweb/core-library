<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests;

use WBW\Library\Common\Tests\AbstractTestCase as BaseTestCase;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests
 * @abstract
 */
abstract class AbstractTestCase extends BaseTestCase {

    /**
     * Easilys.
     *
     * @var array<string,mixed>|null
     */
    protected $easilys;

    /**
     * Get Easilys.
     *
     * @return array<string,mixed>|null Returns Easilys.
     */
    public static function getEasilys(): ?array {

        $path = __DIR__ . "/../.easilys.json";
        if (true === file_exists($path)) {
            return json_decode(file_get_contents($path), true);
        }

        return [
            "endpoint"     => "endpoint",
            "username"     => "username",
            "password"     => "password",
            "access_token" => "access_token",
        ];
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $this->easilys = static::getEasilys();
    }
}
