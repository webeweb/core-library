<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Fixtures;

/**
 * Test exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Fixtures
 */
class TestObject {

    /**
     * Boolean.
     *
     * @var bool
     */
    private $bool;

    /**
     * Float.
     *
     * @var float
     */
    private $float;

    /**
     * Integer.
     *
     * @var int
     */
    private $int;

    /**
     * String.
     *
     * @var string
     */
    private $string;

    /**
     * Constructor.
     *
     * @param string $string The string.
     * @param bool $bool The boolean.
     * @param float $float The float.
     * @param int $int The integer.
     */
    public function __construct(string $string, bool $bool, float $float, int $int) {
        $this->bool   = $bool;
        $this->float  = $float;
        $this->int    = $int;
        $this->string = $string;
    }

    /**
     * Get the boolean.
     *
     * @return bool Returns the boolean.
     */
    public function getBool(): bool {
        return $this->bool;
    }

    /**
     * Get the float.
     *
     * @return float Returns the float.
     */
    public function getFloat(): float {
        return $this->float;
    }

    /**
     * Get the integer.
     *
     * @return int Returns the integer.
     */
    public function getInt(): int {
        return $this->int;
    }

    /**
     * Get the string.
     *
     * @return string Returns the string.
     */
    public function getString(): string {
        return $this->string;
    }
}
