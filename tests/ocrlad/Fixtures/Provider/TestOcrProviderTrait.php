<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Fixtures\Provider;

use WBW\Library\OcrLad\Provider\OcrProviderTrait;

/**
 * Test OCR provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Fixtures\Provider
 */
class TestOcrProviderTrait {

    use OcrProviderTrait {
        setOcrProvider as public;
    }
}
