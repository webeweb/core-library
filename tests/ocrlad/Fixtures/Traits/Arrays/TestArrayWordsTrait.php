<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Fixtures\Traits\Arrays;

use WBW\Library\OcrLad\Traits\Arrays\ArrayWordsTrait;

/**
 * Test array words trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Fixtures\Traits\Arrays
 */
class TestArrayWordsTrait {

    use ArrayWordsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setWords([]);
    }
}
