<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Model\Attribute;

use WBW\Library\Core\ThirdParty\OcrLad\Model\Attribute\ArrayWordsTrait;

/**
 * Test array words trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Model\Attribute
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