<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Provider;

use WBW\Library\Core\ThirdParty\OcrLad\Model\IOFile;
use WBW\Library\Core\ThirdParty\OcrLad\Provider\OcrProvider;

/**
 * Test OCR provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Provider
 */
class TestOcrProvider extends OcrProvider {

    /**
     * {@inheritDoc}
     */
    public function buildFilePaths(IOFile $file): array {
        return parent::buildFilePaths($file);
    }
}